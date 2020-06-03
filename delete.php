<?php
    include_once('db/config.php');

    $sqlDel = "DELETE FROM items WHERE id=".$_GET['id'];
    // echo $sqlDel;exit();
    mysqli_query($con,$sqlDel);
    header('location:index.php');

?>