<?php include "navbar.php" ?>
    <div class="container">
        <h1>Products</h1>
        <div class="row">

            <?php

            include "config.php";

            $query = "SELECT * FROM `post` 
            LEFT JOIN user ON post.author = user.user_id
            LEFT JOIN category ON post.category = category.category_id";

            $result = mysqli_query($conn, $query);

            if (mysqli_num_rows($result) > 0) {


                while ($row = mysqli_fetch_assoc($result)) {



            ?>
                    <div class="col-sm-3">
                        <div class="card" style="width: 100%; ">
                       
                            <a href=""><img class="card-img-top" src="admin/upload/<?php echo $row["post_img"]; ?>" alt="" style="width: 100%; height: 100%;"></a>
                            <div class="card-body">
                                <h4 class="card-title"><?php echo $row["title"]; ?></h4>
                                <p class="card-text"><?php echo $row["description"]; ?><br>
                                </p>
                                <a href="product_detail.php?id=<?php echo $row["post_id"]; ?>" class="btn" style="color: black;">See Product</a>
                            </div>
                        </div>
                    </div>
            <?php }
            } ?>
        </div>
        <br><br>

    </div>

    </div>
    </div>

</body>

</html>