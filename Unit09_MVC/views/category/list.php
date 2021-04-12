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
        <h3 class="text-center">---CATEGORY---</h3>
        <a href="" class="btn btn-primary">Add To Categories</a>

        <table class="table">
            <thead>
                <th>ID</th>
                <th>Name</th>
                <th>Thumbnail</th>
                <th>Description</th>
                <th>Action</th>
            </thead>

            <?php foreach ($categories as $cate) {
                
            ?>
            <tr>
                <td><?= $cate['id'] ?></td>
                <td><?= $cate['name'] ?></td>
                <td>
                    <img src="<?= $cate['thumbnail'] ?>" width="100px" height="100px">
                </td>

                <td><?= $cate['description'] ?></td>

                <td>
                    <a href="index.php?mod=category&act=detail&id=<?= $cate['id'] ?>
                    " class="btn btn-primary" style="margin-bottom: 10px;">Detail</a>
                    <a href="" class="btn btn-success" style="margin-bottom: 10px;">Edit</a>
                    <a href="index.php?mod=category&act=destroy&id=<?= $cate['id'] ?>" class="btn btn-danger" style="margin-bottom: 10px;">Delete</a>
                </td>
            </tr>
            <?php } ?>
        </table>
    </div>
</body>
</html>