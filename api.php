<?php
 header("Access-Control-Allow-Origin: *");
 $connection = new mysqli("localhost","root","","api_steven");
 $data = mysqli_query($connection, "select * from tbl_produk");
 $data = mysqli_fetch_all($data, MYSQLI_ASSOC);
 echo json_encode($data);
 ?>