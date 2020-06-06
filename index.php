<?php
    include_once('db/config.php');
    include('header.php');
    $sql = "SELECT items.*,categories.category_name FROM items INNER JOIN categories ON items.category_id = categories.id";
    // echo $sql; exit();
    $result = mysqli_query($con,$sql);
    // var_dump($result);

?>

      <div class="container">
        <div class="row">
            <div class="col-md-12">
                <a href="create.php" class="btn btn-success">Add Data</a>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <table class="table table-bordered">
                    <tr>
                        <th>Item Name</th>
                        <th>Item Code</th>
                        <th>Item Price</th>
                        <th>Item image</th>
                        <th>Item Description</th>
                        <th>Category</th>
                        <th>Action</th>
                    </tr>
                    <?php while($row = mysqli_fetch_assoc($result)){
                    ?>
                        <tr>
                            <td><?php echo $row['item_name'];?></td>
                            <td><?php echo $row['item_code'];?></td>
                            <td><?php echo $row['item_price'];?></td>
                            <td>
                            <img src="upload/<?php echo $row['item_image'];?>"width="100px" alt="">
                            </td>
                            <td><?php echo $row['item_description'];?></td>
                            <td><?php echo $row['category_name'];?></td>
                            <td>
                                <a href="edit.php?id=<?php echo $row['id'];?>" class="btn btn-primary">Edit</a>
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
<?php include('footer.php');?>

