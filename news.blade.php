<!DOCTYPE html>
<html lang="en">

<head>
    <title>Add news</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>

<body>

    <div class="container">
        <h2>News</h2>
        <form action="{{ route('resaved') }} " method="post">
            @csrf
            <div class="form-group">
                <label for="title">Title:</label>
                <input type="text" class="form-control" id="title" placeholder="Enter title" name="title">
            </div>
            <div class="form-group">
                <label for="price">Autror:</label>
                <input type="text" class="form-control" id="price" placeholder="Enter Autror" name="author">
            </div>
            <div class="form-group">
                <label for="description">content:</label>
                <textarea class="form-control" rows="5" name="content" id="description"></textarea>
            </div>
            <div class="checkbox">
                <label><input type="checkbox" name="Published"> Published</label>
            </div>
            <button type="submit" class="btn btn-default">save</button>
        </form>
    </div>

</body>

</html>