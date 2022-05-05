<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri()?>/font-awesome-4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri()?>/css/meanmenu.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri()?>/style.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri()?>/assets/css/responsive.css">
    <?php wp_head()?>
    <link href="https://fonts.maateen.me/adorsho-lipi/font.css" rel="stylesheet">
</head>
<body>
    

<header>
    <div class="header-area">
        <div class="header-content">
            <h5>ওয়ার্ডপ্রেস ডকুমেন্টেশন : টিটু</h5>
        </div>
    </div>
</header>

<section id="main-area">
    <div class="main-area-section">
        <div class="container-fluid app_page1">
            <div class="row">
                <div class=" cjfdjfj" id="">
                    <div class="leftbar">
                        <div class="barlink" id="mobile-menu">
                            <!-- <ul>
                                <li><a href="#q">Debug</a></li>
                                <li><a href="">Menu</a></li>
                                <li><a href="">Sidebar</a></li>
                                <li><a href="">Widget</a></li>
                            </ul> -->

                               
                            <?php

                            wp_nav_menu(array(
                            
                                'menu_class'        => "navbar-nav", 
                                'menu_id'           => "", 
                                'container_class'   => "", 
                                'theme_location'    => "primary-menu", 

                            ) );

                            ?>
                           
 


                        </div>
                        <div class="mobile-menu"></div>
                    </div>
                </div>
                <div class="sdfsdsd"  id="">
                    <div class="rightcontent">
                        
                        <div class="single-content">
                            <div class="title">
                                <h5>Wordpress Documentation</h5>
                            </div>
                            <div class="content-main">
                                <p id="q">
                                

                                ওয়াডপ্রেস অফিশিয়াল ওয়েবসাইটে যে ডকুমেন্টেশন আছে সেটা ব্যক্তিগতভাবে আমার তেমন একটা পছন্দ না। সেই কারণে শুধুমাত্র নিজের সুবিধার জন্য ওয়েবসাইট তৈরি করা। অফিশিয়াল ওয়েবসাইটে প্রয়োজনীয় ডকুমেন্টেশন খুঁজে পাওয়া ডিফিকাল্ট। সেজন্য নিজের কাজের সুবিধার্থে শর্টকাট ওয়েবসাইট টি তৈরি করা আছে। আপনারা যারা থিম ডেভেলপমেন্ট জানেন হয়তো বা তাদের ক্ষেত্রে এটা কিছুটা কাজে লাগতে পারে। এটা সম্পূর্ণ ব্যক্তিগত উদ্দেশ্যে বানানো।আমার ব্যক্তিগত পরিচয় হচ্ছে যে আমার নাম ফারুক আহমেদ টিটু। যশোর বিজ্ঞান ও প্রযুক্তি বিশ্ববিদ্যালয় থেকে পেট্রোলিয়াম এন্ড মাইনিং ইঞ্জিনিয়ারিং থেকে BSC কমপ্লিট করেছি। টেকনোলজির প্রতি আগ্রহ থেকে প্রোগ্রামিং এর যাত্রা শুরু।
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>






<!-- jQuery library -->
<script src="<?php echo get_template_directory_uri()?>/assets/js/jquery.min.js"></script>


<!-- Popper JS -->
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>

<script src="<?php echo get_template_directory_uri()?>/js/plugins.js"></script>
<script src="<?php echo get_template_directory_uri()?>/js/main.js"></script>

<script src="<?php echo get_template_directory_uri()?>/assets/js/custom.js"></script>


<?php wp_footer()?>

</body>
</html>