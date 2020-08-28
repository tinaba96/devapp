<?php
namespace App\Http\Controllers;

use App\Folder;
use App\Task; 
use Illuminate\Http\Request;
use App\Http\Requests\CreateTask;
use Illuminate\Support\Facades\Auth;

class TaskController extends Controller
{
    public function index(Folder $folder)
    {
        $folders = Auth::user()->folders()->get();
        $folders = Folder::all();

        $current_folder = Folder::find($id);

        if (is_null($current_folder)) {
                abort(404);
            }

        $tasks = $current_folder->tasks()->get();
        $tasks = $folder->tasks()->get();

        return view('tasks/index', [
            'folders' => $folders,
            'current_folder_id' => $id,
            'tasks' => $tasks,
        ]);
    }
    public function showCreateForm(int $id)
    {
    return view('tasks/create', [
        'folder_id' => $id
    ]);
    }

    public function create(int $id, CreateTask $request)
  {
    $current_folder = Folder::find($id);

    $task = new Task();
    $task->title = $request->title;
    $task->due_date = $request->due_date;

    $current_folder->tasks()->save($task);

    return redirect()->route('tasks.index', [
        'id' => $current_folder->id,
    ]);
   }
    public function showEditForm(int $id, int $task_id)
    {
    $task = Task::find($task_id);

    return view('tasks/edit', [
        'task' => $task,
    ]);
    }
    public function edit(int $id, int $task_id, EditTask $request)
    {
    // 1
    $task = Task::find($task_id);

    // 2
    $task->title = $request->title;
    $task->status = $request->status;
    $task->due_date = $request->due_date;
    $task->save();

    // 3
    return redirect()->route('tasks.index', [
        'id' => $task->folder_id,
    ]);
    }
}


