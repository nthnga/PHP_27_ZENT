<?php 
   session_start();
   $files = $_SESSION['files'];
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Index</title>
  <!-- Font-awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <!-- Latest compiled and minified CSS -->
  <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">

  <!-- Optional theme -->
  <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap-theme.min.css">

  <!-- Latest compiled and minified JavaScript -->
  <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
</head>
<body>
   <div class="container">
      <h2 class="text-center">---Documents---</h2>
      <table class="table table-bordered">
         <a href="upload.php" class="btn btn-success" role="button">Upload Document</a>
            <thead>     
               <tr>
                 <th>No</th>
                 <th>Name</th> 
                 <th>Download</th>
                 <th>#</th>
               </tr>
         </thead>
         <?php 
         $i = 0;
         foreach($files as $key=> $data){ ?>
         <tr>
            <td><?= $key ?></td>
            <td><?= $data['name'] ?></td>
            <td><a class="btn btn-primary" href="files/<?= $data['file_name'] ?>">Download</a></td>
            <td><a class="btn btn-danger" href="delete.php?id=<?=$key?>">Remove</a></td>
         </tr>
         <?php }
          $i++;
        ?>
      </table>  
   </div>
</body>
</html>