<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Entry;

class EntriesController extends Controller
{
    //
    public function index() {
      $entries = Entry::all();
      foreach ($entries as $entry){
        var_dump($entry->content);
      }
    }
}
