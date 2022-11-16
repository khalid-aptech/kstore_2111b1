<!doctype html>
<html>

<head>
    <meta charset='utf-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <title>Snippet - GoSNippets</title>
    <link href='https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css' rel='stylesheet'>
    <link href='' rel='stylesheet'>
    <style>
        body {
            font-family: 'Roboto Condensed', sans-serif;
            background-color: #f5f5f5
        }

        .hedding {
            font-size: 20px;
            color: #ab8181`;
        }

        .main-section {
            position: absolute;
            left: 50%;
            right: 50%;
            transform: translate(-50%, 5%);
        }

        .left-side-product-box img {
            width: 100%;
        }

        .left-side-product-box .sub-img img {
            margin-top: 5px;
            width: 83px;
            height: 100px;
        }

        .right-side-pro-detail span {
            font-size: 15px;
        }

        .right-side-pro-detail p {
            font-size: 25px;
            color: #a1a1a1;
        }

        .right-side-pro-detail .price-pro {
            color: #E45641;
        }

        .right-side-pro-detail .tag-section {
            font-size: 18px;
            color: #5D4C46;
        }

        .pro-box-section .pro-box img {
            width: 100%;
            height: 200px;
        }

        @media (min-width:360px) and (max-width:640px) {
            .pro-box-section .pro-box img {
                height: auto;
            }
        }
    </style>
    <script type='text/javascript' src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script>
    <script type='text/javascript' src='https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js'></script>
    <script type='text/javascript' src='https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js'></script>
</head>

<body oncontextmenu='return false' class='snippet-body'>
    <?php include "navbar.php" ?>
    <div class="container-fluid">
        <div class="col-lg-8 border p-3 main-section bg-white">
            <div class="row hedding m-0 pl-3 pt-0 pb-3">
                Product Detail Design Using Bootstrap 4.0
            </div>

            <?php

            include "config.php";

            $p_id = $_GET["id"];

            $query = "SELECT * FROM `post` Where `post_id` = '{$p_id}'";

            $result = mysqli_query($conn, $query);

            if (mysqli_num_rows($result) > 0) {


                while ($row = mysqli_fetch_assoc($result)) {



            ?>
                    <div class="row m-0">
                        <div class="col-lg-4 left-side-product-box pb-3">
                            <img src="admin/upload/<?php echo $row["post_img"]; ?>" class="border p-3">
                            <span class="sub-img">
                                <img src="admin/upload/<?php echo $row["post_img"]; ?>" class="border p-2">
                                <img src="admin/upload/<?php echo $row["post_img"]; ?>" class="border p-2">
                                <img src="admin/upload/<?php echo $row["post_img"]; ?>" class="border p-2">
                            </span>
                        </div>
                        <div class="col-lg-8">
                            <div class="right-side-pro-detail border p-3 m-0">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <span>Best Products </span>
                                        <p class="m-0 p-0"><?php echo $row["title"]; ?></p>
                                    </div>
                                    <div class="col-lg-12">
                                        <p class="m-0 p-0 price-pro">$ <?php echo $row["price"]; ?></p>
                                        <hr class="p-0 m-0">
                                    </div>
                                    <div class="col-lg-12 pt-2">
                                        <h5>Product Detail</h5>
                                        <span><?php echo $row["description"]; ?></span>
                                        <hr class="m-0 pt-2 mt-2">
                                    </div>

                                    <div class="col-lg-12">
                                        <h6>Quantity :</h6>
                                        <input type="number" class="form-control text-center w-100" value="1">
                                    </div>
                                    <div class="col-lg-12 mt-3">
                                        <form action="" method="POST">


                                            <div class="row">
                                                <div class="col-lg-6 pb-2">
                                                    <!-- <a href="" type="" name="add_to_cart" class="btn btn-danger w-100">Add To Cart</a> -->

                                                    <input type="submit" name="add_to_cart" id="" value="Add To Cart" class="btn btn-danger w-100">
                                                </div>
                                                <div class="col-lg-6">
                                                    <a href="#" class="btn btn-success w-100">Shop Now</a>
                                                </div>
                                            </div>
                                        </form>
                                        <?php

                                        if(isset($_POST["add_to_cart"]))
                                        {

                                  
                                        $p_name = $row["title"];
                                        $p_price = $row["price"];
                                        $p_image = $row["post_img"];
                                        $p_qty = 1;


                                        $query1 = "INSERT INTO `cart`(`name`, `price`, `image`, `qty`) VALUES ('{$p_name}','{$p_price}','{$p_image}','{$p_qty}')";
                                        mysqli_query($conn, $query1);
                                        echo "product added successfull";
                                        }

                                        ?>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
            <?php }
            }  ?>
            <div class="row">
                <div class="col-lg-12 text-center pt-3">
                    <h4>More Product</h4>
                </div>
            </div>
            <div class="row mt-3 p-0 text-center pro-box-section">
                <div class="col-lg-3 pb-2">
                    <div class="pro-box border p-0 m-0">
                        <img src="http://nicesnippets.com/demo/pd-b-image1.jpg">
                    </div>
                </div>
                <div class="col-lg-3 pb-2">
                    <div class="pro-box border p-0 m-0">
                        <img src="http://nicesnippets.com/demo/pd-b-images2.jpg">
                    </div>
                </div>
                <div class="col-lg-3 pb-2">
                    <div class="pro-box border p-0 m-0">
                        <img src="http://nicesnippets.com/demo/pd-b-images3.jpg">
                    </div>
                </div>
                <div class="col-lg-3 pb-2">
                    <div class="pro-box border p-0 m-0">
                        <img src="http://nicesnippets.com/demo/pd-b-images4.jpg">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script type='text/javascript'></script>
</body>

</html>