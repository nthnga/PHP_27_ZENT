<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>POSTS</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">

    <!-- Optional theme -->
    <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap-theme.min.css">

    <!-- Latest compiled and minified JavaScript -->
    <script src="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>

</head>
<body>
    <div class="container">
        <h3 class="text-center">--- POSTS ---</h3>
        <a href="" class="btn btn-primary">Add New POSTS</a>


        <table class="table">
            <thead>
                <th>ID</th>
                <th>Title</th>
                <th>Description</th>
                <th>Thumbnail</th>
                <th>Slug</th>
                <th>View_count</th>
                <th>User_id</th>
                <th>Category_id</th>
                <th>Created_at</th>
            </thead>

           <?php foreach($post as $pos ) {
           ?>
            <tr>
                <td><?= $pos['id'] ?></td>
                <td><?= $pos['title'] ?></td>
                <td><?= $pos['description'] ?></td>
                <td>
                    <img src="<?= $pos['thumbnail'] ?>" width="100px" height="100px">
                </td>

                <td><?= $pos['slug'] ?></td>
                <td><?= $pos['view_count'] ?></td>
                <td><?= $pos['user_id'] ?></td>
                <td><?= $pos['category_id'] ?></td>
                <td><?= $pos['created_at'] ?></td>

                <td>
                    <a href="index.php?mod=post&act=detail&id=<?= $pos['id'] ?>" class="btn btn-primary" style="margin-bottom: 10px;">Detail</a>
                    <a href="" class="btn btn-success" style="margin-bottom: 10px;">Edit</a>
                    <a href="" class="btn btn-danger" style="margin-bottom: 10px;">Delete</a>
                </td>
            </tr>
            <?php } ?>
        </table>
    </div>
</body>
</html>