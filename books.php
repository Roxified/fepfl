<?php  ob_start(); session_start(); require('db/config.php'); require('db/functions.php');
if(isset($_SESSION['usercode']) & isset($_SESSION['user_email'])){ $users = extract(get_user_details($_SESSION['user_email'])); } else{}  $link = 4; ; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Books - FEPFL Publications</title>
    <?php include('nav/links.php'); ?>
    <!-- <link href="assets/vendor/fonts/circular-std/style.css" rel="stylesheet"> -->
    <link rel="stylesheet" href="assets/lib/css/style.css">
</head>
<body>
    <?php include('nav/nav.php'); ?>
    
    <!-- Page Header Start -->
    <div class="page-header">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h2> </h2>
                </div>
                <div class="col-12">
                    <a href="index">Home</a>
                    <a href="">Books</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Page Header End -->
    <?php  
    // if(isset($_GET['id'])){
    //     $_SESSION['buy_book'] = $_GET['id'];
    //     $_SESSION['title'] = $_GET['title'];
    //     $idBook = $_SESSION['buy_book'];
    //     $title  = $_SESSION['title'];
    //     $url_title = strtolower(str_replace(' ', '-', $title));
    //     header('location:buy_book'); die();
    // }


    ?>

    <!-- Single Post Start-->
    <div class="single">
        <div class="container">
         <div class="section-header text-center">
            <p>Our Publications</p>
            <h2>Latest Books by FEPFL</h2>
        </div> 
        <div class="row">
            <div class="col-lg-9">
                <div class="row">
                    <?php foreach (get_all_books() as $rows) {extract($rows); ?>
                        <div class="col-lg-3 col-md-3 col-sm-3 col-6">
                            <div class="product-thumbnail">
                             <div class="product-img-head">
                                <div class="product-img">
                                    <img src="master/<?php echo $book_img; ?>" alt="" class="img-fluid"></div>
                                    
                                    <!-- <div class=""><a href="#" class="product-wishlist-btn"><i class="fas fa-heart"></i></a></div> -->
                                </div>
                                <div class="product-content">
                                    <div class="product-content-head">
                                        <h3 class="product-title"><?php echo $book_name; ?></h3>
                                        <div class="product-rating d-inline-block">
                                            <i class="fa fa-fw fa-star"></i>
                                            <i class="fa fa-fw fa-star"></i>
                                            <i class="fa fa-fw fa-star"></i>
                                            <i class="fa fa-fw fa-star"></i>
                                            <i class="fa fa-fw fa-star"></i>
                                        </div>
                                        <div class="product-price"><del>N</del><?php if($book_price==0){echo "Free"; }else{echo $book_price; } ?></div>
                                    </div>
                                    <div class="product-btn">
                                        <a href="buy_book/<?php echo $book_id; ?>/<?php echo date('Y',$book_date); ?>/<?php echo strtolower(str_replace(' ', '-', $book_name)); ?>" class="btn btn-primary">Buy Now</a>
                                        <a href="buy_book/<?php echo $book_id; ?>/<?php echo date('Y',$book_date); ?>/<?php echo strtolower(str_replace(' ', '-', $book_name)); ?>" class="btn btn-outline-light">Details</a>
                                        <!--   <a href="#" class="btn btn-outline-light"><i class="fas fa-exchange-alt"></i></a> -->
                                    </div>
                                </div>
                            </div>
                        </div>

                    <?php } ?>
                </div>
            </div>

            <div class="col-lg-3">
                <div class="sidebar">
                    <div class="sidebar-widget">
                        <div class="search-widget">
                            <form>
                                <input class="form-control" type="text" placeholder="Search Keyword">
                                <button class="btn"><i class="fa fa-search"></i></button>
                            </form>
                        </div>
                    </div>

                    <div class="sidebar-widget">
                        <h2 class="widget-title">Recent Post</h2>
                        <?php foreach (QueryDB("SELECT * FROM posts where post_status =1 ORDER BY id DESC  LIMIT 5 ") as $value) {extract($value);
                            ?>
                            <div class="recent-post">
                                <div class="post-item">
                                    <div class="post-img">
                                        <img src="master/<?php echo $post_img; ?>" />
                                    </div>
                                    <div class="post-text">
                                        <a href="post/<?php echo $post_id; ?>/<?php echo date('Y',$post_date); ?>/<?php echo strtolower(str_replace(' ', '-', $post_title)); ?>"><?php echo $post_title; ?></a>

                                    </div>
                                </div>

                            </div>

                        <?php } ?>
                    </div>


                    <div class="sidebar-widget">
                        <h2 class="widget-title">Categories</h2>
                        <div class="category-widget">
                            <ul><?php foreach(get_cat() as $rows){extract($rows);  ?>
                                <li><a href="post/category/<?php echo str_replace(' ', '-', strtolower($cat_name)); ?>"><?php echo $cat_name;  ?></a><span>(<?php echo post_cat_counter($post_cat);  ?>)</span></li>
                            <?php } ?>

                        </ul>
                    </div>
                </div>

                           <!--  <div class="sidebar-widget">
                                <div class="image-widget">
                                    <a href="#"><img src="../../../img/blog-3.jpg" alt="Image"></a>
                                </div>
                            </div> -->

                            <div class="sidebar-widget">
                                <h2 class="widget-title">Tags Cloud</h2>
                                <div class="tag-widget">
                                    <?php foreach (get_cat() as $key) {extract($key);
                                        ?>
                                        <a href="post/category/<?php echo str_replace(' ', '-', strtolower($cat_name)); ?>"><?php echo $cat_name;  ?></a>
                                    <?php  } ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <!-- Single Post End-->   
        <div class="footer bg-dark">
            <div class="container">
                <div class="row">
                    <div class="container copyright  text-white">
                        <div class="row">
                            <div class="col-md-6">
                                <p style="display: none">&copy; <a href="#">Your Site Name</a>, All Right Reserved.</p>
                                <p >Copyright &copy; <a href="https://www.familypeace247.org">Family Peace 247</a>, All Right Reserved <?php  echo date('Y'); ?>.</p>
                            </div>
                            <div class="col-md-6">
                                <p>Designed By <a href="https://wa.me/2349024945875" target="_blank">Roxified Global Services</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <a href="#" class="back-to-top"><i class="fas fa-level-up-alt" style="color: white"></i></a>



        <?php include('nav/scripts.php'); ?>
        <script>
            jQuery('<div class="quantity-nav"><div class="quantity-button quantity-up">+</div><div class="quantity-button quantity-down">-</div></div>').insertAfter('.quantity input');
            jQuery('.quantity').each(function() {
                var spinner = jQuery(this),
                input = spinner.find('input[type="number"]'),
                btnUp = spinner.find('.quantity-up'),
                btnDown = spinner.find('.quantity-down'),
                min = input.attr('min'),
                max = input.attr('max');

                btnUp.click(function() {
                    var oldValue = parseFloat(input.val());
                    if (oldValue >= max) {
                        var newVal = oldValue;
                    } else {
                        var newVal = oldValue + 1;
                    }
                    spinner.find("input").val(newVal);
                    spinner.find("input").trigger("change");
                });

                btnDown.click(function() {
                    var oldValue = parseFloat(input.val());
                    if (oldValue <= min) {
                        var newVal = oldValue;
                    } else {
                        var newVal = oldValue - 1;
                    }
                    spinner.find("input").val(newVal);
                    spinner.find("input").trigger("change");
                });

            });
        </script>
        <?php include('initialize.php'); ?>
    </body>
    </html>
