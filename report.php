<?php  ob_start(); session_start(); require('db/config.php'); require('db/functions.php');
if(isset($_SESSION['usercode']) & isset($_SESSION['user_email'])){ $users = extract(get_user_details($_SESSION['user_email'])); } else{}
$link = 5; ; ?>


<!DOCTYPE html>
<html lang="en">
<head>

    <title>FEPFL Reports - Family Peace 247</title>
    <?php include('nav/links.php'); ?>
</head>

<body>
    <?php include('nav/nav.php');  ?>
    <!-- Page Header Start -->
    <div class="page-header">
        <div class="container">
            <div class="row">
                <div class="col-12" style="margin-top: 30px">
                    <h2>FEPFL REPORTS</h2>
                </div>
                <div class="col-12">
                    <a href="index">Home</a>
                    <a href="">Reports</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Page Header End -->
    <!-- Event Start -->
    <div class="event">
        <div class="section-header text-center">
            <!-- <p>Read through our reports</p> -->
            <h2>Get to know about the progress of FEPFL</h2>
            <!-- <h3>Coming soon!!!</h3> -->
        </div> 


        <?php if($_GET['rep']=='0'){  ?>
            <div class="">
                <div class="container">
                    <div class="row">
                      <div class="section-header text-center" style="color: white">
                        <a class="btn btn-primary" href="report?rep=daily ">Daily</a>
                        <a class="btn btn-primary" href="report?rep=weekly ">Weekly</a>
                        <a class="btn btn-primary" href="report?rep=monthly">Monthly</a>
                        <a class="btn btn-primary" href="report?rep=quarterly ">Quarterly</a>
                        <a class="btn btn-primary" href="report?rep=annual ">Annual</a>
                        <!-- <h3>Coming soon!!!</h3> -->
                    </div>
                </div>
            </div>
            </div><?php  }  ?>

            <?php if($_GET['rep']=='daily'){  ?>
                <div class="single">
                    <div class="col-lg-12">
                        <div class="section-header text-center" style="color: white">
                            <a class="btn btn-primary active" href="report?rep=daily ">Daily</a>
                            <a class="btn btn-primary" href="report?rep=weekly ">Weekly</a>
                            <a class="btn btn-primary" href="report?rep=monthly">Monthly</a>
                            <a class="btn btn-primary" href="report?rep=quarterly ">Quarterly</a>
                            <a class="btn btn-primary" href="report?rep=annual ">Annual</a>
                            <!-- <h3>Coming soon!!!</h3> -->
                        </div>
                        <div class="row">

                            <div class="col-lg-12">
                                <div class="row">
                                    <?php foreach(QueryDB("SELECT * FROM report where rep_cat = 'daily' ORDER BY ins_date DESC  ") as $rows){ extract($rows); ?>
                                        <div class="col-lg-3 col-md-3">
                                            <div class="event-item"><?php if(empty($rep_img) || $rep_img=='' ){ }else{?>
                                                <img src="master/<?php  echo $rep_img; ?>" alt="Image"> <?php } ?>
                                                <div class="event-content">
                                                    <div class="event-text">
                                                        <div class="event-meta">
                                                            <p><i class="fa fa-calendar-alt"></i><?php  echo date('d', strtotime($rep_date)); ?>-<?php  echo date('d M Y', strtotime($rep_date)); ?> </p>
                                                            <p><i class="fa fa-book"></i>Thematic Area: <?php  echo $thematic; ?></p>
                                                            <p><i class="fa fa-male"></i>Male Participant: <?php  echo $m_part; ?></p>
                                                            <p><i class="fa fa-female"></i>Female Participant: <?php  echo $f_part; ?></p>

                                                        </div>
                                                        <p><i class="fa fa-map-marker-alt"></i> <?php  echo $rep_venue; ?></p>

                                                        <h3><?php  echo $rep_title; ?></h3>
                                                        <p>
                                                            <?php  echo substr(htmlspecialchars_decode($rep_desc),0, 500); ?>
                                                        </p>
                                                        <a class="btn btn-custom" href="view_rep/<?php echo $rep_id; ?>/<?php echo $rep_link; ?>">View Now</a>
                                                    </div>
                                                </div>
                                            </div>
                                            </div>  <?php  }  ?>
                                        </div>
                                        <!-- <div class="row">
                                            <div class="col-12">
                                                <ul class="pagination justify-content-center">
                                                    <li class="page-item disabled"><a class="page-link" href="#">Previous</a></li>
                                                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                                                    <li class="page-item active"><a class="page-link" href="#">2</a></li>
                                                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                                                    <li class="page-item"><a class="page-link" href="#">Next</a></li>
                                                </ul> 
                                            </div>
                                        </div> -->
                                    </div>
                                </div>
                            </div>
                        </div>
                        </div> <?php  }  ?>

                        <?php if($_GET['rep']=='weekly'){  ?>
                            <div class="single">
                                <div class="col-12">
                                   <div class="section-header text-center" style="color: white">
                                    <a class="btn btn-primary" href="report?rep=daily ">Daily</a>
                                    <a class="btn btn-primary active" href="report?rep=weekly ">Weekly</a>
                                    <a class="btn btn-primary" href="report?rep=monthly">Monthly</a>
                                    <a class="btn btn-primary" href="report?rep=quarterly ">Quarterly</a>
                                    <a class="btn btn-primary" href="report?rep=annual ">Annual</a>
                                    <!-- <h3>Coming soon!!!</h3> -->
                                </div>


                                <div class="col-lg-12">
                                    <div class="row"><?php foreach(QueryDB("SELECT * FROM report where rep_cat = 'weekly'  ") as $rows){ extract($rows); ?>

                                        <div class="col-md-4">
                                            <div class="event-item">
                                                <div class="event-content">
                                                    <div class="event-text">
                                                        <div class="event-meta">
                                                            <p><i class="fa fa-calendar-alt"></i><?php  echo date('d M Y', strtotime($rep_date)); ?> </p>

                                                        </div>

                                                        <h3><?php  echo $rep_title; ?></h3>
                                                        <p>
                                                            <?php  echo substr(htmlspecialchars_decode($rep_desc),0, 500); ?>
                                                        </p>
                                                        <a class="btn btn-custom" href="view_rep/<?php echo $rep_id; ?>/<?php echo $rep_link; ?>">View Now</a>
                                                        <a class="btn btn-custom" href="master/<?php echo $rep_file; ?>" download>Download</a>

                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6 pull-right">
                                                <div class="event-content">
                                                    <div class="">

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    <?php  }  ?>
                                </div>

                            </div>

                        </div>
                        </div> <?php  }  ?>

                        <?php if($_GET['rep']=='monthly'){  ?>
                            <div class="single">
                                <div class="col-12">
                                   <div class="section-header text-center" style="color: white">
                                    <a class="btn btn-primary" href="report?rep=daily ">Daily</a>
                                    <a class="btn btn-primary" href="report?rep=weekly ">Weekly</a>
                                    <a class="btn btn-primary active" href="report?rep=monthly">Monthly</a>
                                    <a class="btn btn-primary" href="report?rep=quarterly ">Quarterly</a>
                                    <a class="btn btn-primary" href="report?rep=annual ">Annual</a>
                                    <!-- <h3>Coming soon!!!</h3> -->
                                </div>
                                <div class="row">

                                    <div class="col-lg-3">
                                        <div class="siebar">
                                          <div class="sidebar-widget">
                                            <h3 class="widget-title">Recent Reports</h3>
                                            <?php foreach (QueryDB("SELECT * FROM report where rep_cat='monthly' ORDER BY id DESC ") as $value) {extract($value);
                                                ?>
                                                <div class="recent-post">
                                                    <div class="post-item">
                                                        <div class="post-text">
                                                            <a href="view_rep/<?php echo $rep_id; ?>/<?php echo $rep_link; ?>">
                                                                <p><?php echo $rep_title; ?> | <?php  echo date('d M Y', strtotime($rep_date)); ?></p>

                                                            </a>
                                                        </div>
                                                    </div>
                                                    </div> <?php } ?>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-9">
                                            <div class="row"><?php foreach(QueryDB("SELECT * FROM report where rep_cat = 'monthly'  ") as $rows){ extract($rows); ?>

                                                <div class="row container">
                                                    <div class="event-item">
                                                        <div class="event-content">
                                                            <div class="event-text">
                                                                <div class="event-meta">
                                                                    <p><i class="fa fa-calendar-alt"></i><?php  echo date('d M Y', strtotime($rep_date)); ?> </p>

                                                                </div>

                                                                <h3><?php  echo $rep_title; ?></h3>
                                                                <p>
                                                                    <?php  echo substr(htmlspecialchars_decode($rep_desc),0, 500); ?>
                                                                </p>
                                                                <a class="btn btn-custom" href="view_rep/<?php echo $rep_id; ?>/<?php echo $rep_link; ?>">View Now</a>
                                                                <a class="btn btn-custom" href="master/<?php echo $rep_file; ?>" download>Download</a>

                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6 pull-right">
                                                        <div class="event-content">
                                                            <div class="">

                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            <?php  }  ?>
                                        </div>

                                    </div>

                                </div>
                            </div>
                            </div> <?php  }  ?>


                            <?php if($_GET['rep']=='quarterly'){  ?>
                                <div class="single">
                                    <div class="col-12">
                                       <div class="section-header text-center" style="color: white">
                                        <a class="btn btn-primary" href="report?rep=daily ">Daily</a>
                                        <a class="btn btn-primary" href="report?rep=weekly ">Weekly</a>
                                        <a class="btn btn-primary" href="report?rep=monthly">Monthly</a>
                                        <a class="btn btn-primary active" href="report?rep=quarterly ">Quarterly</a>
                                        <a class="btn btn-primary" href="report?rep=annual ">Annual</a>
                                        <!-- <h3>Coming soon!!!</h3> -->
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-3">
                                            <div class="siebar">
                                              <div class="sidebar-widget">
                                                <h3 class="widget-title">Recent Reports</h3>
                                                <?php foreach (QueryDB("SELECT * FROM report where rep_cat='quarterly' ORDER BY id DESC ") as $value) {extract($value);
                                                    ?>
                                                    <div class="recent-post">
                                                        <div class="post-item">
                                                            <div class="post-text">
                                                                <a href="view_rep/<?php echo $rep_id; ?>/<?php echo $rep_link; ?>">
                                                                    <p><?php echo $rep_title; ?> | <?php  echo date('d M Y', strtotime($rep_date)); ?></p>
                                                                </a>
                                                            </div>
                                                        </div>
                                                        </div> <?php } ?>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-9">
                                                <div class="row"><?php foreach(QueryDB("SELECT * FROM report where rep_cat = 'quarterly'  ") as $rows){ extract($rows); ?>

                                                    <div class="row container">
                                                        <div class="event-item">
                                                            <div class="event-content">
                                                                <div class="event-text">
                                                                    <div class="event-meta">
                                                                        <p><i class="fa fa-calendar-alt"></i><?php  echo date('d M Y', strtotime($rep_date)); ?> </p>

                                                                    </div>

                                                                    <h3><?php  echo $rep_title; ?></h3>
                                                                    <p>
                                                                        <?php  echo substr(htmlspecialchars_decode($rep_desc),0, 500); ?>
                                                                    </p>
                                                                    <a class="btn btn-custom" href="view_rep/<?php echo $rep_id; ?>/<?php echo $rep_link; ?>">View Now</a>
                                                                    <a class="btn btn-custom" href="master/<?php echo $rep_file; ?>" download>Download</a>

                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6 pull-right">
                                                            <div class="event-content">
                                                                <div class="">

                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                <?php  }  ?>
                                            </div>

                                        </div>

                                    </div>
                                </div>
                                </div> <?php  }  ?>

                                <?php if($_GET['rep']=='annual'){  ?>
                                    <div class="single">
                                        <div class="col-12">
                                         <div class="section-header text-center" style="color: white">
                                            <a class="btn btn-primary" href="report?rep=daily ">Daily</a>
                                            <a class="btn btn-primary" href="report?rep=weekly ">Weekly</a>
                                            <a class="btn btn-primary" href="report?rep=monthly">Monthly</a>
                                            <a class="btn btn-primary" href="report?rep=quarterly ">Quarterly</a>
                                            <a class="btn btn-primary active" href="report?rep=annual ">Annual</a>
                                            <!-- <h3>Coming soon!!!</h3> -->
                                        </div>
                                        <div class="row">

                                            <div class="col-lg-3">
                                                <div class="siebar">
                                                  <div class="sidebar-widget">
                                                    <h3 class="widget-title">Recent Reports</h3>
                                                    <?php foreach (QueryDB("SELECT * FROM report where rep_cat='annual' ORDER BY id DESC ") as $value) {extract($value);
                                                        ?>
                                                        <div class="recent-post">
                                                            <div class="post-item">
                                                                <div class="post-text">
                                                                    <a href="view_rep/<?php echo $rep_id; ?>/<?php echo $rep_link; ?>">
                                                                        <p><?php echo $rep_title; ?> | <?php  echo date('d M Y', strtotime($rep_date)); ?></p>

                                                                    </a>
                                                                </div>
                                                            </div>
                                                            </div> <?php } ?>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-9">
                                                    <div class="row"><?php foreach(QueryDB("SELECT * FROM report where rep_cat = 'annual'  ") as $rows){ extract($rows); ?>

                                                        <div class="row container">
                                                            <div class="event-item">
                                                                <div class="event-content">
                                                                    <div class="event-text">
                                                                        <div class="event-meta">
                                                                            <p><i class="fa fa-calendar-alt"></i><?php  echo date('d M Y', strtotime($rep_date)); ?> </p>

                                                                        </div>

                                                                        <h3><?php  echo $rep_title; ?></h3>
                                                                        <p>
                                                                            <?php  echo substr(htmlspecialchars_decode($rep_desc),0, 500); ?>
                                                                        </p>
                                                                        <a class="btn btn-custom" href="view_rep/<?php echo $rep_id; ?>/<?php echo $rep_link; ?>">View Now</a>
                                                                        <a class="btn btn-custom" href="master/<?php echo $rep_file; ?>" download>Download</a>

                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6 pull-right">
                                                                <div class="event-content">
                                                                    <div class="">

                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    <?php  }  ?>
                                                </div>
                                                
                                            </div>

                                        </div>
                                    </div>
                                    </div> <?php  }  ?>

                                </div>

                                <!-- Event End -->
                                <div class="footer" >
                                    <div class="container copyright">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <p style="display: none">&copy; <a href="#">Your Site Name</a>, All Right Reserved.</p>
                                                <p>Copyright &copy; <a href="https://www.familypeace247.org">Family Peace 247</a>, All Right Reserved <?php  echo date('Y'); ?>.</p>
                                            </div>
                                            <div class="col-md-6">
                                                <p>Designed By <a href="https://wa.me/2349024945875" target="_blank">Roxified Global Services</a></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Footer End -->

                                <!-- Back to top button -->
                                <a href="#" class="back-to-top"><i class="fas fa-level-up-alt" style="color: white"></i></a>

                                <!-- Pre Loader -->
                                <div id="loader" class="show">
                                    <div class="loader"></div>
                                </div>

                                <?php  include('nav/scripts.php');  ?>
                            </body>
                            </html>
