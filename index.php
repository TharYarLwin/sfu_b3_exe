<?php
    include_once('db/config.php');
    $sql = "SELECT * FROM items INNER JOIN categories ON items.category_id = categories.id";
   // echo $sql; exit();

    $result = mysqli_query($con,$sql);
    //var_dump($result);
?>

<!doctype html>
<html lang="en">
    <head>
      <title> </title>
      <!-- Required meta tags -->
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  
      <!-- Bootstrap CSS -->
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    </head>
    <body>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <table class="table table-bordered">
                        <tr>
                            <th>Item Name</th>
                            <th>Item Code</th>
                            <th>Item Price</th>
                            <th>Item Image</th>
                            <th>Item Description</th>
                            <th>Item Remark</th>
                            <th>Category</th>
                            <th>Action</th>
                        </tr>
                        <?php while($row = mysqli_fetch_assoc($result)){
                        ?>
                            <tr>
                                <td><?php echo $row['item_name'];?></td>
                                <td><?php echo $row['item_code'];?></td>
                                <td><?php echo $row['item_price'];?></td>
                                <td><?php echo $row['item_image'];?></td>
                                <td><?php echo $row['item_description'];?></td>
                                <td><?php echo $row['item_remark'];?></td>
                                <td><?php echo $row['category_name'];?></td>
                                <td>
                                    <a href="#" class="btn btn-primary">Edit</a>
                                    <a href="delete.php?id=<?php echo $row['id'];?>" class="btn btn-danger">Delete</a>
                                </td>
                            </tr>
                        <?php
                        }
                        ?>
                    </table>
                </div>
            </div>
         </div>
      <!-- Optional JavaScript -->
      <!-- jQuery first, then Popper.js, then Bootstrap JS -->
      <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    </body>
 </html>

