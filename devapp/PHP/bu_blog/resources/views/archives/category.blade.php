<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>{{ $category }}の一覧</title>
</head>
<body>
    <p>{{ $category }}の一覧 </p>
    @if ($category == 'news')
      <p>本日のニュースをお伝えします。</p>
    @endif
    
</body>
</html>
