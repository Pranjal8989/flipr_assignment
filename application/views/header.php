<?php
defined( 'BASEPATH' ) or exit( 'No direct script access allowed' );
?>
<!DOCTYPE html>
<html lang='en'>

<head>
    <meta charset='UTF-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <title>Home</title>
    <link rel='icon' href='<?php echo base_url('assets/images/logo.svg'); ?>' type='image/svg+xml'>
    <link rel='stylesheet' href='https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css'>
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css'>
    <link rel='stylesheet' href="<?php echo base_url('assets/css/style.css'); ?>">

</head>

<body>
    <!--Header Start-->
    <div class='main-top py-1' id='home'>
        <nav class='navbar navbar-expand-lg navbar-light fixed-navi'>
            <div class='container'>
                <!-- logo -->
                <img src="<?php echo base_url('assets/images/logo.svg');?>" alt='FLIPR Logo' height='40'>
                <!-- //logo -->

                <button class='navbar-toggler' type='button' data-toggle='collapse'
                    data-target='#navbarSupportedContent' aria-controls='navbarSupportedContent' aria-expanded='false'
                    aria-label='Toggle navigation'>
                    <span class='navbar-toggler-icon'></span>
                </button>

                <div class='collapse navbar-collapse text-center' id='navbarSupportedContent'>
                    <ul class='navbar-nav ml-auto'>
                        <li class='nav-item active mt-lg-0 mt-3'>
                            <a class='nav-link' href='#home'>Home <span class='sr-only'>( current )</span></a>
                        </li>
                        <li class='nav-item mx-lg-2 my-lg-0 my-3'>
                            <a class='nav-link' href='#services'>Services</a>
                        </li>
                        <li class='nav-item mx-lg-2 my-lg-0 my-3'>
                            <a class='nav-link' href='#project'>About Project</a>
                        </li>

                        <li class='nav-item nav-item mx-lg-2 my-lg-0 my-3'>
                            <a class='nav-link' href='#testimonials'>Testimonials</a>
                        </li>

                    </ul>
                    <a href='#contact-form' class='contact-button ml-lg-5 mt-lg-0 mt-4 mb-lg-0 mb-3'>Contact</a>
                    <a href='<?php echo base_url('LoginC') ?>'
                        class='btn btn-primary ml-3 mt-lg-0 mt-4 mb-lg-0 mb-3'>Admin</a>
                </div>
            </div>
        </nav>
    </div>

    <!--Header End-->