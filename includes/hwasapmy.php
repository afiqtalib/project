<!DOCTYPE html>
<html lang="en">

<head>
  
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

	<title>Wasap.my</title>

	<meta name="description" content="">
	<meta name="author" content="Akshay Kumar">

	<!-- Bootstrap core CSS -->
	<link rel="stylesheet" href="<?php echo base_url();?>assets/brio/css/bootstrap/bootstrap-afiq.min.css" /> 
	
    <!-- Fonts  -->
    <link href='http://fonts.googleapis.com/css?family=Raleway:400,500,600,700,300' rel='stylesheet' type='text/css'>
    
    <!-- Base Styling  -->
    <link rel="stylesheet" href="<?php echo base_url();?>assets/brio/css/app/app.v1.tasha.css" />
    
    <!-- tambahan -->
     <link rel="shortcut icon" href="favicon.ico" /> 
        <link rel="shortcut icon" href="<?php echo base_url();?>assets/layouts/layout3/img/wasapico.ico" type="image/gif">
      
    <META Http-Equiv="Cache-Control" Content="no-store, no-cache, must-revalidate, post-check=0, pre-check=0,private">
        <script src="https://www.google.com/recaptcha/api.js" async defer></script>
	<!-- Facebook Pixel Code -->
    <script>
        !function(f,b,e,v,n,t,s)
        {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
        n.callMethod.apply(n,arguments):n.queue.push(arguments)};
        if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
        n.queue=[];t=b.createElement(e);t.async=!0;
        t.src=v;s=b.getElementsByTagName(e)[0];
        s.parentNode.insertBefore(t,s)}(window, document,'script',
        'https://connect.facebook.net/en_US/fbevents.js');
        fbq('init', '2209568152706399');
        fbq('track', 'PageView');
    </script>
    <noscript><img height="1" width="1" style="display:none" src="https://www.facebook.com/tr?id=2209568152706399&ev=PageView&noscript=1" 
    /></noscript>
    <!-- End Facebook Pixel Code -->

	<!-- Facebook Pixel Code -->
    <script>
        !function(f,b,e,v,n,t,s)
        {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
        n.callMethod.apply(n,arguments):n.queue.push(arguments)};
        if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
        n.queue=[];t=b.createElement(e);t.async=!0;
        t.src=v;s=b.getElementsByTagName(e)[0];
        s.parentNode.insertBefore(t,s)}(window, document,'script',
        'https://connect.facebook.net/en_US/fbevents.js');
        fbq('init', '244050930074801');
        fbq('track', 'PageView');
    </script>
    <noscript><img height="1" width="1" style="display:none" src="https://www.facebook.com/tr?id=2209568152706399&ev=PageView&noscript=1" 
    /></noscript>
    <!-- End Facebook Pixel Code -->
    
    <!-- Global site tag (gtag.js) - Google Ads: 442078917 -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=AW-442078917"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());
    
      gtag('config', 'AW-442078917');
    </script>

	<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    
</head>


        <body id="page-top">

  		<!-- Page Wrapper -->
  		<div id="wrapper">
		
			<!-- Sidebar -->
			<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

                <!-- Sidebar - Brand -->
                <a class="sidebar-brand d-flex align-items-center justify-content-center" href="#">
                    <div class="sidebar-brand-icon rotate-n-15">
                        <i class="fas fa-biohazard"></i>
                    </div>
                    <div class="sidebar-brand-text mx-3">System <sup>2</sup></div>
                </a>

                <!-- Divider -->
                <hr class="sidebar-divider my-0">

                <!-- Nav Item - Dashboard -->
                <li class="nav-item active">
                    <a class="nav-link" href="<?php echo base_url()."staff_home/dashboard"?>">
                        <i class="fas fa-fw fa-tachometer-alt"></i>
                        <span>Dashboard</span></a>
                </li>

                <!-- Divider -->
                <hr class="sidebar-divider">

                <!-- Heading -->
                <div class="sidebar-heading">
                    System
                </div>

                <!-- Nav Item - Employees -->
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo base_url()."staff_home"?>">
                        <i class="fas fa-fw fa-users"></i>
                        <span>Employees</span></a>
                </li>

                <!-- Nav Item - Leave Application -->
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo base_url()."staff_home"?>">
                        <i class="fas fa-file-alt"></i>
                        <span>Leave Application</span></a>
                </li>

                <!-- Nav Item - Upload -->
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo base_url()."staff_home"?>">
                        <i class="fas fa-fw fa-upload"></i>
                        <span>Upload Image</span></a>
                </li>

                <!-- Divider -->
                <hr class="sidebar-divider">

                <!-- Heading -->
                <div class="sidebar-heading">
                    Interface
                </div>

                <!-- Nav Item - Pages Collapse Menu -->
                <li class="nav-item">
                    <a class="nav-link collapsed" href="<?php echo base_url()."staff_home"?>" data-toggle="collapse" data-target="#collapseTwo"
                        aria-expanded="true" aria-controls="collapseTwo">
                        <i class="fas fa-fw fa-cog"></i>
                        <span>Components</span>
                    </a>
                </li>

                <!-- Nav Item - Utilities Collapse Menu -->
                

            
                
                <!-- Nav Item - Charts -->
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo base_url()."staff_home"?>">
                        <i class="fas fa-fw fa-chart-area"></i>
                        <span>Charts</span></a>
                </li>

                <!-- Nav Item - Tables -->
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo base_url()."staff_home"?>">
                        <i class="fas fa-fw fa-table"></i>
                        <span>Tables</span></a>
                </li>

                <!-- Divider -->
                <hr class="sidebar-divider d-none d-md-block">

                <!-- Sidebar Toggler (Sidebar) -->
                <div class="text-center d-none d-md-inline">
                    <button class="rounded-circle border-0" id="sidebarToggle"></button>
                </div>


            </ul>
			<!-- End of Sidebar -->

			<!-- Content Wrapper -->
            <div id="content-wrapper" class="d-flex flex-column">

                <!-- Main Content -->
                <div id="content">

                    <!-- Topbar -->
                    <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                        <!-- Sidebar Toggle (Topbar) -->
                        <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                            <i class="fa fa-bars"></i>
                        </button>

                        <!-- Topbar Search -->
                        <form
                            class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
                            <div class="input-group">
                                <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..."
                                    aria-label="Search" aria-describedby="basic-addon2">
                                <div class="input-group-append">
                                    <button class="btn btn-primary" type="button">
                                        <i class="fas fa-search fa-sm"></i>
                                    </button>
                                </div>
                            </div>
                        </form>

                    </nav>
                    <!-- End of Topbar -->