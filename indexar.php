<?php
include 'admin/function/connect.php';
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="author" content="" />
        <title>مركز التقنيات الإبداعية</title>
        <meta property="title" content="مركز التقنيات الابداعية" />
        <meta property="title" content="Creative Technologies Center" />
        <meta name="description" content="إدارة وتنظيم الندوات والمؤتمرات وورش العمل, إدارة المواقع ,تثمين وتسويق المنشآت الصحية , مساعدة المؤسسات والشركات والمرافق العامة , الترتيب والتنسيق لترخيص المرافق الصحية , التنسيق بين الملاك ومشغلى المستشفيات , إجراء دراسات , إجراء وتحليل الدراسات الإحصائية , تنسيق وتطوير العلاقات , دعايه واعلان , التنسيق بين العملاء ومقدمي خدماتهم" />
        <meta name="description" content="Managing and organizing seminars, conferences and workshops , Managing websites , Valuation and marketing of health facilities , Coordination between owners and operators of hospitals , Arranging and coordinating the licensing of health facilities, Assisting institutions, companies and public utilities,Conducting studies , Conducting and analyzing statistical studies , Coordination and development of relationships, Advertising , Coordination between clients and their service providers" />
        <meta http-equiv='content-Type' content='text/html; charset=UTF-8'/>
         <meta property="url" content="http://ctmccenter.com/indexar.php" />
        <link rel="canonical" href="http://ctmccenter.com/indexar.php">
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/da9202a5-7d8b-49b7-9b43-5e641995a22e.jpg" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v5.15.4/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700" rel="stylesheet" type="text/css" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
        <link href="css/slider.css" rel="stylesheet" />
    </head>
    <body id="page-top">
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
            <div  class="container">
                <!-- <img style="width: 100px;height:auto" src="assets/da9202a5-7d8b-49b7-9b43-5e641995a22e.jpg"> -->
                <a style="font-size: x-large;font-family:english"  class="navbar-brand" href="index.php"><span>EN</span></a>
                <!-- <select class="custom-select" onchange="location = this.value;">
                <option style="display: none;">اللغة</option>
                    <option value="index.php">English</option>
                    <option value="indexar.php">Arabic</option>
                    </select> -->
                <button  class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    القائمة
                    <i class="fas fa-bars ms-1"></i>
                </button>
                <!-- <p style="padding: 0px 57px;margin: 0px 71px;flex-flow: row-reverse;"></p> -->
                <div  class="collapse navbar-collapse" id="navbarResponsive">
                    <ul style="direction: rtl;"   class="navbar-nav text-uppercase ms-auto py-4 py-lg-0">
                   
                        <li class="nav-item"><a class="nav-link" href="#page-top">الرئيسية</a></li>
                        <li class="nav-item"><a class="nav-link" href="#services">خدماتنا</a></li>
                        <li class="nav-item"><a class="nav-link" href="#about">من نحن</a></li>
                        <li class="nav-item"><a class="nav-link" href="#team">فريقنا</a></li>
                        <li class="nav-item"><a class="nav-link" href="#contact">الحجز والاشتراك</a></li>
                        <li class="nav-item"><a class="nav-link" href="#connect">الاتصال بنا</a></li>
                        <!-- <li class="nav-item"><a class="navbar-brand" href="index.php">English</a></li> -->
                        
                    </ul>
                </div>
               <h1 style="font-size: medium;"> <a  class="navbar-brand" href="#page-top"><span>مركز التقنيات الإبداعية</span></a></h1>
            </div>
        </nav>
        <!-- Masthead-->
        <header class="masthead">
            <div class="container">
                <div class="masthead-subheading">مرحبا بك فى مركز التقنيات الإبداعية</div>
            <div style="font-family:arabic1;text-align: center;" class="masthead-heading text-uppercase">للدراسات والإستشارات الإدارية <div class="col-12" style="font-family: arabic1;padding-top: 15px;">والتدريب الصحى الأهلى</div></div>

                <a class="btn btn-primary btn-xl text-uppercase" href="#slider">اطلعنى على المزيد</a>
            </div>
        </header>

         <!-- slider -->
         <div id="slider" class="masthead hagm">
            <div class="containerr ">
                <?php
                $queryslider=$conn->query("SELECT * FROM slider");
                foreach ($queryslider as $slider) {
                    $arrayslider=explode(",",$slider['cover']);
                    ?>
                <!-- Full-width images with number text -->
                <div class="mySlides">
                  <div class="numbertext"></div>
                    <img src="admin/incloude/imageslider/<?= $arrayslider[0] ;?>" style="width:100% ; height:500px;">
                </div>
                <?php
                }
                ?>
                <!-- Next and previous buttons -->
                <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
                <a class="next" onclick="plusSlides(1)">&#10095;</a>
              
                <!-- Image text -->
                <div class="caption-container">
                  <p id="caption"></p>
                </div>
              
                <!-- Thumbnail images -->
                <!-- <div class="row"> -->
                <?php
                // $queryslider=$conn->query("SELECT * FROM slider");
                // foreach ($queryslider as $slider) {
                //     $arrayslider=explode(",",$slider['cover']);
                    ?>
                    <!-- <div class="column">
                      <img id="< $slider['id'] ?>" style="display: none;" class="demo cursor" src="admin/incloude/imageslider/< $arrayslider[0] ;?>" style="width:100% ; height:auto"  alt="< $slider['name_ar'] ?>"> -->
                    </div>
                  <?php
                // }
                ?>
                <!-- </div> -->
              </div>
              
        </div>
                
                <!-- end slider -->

        <!-- Services-->
        <section class="page-section" id="services">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">خدماتنا</h2>
                    <h3 style="font-size: xx-large;" class="section-subheading text-muted">	تقديم الاستشارات في كل مجالات العملية الإدارية ( التخطيطية . التنظيمية . التنسيقية .التوظيفية ، التقييمية ، والرقابية ) </h3>
                </div>
                <div class="row text-center">
                <?php
                $querycategory=$conn->query("SELECT * FROM trainingcategory ");
                foreach ($querycategory as $category) {
                    $arraycategory=explode(",",$category['cover']);
                    ?>
                        
                <div class="col-md-4">
                        <span class="fa-stack fa-4x">
                            <img style="width: 150px;height:130px" class="rotate-scale-down controll rounded-circle"  src="admin/incloude/imagecategory/<?= $arraycategory[0] ?>" >
                        </span>
                        <h4 class="my-3"><?= $category['name_ar'] ?></h4>
                        <p class="text-muted"><?= $category['description_ar'] ?></p>
                        
                    </div>
                 <?php
                            }
                        ?>
                </div>
            </div>
        </section>
        <!-- Portfolio Grid-->

        <!-- About-->
        <section class="page-section" id="about">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">من نحن</h2>
                    <!--<h3 class="section-subheading text-muted">Lorem ipsum dolor sit amet consectetur.</h3>-->
                </div>
                <ul class="timeline">
                <?php
                $queryslider=$conn->query("SELECT * FROM about limit 1");
                foreach ($queryslider as $about) {
                    $arrayabout=explode(",",$about['cover']);
                    ?>
                    <li>
                        <div class="timeline-image"><img class="rounded-circle img-fluid rotate-scale-down" src="admin/incloude/imageabout/<?= $arrayabout[0] ?>" alt="..." /></div>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <!-- <h4>2009-2011</h4> -->
                                <h4 class="subheading"><?= $about['name_ar'] ?></h4>
                            </div>
                            <div class="timeline-body"><p class="text-muted"><?=$about['description_ar'] ?></p></div>
                        </div>
                        <?php
                            }
                        ?>
                    </li>
                    <?php
                $queryabout=$conn->query("SELECT * FROM about limit 1 OFFSET 2");
                foreach ($queryabout as $about) {
                    $arrayabout=explode(",",$about['cover']);
                    ?>
                    <li class="timeline-inverted">
                        <div class="timeline-image"><img class="rounded-circle img-fluid rotate-scale-down" src="admin/incloude/imageabout/<?= $arrayabout[0] ?>" alt="..." /></div>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <!-- <h4>March 2011</h4> -->
                                <h4 style="float: right;" class="subheading"><?= $about['name_ar'] ?></h4> </br>
                            </div>
                            <div style="float:right;text-align: justify;" class="timeline-body"><p class="text-muted"><?=$about['description_ar'] ?></p></div>
                        </div>
                        <?php
                            }
                        ?>
                    </li>
                    <?php
                $queryslider=$conn->query("SELECT * FROM about limit 1  OFFSET 8");
                foreach ($queryslider as $about) {
                    $arrayabout=explode(",",$about['cover']);
                    ?>
                    <li>
                        <div class="timeline-image"><img  class="rounded-circle img-fluid rotate-scale-down" src="admin/incloude/imageabout/<?= $arrayabout[0] ?>" alt="..." /></div>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <!-- <h4>2009-2011</h4> -->
                                <h4 class="subheading"><?= $about['name_ar'] ?></h4>
                            </div>
                            <div class="timeline-body"><p class="text-muted"><?=$about['description_ar'] ?></p></div>
                        </div>
                        <?php
                            }
                        ?>
                    </li>
                    <?php
                $queryabout=$conn->query("SELECT * FROM about limit 1 OFFSET 1");
                foreach ($queryabout as $about) {
                    $arrayabout=explode(",",$about['cover']);
                    ?>
                    <li class="timeline-inverted">
                        <div class="timeline-image"><img class="rounded-circle img-fluid rotate-scale-down" src="admin/incloude/imageabout/<?= $arrayabout[0] ?>" alt="..." /></div>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <!-- <h4>March 2011</h4> -->
                                <h4 style="float: right;" class="subheading"><?= $about['name_ar'] ?></h4> </br>
                            </div>
                            <div style="float:right;text-align: justify;" class="timeline-body"><p class="text-muted"><?=$about['description_ar'] ?></p></div>
                        </div>
                        <?php
                            }
                        ?>
                    </li>
                    <?php
                $queryslider=$conn->query("SELECT * FROM about limit 1  OFFSET 11");
                foreach ($queryslider as $about) {
                    $arrayabout=explode(",",$about['cover']);
                    ?>
                    <li>
                        <div class="timeline-image"><img class="rounded-circle img-fluid rotate-scale-down" src="admin/incloude/imageabout/<?= $arrayabout[0] ?>" alt="..." /></div>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <!-- <h4>2009-2011</h4> -->
                                <h4 class="subheading"><?= $about['name_ar'] ?></h4>
                            </div>
                            <div class="timeline-body"><p class="text-muted"><?=$about['description_ar'] ?></p></div>
                        </div>
                        <?php
                            }
                        ?>
                    </li>
                    <?php
                $queryabout=$conn->query("SELECT * FROM about limit 1 OFFSET 3");
                foreach ($queryabout as $about) {
                    $arrayabout=explode(",",$about['cover']);
                    ?>
                    <li class="timeline-inverted">
                        <div class="timeline-image"><img class="rounded-circle img-fluid rotate-scale-down" src="admin/incloude/imageabout/<?= $arrayabout[0] ?>" alt="..." /></div>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <!-- <h4>March 2011</h4> -->
                                <h4 style="float: right;" class="subheading"><?= $about['name_ar'] ?></h4> </br>
                            </div>
                            <div style="float:right;text-align: justify;" class="timeline-body"><p class="text-muted"><?=$about['description_ar'] ?></p></div>
                        </div>
                        <?php
                            }
                        ?>
                    </li>
                    <?php
                $queryslider=$conn->query("SELECT * FROM about limit 1  OFFSET 4");
                foreach ($queryslider as $about) {
                    $arrayabout=explode(",",$about['cover']);
                    ?>
                    <li>
                        <div class="timeline-image"><img class="rounded-circle img-fluid rotate-scale-down" src="admin/incloude/imageabout/<?= $arrayabout[0] ?>" alt="..." /></div>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <!-- <h4>2009-2011</h4> -->
                                <h4 class="subheading"><?= $about['name_ar'] ?></h4>
                            </div>
                            <div class="timeline-body"><p class="text-muted"><?=$about['description_ar'] ?></p></div>
                        </div>
                        <?php
                            }
                        ?>
                    </li>
                    <?php
                $queryabout=$conn->query("SELECT * FROM about limit 1 OFFSET 10");
                foreach ($queryabout as $about) {
                    $arrayabout=explode(",",$about['cover']);
                    ?>
                    <li class="timeline-inverted">
                        <div class="timeline-image"><img  class="rounded-circle img-fluid rotate-scale-down" src="admin/incloude/imageabout/<?= $arrayabout[0] ?>" alt="..." /></div>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <!-- <h4>March 2011</h4> -->
                                <h4 style="float: right;" class="subheading"><?= $about['name_ar'] ?></h4> </br>
                            </div>
                            <div style="float:right;text-align: justify;" class="timeline-body"><p class="text-muted"><?=$about['description_ar'] ?></p></div>
                        </div>
                        <?php
                            }
                        ?>
                    </li>
                    <?php
                $queryslider=$conn->query("SELECT * FROM about limit 1  OFFSET 5");
                foreach ($queryslider as $about) {
                    $arrayabout=explode(",",$about['cover']);
                    ?>
                    <li>
                        <div class="timeline-image"><img class="rounded-circle img-fluid rotate-scale-down" src="admin/incloude/imageabout/<?= $arrayabout[0] ?>" alt="..." /></div>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <!-- <h4>2009-2011</h4> -->
                                <h4 class="subheading"><?= $about['name_ar'] ?></h4>
                            </div>
                            <div class="timeline-body"><p class="text-muted"><?=$about['description_ar'] ?></p></div>
                        </div>
                        <?php
                            }
                        ?>
                    </li>
                    <?php
                $queryabout=$conn->query("SELECT * FROM about limit 1 OFFSET 9");
                foreach ($queryabout as $about) {
                    $arrayabout=explode(",",$about['cover']);
                    ?>
                    <li class="timeline-inverted">
                        <div class="timeline-image"><img  class="rounded-circle img-fluid rotate-scale-down" src="admin/incloude/imageabout/<?= $arrayabout[0] ?>" alt="..." /></div>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <!-- <h4>March 2011</h4> -->
                                <h4 style="float: right;" class="subheading"><?= $about['name_ar'] ?></h4> </br>
                            </div>
                            <div  class="timeline-body"><p class="text-muted"><?=$about['description_ar'] ?></p></div>
                        </div>
                        <?php
                            }
                        ?>
                    </li>
                    <?php
                $queryslider=$conn->query("SELECT * FROM about limit 1  OFFSET 6");
                foreach ($queryslider as $about) {
                    $arrayabout=explode(",",$about['cover']);
                    ?>
                    <li>
                        <div class="timeline-image"><img class="rounded-circle img-fluid rotate-scale-down" src="admin/incloude/imageabout/<?= $arrayabout[0] ?>" alt="..." /></div>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <!-- <h4>2009-2011</h4> -->
                                <h4 class="subheading"><?= $about['name_ar'] ?></h4>
                            </div>
                            <div class="timeline-body"><p class="text-muted"><?=$about['description_ar'] ?></p></div>
                        </div>
                        <?php
                            }
                        ?>
                    </li>
                    <?php
                $queryabout=$conn->query("SELECT * FROM about limit 1 OFFSET 7");
                foreach ($queryabout as $about) {
                    $arrayabout=explode(",",$about['cover']);
                    ?>
                    <li class="timeline-inverted">
                        <div class="timeline-image"><img  class="rounded-circle img-fluid rotate-scale-down" src="admin/incloude/imageabout/<?= $arrayabout[0] ?>" alt="..." /></div>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <!-- <h4>March 2011</h4> -->
                                <h4 style="float: right;" class="subheading"><?= $about['name_ar'] ?></h4> </br>
                            </div>
                            <div style="float:right;text-align: justify;" class="timeline-body"><p class="text-muted"><?=$about['description_ar'] ?></p></div>
                        </div>
                        <?php
                            }
                        ?>
                    </li>
                    <li class="timeline-inverted">
                        <div class="timeline-image">
                            <h4 style="color:black">
                               رؤيتنا
                                <br />
                                تعانق
                                <br />
                                السماء
                            </h4>
                        </div>
                    </li>
                </ul>
            </div>
        </section>
        <!-- Team-->
        <section class="page-section bg-light" id="team">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">فريقنا المتميز </h2>
                    <!--<h3 class="section-subheading text-muted">Lorem ipsum dolor sit amet consectetur.</h3>-->
                </div>
                <div class="row">
                    <div class="col-lg-4">
                        <div class="team-member">
                            <img class="mx-auto rounded-circle" src="assets/saudi_arabian_man-512.png" alt="..." />
                            <h4>محمد القحطانى</h4>
                            <p class="text-muted">مهندس</p>
                            <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="team-member">
                            <img class="mx-auto rounded-circle" src="assets/saudi_arabian_man-512.png" alt="..." />
                            <h4>احمد الكاسى</h4>
                            <p class="text-muted">مهندس</p>
                            <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="team-member">
                            <img class="mx-auto rounded-circle" src="assets/saudi_arabian_man-512.png" alt="..." />
                            <h4>يحي معيض</h4>
                            <p class="text-muted">طبيب</p>
                            <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <!--<div class="col-lg-8 mx-auto text-center"><p class="large text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut eaque, laboriosam veritatis, quos non quis ad perspiciatis, totam corporis ea, alias ut unde.</p></div>-->
                </div>
            </div>
        </section>
        <!-- Clients-->
        
        <!-- Contact-->
        <section class="page-section" id="contact">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">للتواصل</h2>
                    <h3  class="section-heading text-muted">ارسل بياناتك وانتظر اتصال او رساله نصية</h3>
                </div>
                <!-- * * * * * * * * * * * * * * *-->
                <!-- * * SB Forms Contact Form * *-->
                <!-- * * * * * * * * * * * * * * *-->
                <!-- This form is pre-integrated with SB Forms.-->
                <!-- To make this form functional, sign up at-->
                <!-- https://startbootstrap.com/solution/contact-forms-->
                <!-- to get an API token!-->
                <form id="contactForm" data-sb-form-api-token="API_TOKEN" method="POST" action="function_site/doAddMessage.php">
                    <div class="row align-items-stretch mb-5">
                        <div class="col-md-6">
                            <div class="form-group">
                                <!-- Name input-->
                                <input class="form-control" name="name" required id="name" type="text" placeholder="الاسم *" data-sb-validations="required" />
                                <div class="invalid-feedback" data-sb-feedback="name:required">A name is required.</div>
                            </div>
                            <div class="form-group">
                                <!-- Email address input-->
                                <input class="form-control" name="email" required id="email" type="email" placeholder="البريد الالكترونى *" data-sb-validations="required,email" />
                                <div class="invalid-feedback" data-sb-feedback="email:required">An email is required.</div>
                                <div class="invalid-feedback" data-sb-feedback="email:email">Email is not valid.</div>
                            </div>
                            <div class="form-group mb-md-0">
                                <!-- Phone number input-->
                                <input class="form-control" name="phone" required id="phone" type="tel" placeholder="رقم الجوال *" data-sb-validations="required" />
                                <div class="invalid-feedback" data-sb-feedback="phone:required">A phone number is required.</div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group form-group-textarea mb-md-0">
                                <!-- Message input-->
                                <textarea class="form-control" required name="message" id="message" placeholder="مضمون رسالتك *" data-sb-validations="required"></textarea>
                                <div class="invalid-feedback" data-sb-feedback="message:required">A message is required.</div>
                            </div>
                        </div>
                    </div>
                    <!-- Submit success message-->
                    <!---->
                    <!-- This is what your users will see when the form-->
                    <!-- has successfully submitted-->
                    <div class="d-none" id="submitSuccessMessage">
                        <div class="text-center text-white mb-3">
                            <div class="fw-bolder">Sent successful!</div>
                           
                        </div>
                    </div>
                    <!-- Submit error message-->
                    <!---->
                    <!-- This is what your users will see when there is-->
                    <!-- an error submitting the form-->
                    <div class="d-none" id="submitErrorMessage"><div class="text-center text-danger mb-3">Error sending message!</div></div>
                    <!-- Submit Button-->
                   
                    <input type="submit" value="ارسال " class="form-control btn btn-primary" >
                </form>
            </div>
        </section>
        <!-- connect -->
        <section class="page-section bg-light" id="connect">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase"> الاتصال بنا </h2>
                    <!--<h3 class="section-subheading text-muted">Lorem ipsum dolor sit amet consectetur.</h3>-->
                </div>
                <div class="row">
                    <div class="col-lg-4">
                        <div class="team-member">
                            <img class="mx-auto rounded-circle" src="assets/img/contact/74b823d2-3581-4c2d-9210-7f0b2633b29b.jpg" alt="..." />
                            <h4> الهاتف & الجوال </h4>
                            <p style="font-size: x-large;" class="text-muted"> الهاتف   114451123 <br> +966531138009 الجوال  </p>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="team-member">
                            <img class="mx-auto rounded-circle" src="assets/img/contact/ffbba7a7-cc6d-497a-a419-e295b61e0995.jpg" alt="..." />
                            <h4>العنوان</h4>
                            <p style="font-size: x-large;" class="text-muted">المملكة العربية السعودية - الرياض - حى قرطبة - شارع سعيد بن زيد امتداد خالد بن الوليد من الشمال - امام وكالة عبداللطيف جميل (تويوتا)</p>
                           
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="team-member">
                            <img class="mx-auto rounded-circle" src="assets/img/contact/d2c13784-92d1-476d-b268-e78a724aa7b6.jpg" alt="..." />
                            <h4>البريد الالكترونى</h4>
                            <p style="font-size: x-large;" class="text-muted">ctmcc2030@gmail.com</p>
                            
                        </div>
                    </div>
                </div>
                <!-- <div id="map" class="col-lg-4 center">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d13278.060582832633!2d31.26489655489607!3d30.717459365681986!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e1!3m2!1sar!2seg!4v1641230350915!5m2!1sar!2seg" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                    </div> -->
            </div>
        </section>

        <!-- Footer-->
        <?php
        include 'design_site/footer.php';
        ?>