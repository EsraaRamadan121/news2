<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2>news Table</h2>
  <table class="table">
    <thead>
      <tr>
        <th>News title</th>
        <th>author</th>
        <th>content</th>
        <th>Published</th>
        <th>edit</th>

      </tr>
    </thead>
    <tbody>
     @foreach($news as $news)
      <tr>
        <td>{{$news->newstitle}}</td>
        <td>{{$news->author}}</td>
        <td>{{$news->content}}</td>
        <td>
          @if($news->published)
          yes
          @else
          no
          @endif
        </td>
          <th><a href="eidtnews/{{$news->id}}">edit</a></th>
      </tr>
        
      @endforeach
    </tbody>
  </table>
</div>

</body>
</html>
