<div class="row">
            <?php

            include "config.php";

            $p_id = $_GET["id"]; 

            $query = "SELECT * FROM `post` LEFT JOIN category ON post.category = category.category_id LEFT JOIN user ON post.author = user.user_id where `post_id` =  {$p_id} ";

            $result = mysqli_query($conn, $query);
            if(mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_assoc($result)) {



            ?>
                    <div class="col-sm-3">
                        <div class="card" style="width: 40%; ">
                            <a href=""><img class="card-img-top" src="admin/upload/<?php echo $row["post_img"]; ?>" alt="" style="width: 50%; height: 50%;"></a>
                            <div class="card-body">
                                <h4 class="card-title"><?php echo $row["title"]; ?></h4>
                                <p class="card-text"><?php echo $row["description"]; ?><br>
                                </p>
                                <p>Price : 3500 RS</p>
                            </div>
                        </div>
                    </div>
            <?php

                }
            }
            ?>

        </div><br><br>
   