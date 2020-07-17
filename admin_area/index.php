<?php
include("includes/db.php");
?>
<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <title>Admin_Panel</title>
    <link rel="stylesheet" href="Bootstrap4/bootstrap.min.css">
</head>
<style>
body {
    margin: 0;
}

.product {
    display: inline-block;
    margin-top: 50px;
    margin-right: 10px;
    background: #eee;
    padding: 10px;
    width: 750px;
    height: 500px;
    border: 2px solid black;
    border-radius: 10px;
    overflow: scroll;
}

.operations {
    display: inline-block;
    border: 2px solid gray;
    border-top-left-radius: 10px;
    border-top-right-radius: 10px;
    margin: 50px 0px;
    background: #eee;
    padding: 10px;
    width: 300px;
    height: 200px;
    text-align: center;
}
</style>

<body>
    <div class="ml-5">
        <center>
            <h1>Welcome to the Admin Panel</h1>
        </center>
        <div class="main">
            <div class="product">

                <table style="border-radius: 10px; border-bottom: 2px solid black;margin-bottom: 5px ">
                    <tr align="center">
                        <th colspan="7">
                            <h1>Products</h1>
                        </th>
                    </tr>
                    <tr>
                        <th class="bg-danger p-2" style="width:40px;display: inline-block">ID</th>
                        <th class="bg-info p-2" style="width:70px;display: inline-block">TITLE</th>
                        <th class="bg-danger p-2" style="width:100px;display: inline-block">CATEGORY</th>
                        <th class="bg-info p-2" style="width:110px;display: inline-block">S_CATEGORY</th>
                        <th class="bg-danger p-2" style="width:70px;display: inline-block">BRAND</th>
                        <th class="bg-info p-2" style="width:60px;display: inline-block">PRICE</th>
                        <th class="bg-danger p-2" style="width:150px;display: inline-block">DESCRIPTION</th>
                        <th class="bg-info p-2" style="width:80px;display: inline-block">C_IMAGE</th>
                    </tr>

                    <?php orderDetails(); ?>
                </table>
            </div>
            <div class="operations">
                <h2>Operations</h2>
                <ul>
                    <li><a href="insert_product.php">INSERT</a></li>
                    <li><a href="update_product.php">UPDATE</a></li>
                    <li><a href="delete_product.php">DELETE</a></li>
                </ul>
                <span><b>Total Products : <?php countProducts(); ?></b></span>
            </div>
        </div>

    </div>

    <script src="Bootstrap4/jquery.min.js"></script>
    <script src="Bootstrap4/popper.min.js"></script>
    <script src="Bootstrap4/bootstrap.min.js"></script>
</body>

</html>