<?php 
    include_once('db/config.php');
    include('header.php');

    $sqlCategory = "SELECT * FROM categories";
    $resultCategory = mysqli_query($con, $sqlCategory);

    if($_SERVER['REQUEST_METHOD'] == 'POST')
    {
        $item_name = $_POST['item_name'];
        $item_code = $_POST['item_code'];
        $item_price = $_POST['item_price'];
        $item_image = $_POST['item_image'];
        $item_description = $_POST['item_description'];
        $item_remark = $_POST['item_remark'];
        $category_id = $_POST['category_id'];

        $sqlInsert = "INSERT INTO items(item_name,item_code,item_price,item_image,item_description,item_remark,category_id) 
        VALUES('$item_name','$item_code','$item_price','$item_image','$item_description','$item_remark','$category_id')";
        // echo $sqlInsert;
        // exit();

        mysqli_query($con,$sqlInsert);
        header('location:index.php');

    }

?>
<div class="container">
    <div class="row">
        <div class="col-md-8">
            <form action="#" method="post">
                <div class="form-group">
                  <label for="item_name">Item Name</label>
                  <input type="text"
                    class="form-control" name="item_name" id="item_name" aria-describedby="helpId" placeholder="item_name">
                  <small id="helpId" class="form-text text-muted">Enter Item Name.</small>
                </div>
                <div class="form-group">
                  <label for="item_code">Item Code</label>
                  <input type="text"
                    class="form-control" name="item_code" id="item_code" aria-describedby="helpId" placeholder="item_code">
                  <small id="helpId" class="form-text text-muted">Enter Item Code.</small>
                </div>
                <div class="form-group">
                  <label for="item_price">Item Price</label>
                  <input type="number"
                    class="form-control" name="item_price" id="item_price" aria-describedby="helpId" placeholder="item_price">
                  <small id="helpId" class="form-text text-muted">Enter Item Price.</small>
                </div>
                <div class="form-group">
                  <label for="item_image">Item Image</label>
                  <input type="text"
                    class="form-control" name="item_image" id="item_image" aria-describedby="helpId" placeholder="item_image">
                  <small id="helpId" class="form-text text-muted">Enter Item Image.</small>
                </div>
                <div class="form-group">
                  <label for="item_description">Item Description</label>
                  <input type="text"
                    class="form-control" name="item_description" id="item_description" aria-describedby="helpId" placeholder="item_description">
                  <small id="helpId" class="form-text text-muted">Enter Item Description.</small>
                </div>
                <div class="form-group">
                  <label for="item_remarks">Item Remark</label>
                  <input type="text"
                    class="form-control" name="item_remark" id="item_remark" aria-describedby="helpId" placeholder="item_remark">
                  <small id="helpId" class="form-text text-muted">Enter Item Remark.</small>
                </div>
                <div class="form-group">
                  <label for="">Category</label>
                  <select class="form-control" name="category_id" id="">
                    <?php
                        while($row = mysqli_fetch_assoc($resultCategory))
                        {
                    ?>
                        <option value="<?php echo $row['id'];?>">
                            <?php echo $row['category_name'];?>
                        </option>
                    <?php

                        }

                    ?>
                  </select>
                </div>
                <input type="submit" value="Save Item" class="btn btn-primary">
            </form>
        </div>
    </div>
</div>
<?php include('footer.php');?>