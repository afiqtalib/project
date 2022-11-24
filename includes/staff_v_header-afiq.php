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
	<link rel="stylesheet" href="<?php echo base_url();?>assets/brio/css/bootstrap/bootstrap_afiq.css" /> 
	<link rel="stylesheet" href="<?php echo base_url();?>assets/brio/css/bootstrap/dataTables_afiq.css" />
	
    <!--<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" />-->

	<!-- datatables Styling  -->
    <link rel="stylesheet" href="<?php echo base_url();?>assets/brio/css/plugins/datatables/jquery.dataTables.css" />
    
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
<body>	

	<!-- Preloader -->
    <div class="loading-container">
      <div class="loading">
        <div class="l1">
          <div></div>
        </div>
        <div class="l2">
          <div></div>
        </div>
        <div class="l3">
          <div></div>
        </div>
        <div class="l4">
          <div></div>
        </div>
      </div>
    </div>
    <!-- Preloader -->
    
	<aside class="left-panel">
    		
            <div class="user text-center">
                  <img src="<?php echo base_url();?>assets/layouts/layout3/img/user.jpg" class="img-circle" alt="...">
                  <h4 class="user-name"><?php echo $rsProfile['username']; ?></h4>
                  
                  
            </div>
            
            
            
            <nav class="navigation">
            	<ul class="list-unstyled">
                	<li><a href="<?php echo base_url()."staff_home/dashboard"?>"><span class="nav-label">Home</span></a></li>
                	
                	<li><a href="<?php echo base_url()."staff_home"?>"><span class="nav-label">List User</span></a></li>
                	
                	<li><a href="<?php echo base_url()."staff_home/listuserhistory"?>"><span class="nav-label">List User History Purchase</span></a></li>
                	
                	<li><a href="<?php echo base_url()."premium/report_register_user_by_month"?>"><span class="nav-label">Register User</span></a></li>
                
                    <!--<li><a href="<?php echo base_url()."premium/lifetime"?>"><span class="nav-label">Premium Lifetime</span></a></li>-->
                    
                    <li><a href="<?php echo base_url()."premium/package"?>"><span class="nav-label">Premium Package</span></a></li>
                    
                    <li><a href="<?php echo base_url()."premium/report_sales"?>"><span class="nav-label">Report Sales</span></a></li>
                    
                    <li><a href="<?php echo base_url()."premium/report_lifetime_sales_by_month"?>"><span class="nav-label">Report Lifetime Sales By Month</span></a></li>
                    
                    <li><a href="<?php echo base_url()."premium/report_sales_by_month"?>"></i><span class="nav-label">Report Sales By Month</span></a></li>
                    
                    <li><a href="<?php echo base_url()."premium/report_expired_by_month"?>"></i><span class="nav-label">Report Expired By Month</span></a></li>
                    
                    <li><a href="<?php echo base_url()."premium/failedpay"?>"><span class="nav-label">Failed Pay</span></a></li>
                    
                    <li><a href="<?php echo base_url()."premium/delete_link"?>"><span class="nav-label">Delete Link</span></a></li>
                    
                    <li><a href="<?php echo base_url()."info/list"?>"><span class="nav-label">Info</span></a></li>
                    
                    <!--<li><a href="<?php echo base_url()."home/cpwdstaff"?>"><span class="nav-label">Change Password</span></a></li>-->
                    
                    <li><a href="<?php echo base_url()."staff_home/logout"?>"><span class="nav-label">Log Out</span></a></li>
                </ul>
            </nav>
            
    </aside>
    
    <section class="content">
    	
        <header class="top-head container-fluid">
            <button type="button" class="navbar-toggle pull-left">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            
          
            <!--<ul class="nav-toolbar">
            
                <li class="dropdown"><a href="#" data-toggle="dropdown"><i class="fa fa-cogs"></i></a>
                	<div class="dropdown-menu lg pull-right arrow panel panel-default arrow-top-right">
                    	<div class="panel-heading">
                        	Setting
                        </div>
                        <div class="panel-body text-center">
                        	<div class="row">
                            	<div class="col-xs-6 col-sm-5"><a href="<?php echo base_url()."profile"?>" class="text-green"><span class="h2"><i class="fa fa-user"></i></span><p class="text-gray no-margn">Profile</p></a></div>
                                <div class="col-xs-6 col-sm-5"><a href="<?php echo base_url()."home/cpwd"?>" class="text-purple"><span class="h2"><i class="fa fa-key"></i></span><p class="text-gray no-margn">Change Password</p></a></div>
                                
                                
                                
                                
                            
                            </div>
                        </div>
                    </div>
                </li>
            </ul>-->
        </header>
        <!-- Header Ends -->