


<?php 
if(isset($_POST['submit']))
{

$name=$_POST['name'];
    $email=$_POST['email'];
    $phone=$_POST['phone'];
    $message=$_POST['message'];


            
         $message ="<html>
<table width='500' border='0' cellspacing='0' cellpadding='0'>
  <tr>
    <td style='border: 1px solid #ddd;'>
    
    <table width='500' border='0' cellspacing='0' cellpadding='0'>
  <tr>
    <td style='background: #58b451; color: #FFFFFF; font-size: 24px; padding: 5px;'>Enquiry From <a href='#' style='color:white;'>Meghasystems MISTSAN
</a>

 
 </td>
  </tr>

  <tr>
    <td>
    <table width='100%' border='0' cellspacing='0' cellpadding='0'>
    
         <tr style='background: none repeat scroll 0 0 #F2F2F2;'>
        <td style='color: #990000; font-size: 12px; font-family:Verdana, Geneva, sans-serif; font-weight: 700; padding: 9px 5px; border-top:solid 1px #CCCCCC;'>Name :</td>
        
        <td style='border-left: 1px solid #CCCCCC; color: #333333; font-family:Verdana, Geneva, sans-serif; font-size: 12px; padding: 9px 0 9px 9px;  border-top:solid 1px #CCCCCC;'>$name</td>
      </tr>
      
      
        <tr style='background: none repeat scroll 0 0 #F2F2F2;'>
        <td style='color: #990000; font-size: 12px; font-family:Verdana, Geneva, sans-serif; font-weight: 700; padding: 9px 5px; border-top:solid 1px #CCCCCC;'>Email-Id :</td>
        
        <td style='border-left: 1px solid #CCCCCC; color:s #333333; font-family:Verdana, Geneva, sans-serif; font-size: 12px; padding: 9px 0 9px 9px;  border-top:solid 1px #CCCCCC;'>$email</td>
      </tr>
      
      
        <tr style='background: none repeat scroll 0 0 #F2F2F2;'>
        <td style='color: #990000; font-size: 12px; font-family:Verdana, Geneva, sans-serif; font-weight: 700; padding: 9px 5px; border-top:solid 1px #CCCCCC;'>Phone No :</td>
        
        <td style='border-left: 1px solid #CCCCCC; color: #333333; font-family:Verdana, Geneva, sans-serif; font-size: 12px; padding: 9px 0 9px 9px;  border-top:solid 1px #CCCCCC;'>$phone</td>
      </tr>


      
      
      
      
      
      
        <tr style='background: none repeat scroll 0 0 #F2F2F2;'>
        <td style='color: #990000; font-size: 12px; font-family:Verdana, Geneva, sans-serif; font-weight: 700; padding: 9px 5px; border-top:solid 1px #CCCCCC;'>Message :</td>
        
        <td style='border-left: 1px solid #CCCCCC; color: #333333; font-family:Verdana, Geneva, sans-serif; font-size: 12px; padding: 9px 0 9px 9px;  border-top:solid 1px #CCCCCC;'>$message</td>
      </tr>
      
</table></td>
  </tr>
  </table>
    </td>
  </tr>
</table>
";              

$to="contact@meghasystems.com,meghainteriorsfbd@gmail.com";
$from = "contact@meghasystems.com"; 
$subject ="Enquiry From Meghasystems MISTSAN";

        $headers  = "MIME-Version: 1.0\r\n";
        $headers .= "Content-type: text/html; charset=iso-8859-1\r\n";
        $headers .= "From:$from\r\n";
        
        $headers .= "BCC: esearchsolutions1@gmail.com\r\n";

      if(mail($to,$subject,$message,$headers))
      
        {
        
        echo ("<script LANGUAGE='JavaScript'>
                window.location.href='thanku.html';
    </script>");
        }
        else
        {
        
        echo "Sorry Your query can't be send.Try later";
        
        }
    }

        


?>





    
    

    
 
 
 <!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Contact Us</title>

<!-- Stylesheets -->
<link href="css/bootstrap.css" rel="stylesheet">
<link href="plugins/revolution/css/settings.css" rel="stylesheet" type="text/css"><!-- REVOLUTION SETTINGS STYLES -->
<link href="plugins/revolution/css/layers.css" rel="stylesheet" type="text/css"><!-- REVOLUTION LAYERS STYLES -->
<link href="plugins/revolution/css/navigation.css" rel="stylesheet" type="text/css"><!-- REVOLUTION NAVIGATION STYLES -->

<link href="css/style.css" rel="stylesheet">
<link href="css/responsive.css" rel="stylesheet">

<link rel="shortcut icon" href="images/favicon.png" type="image/x-icon">
<link rel="icon" href="images/favicon.png" type="image/x-icon">

<!-- Responsive -->
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">



</head>

<body>
 <div class="whatsapp_icon">
    <a href="https://api.whatsapp.com/send?phone=+91-9891493095&amp;text=Hi "><img src="images/whatsapp.png"></a>
</div>

<div class="phoneicon">
    <a href="tel:+91-9891493095"><img src="images/call.png" ></a>
</div>

<!-----
<div class="icon-bar">
  <a href="https://api.whatsapp.com/send?phone=919891493095" class="whatsapp"><i class="fab fa-whatsapp"></i></a> 
  <a href="tel: +91 9891493095" class="callin"><i class="fa fa-phone"></i></a> 
</div>----->

<div class="page-wrapper">
    <!-- Preloader -->
    
    <header class="main-header header-style-three">
        <!-- Header Upper -->
        <div class="header-upper">
            <div class="inner-container">
                <div class="auto-container clearfix">
                    <!--Info-->
                    <div class="logo-outer">
                        <div class="logo"><a href="index.html"><img src="images/logo-2.png" alt="" title=""></a></div>
                    </div>

                    <!--Nav Box-->
                    <div class="nav-outer clearfix">
                        <!--Mobile Navigation Toggler-->
                        <div class="mobile-nav-toggler"><span class="icon flaticon-menu-1"></span></div>
                        <!-- Main Menu -->
                        <nav class="main-menu navbar-expand-md navbar-light">
                            <div class="navbar-header">
                                <!-- Togg le Button -->      
                                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                                    <span class="icon flaticon-menu-button"></span>
                                </button>
                            </div>
                            
                            <div class="collapse navbar-collapse clearfix" id="navbarSupportedContent">
                                <ul class="navigation clearfix">
                                    <li><a href="index.html">HOME</a></li>
                                    <li><a href="about.html">ABOUT</a></li>
                                    <li class="dropdown"><a href="product.html">PRODUCTS</a>
                                     <ul>
                                            <li><a href="pallet-racks.html">Pallet Racks</a></li>
                                            <li><a href="heavy-duty-rack.html">Heavy Duty Rack</a></li>
                                            <li><a href="fabric-roll-racks.html">Fabric Roll Racks</a></li> 
                                            <li><a href="cantilever-racks.html">Cantilever Rack</a></li>
                                            <li><a href="two-tier-storage.html">Two Tier Storage</a></li>
                                            <li><a href="mezzanine-floor.html">Mezzanine Floor</a></li>
                                            <li><a href="slotted-angle-rack.html">Slotted Angle Rack</a></li>
                                            <li><a href="cable-trays.html">Cable Trays</a></li>
                                            <li><a href="fifo-rack.html">Fifo Rack</a></li>
                                            <li><a href="mobile-compactor.html">Mobile Compactor</a></li>
                                            <li><a href="office-equipments.html">Office Equipments</a></li>
                                            <li><a href="material-handling.html">Material Handling</a></li>
                                            <li><a href="plastic-bin-&-drawer.html">Plastic Bin & Drawer</a></li>
                                            <li><a href="display-rack.html">Display Rack</a></li>
                                            <li><a href="rack-fittings.html">Rack Fittings</a></li>
                                            <li><a href="workers-locker.html">Workers Locker</a></li>
                                           
                                    </ul>
                                    </li>
                                    <li><a href="client.html">OUR CLIENT</a></li>
                                    <li class="current"><a href="contact.html">CONTACT US</a></li>
                                </ul>
                            </div>
                        </nav>
                        <!-- Main Menu End-->

                        <!-- Main Menu End-->
                        <div class="outer-box clearfix">
                            <!-- Button Box -->
                            <div class="btn-box">
                                <a href="contact.html" class="theme-btn btn-style-one">Get A Quote <i class="flaticon-long-arrow-pointing-to-the-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--End Header Upper-->


        <!-- Mobile Menu  -->
        <div class="mobile-menu">
            <div class="menu-backdrop"></div>
            <!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header-->
            <nav class="menu-box">
                <ul class="navigation clearfix"><!--Keep This Empty / Menu will come through Javascript--></ul>
            </nav>
        </div><!-- End Mobile Menu -->

    </header>
    <!-- End Main Header -->


    <!--Page Title-->
    <section class="page-title" style="background-image:url(images/background/c1.jpg);">
        <div class="auto-container">
            <div class="inner-container clearfix">
                <div class="title-box">
                    <h1>Contact Us</h1>
                </div>
                <ul class="bread-crumb clearfix">
                    <li><a href="index.html">Home</a></li>
                    <li>Contact Us</li>
                </ul>
            </div>
        </div>
    </section>
    <!--End Page Title-->

 
 
 
 
 
 
 
 
 
    
    <section class="about-section-2">
    	<div class="container">
        	<div class="row clearfix">
            
            	<!--Content Column-->
            	<div class="content-column col-md-12 ">
                	
                	<div class="inner-box">
                    	<!--Sec Title-->
                    	<div class="sec-title">
                            <h3 class="text-center"> Thanks, We have Received Your Masssage. <span>We Will Contact You Soon.</span></h3>
                            <br>
                            <p style="text-align:center; color:#000;"> <i class="fa fa-mail-reply-all"></i> Back To  <a href="index.html"> Home</a>
                        </div>
                      
                </div>
                
            </div>
        </div>
        </div>
    </section>
    
    
    
    
    
    
    
    
    
    
    
 <!-- Main Footer -->
      <footer class="main-footer">
        <!--Widgets Section-->
        <div class="widgets-section">
            <div class="auto-container">
                <div class="row">
                    <!--Footer Column-->
                    <div class="footer-column col-xl-6 col-lg-5 col-md-12 col-sm-12">
                        <div class="footer-widget about-widget">
                            <div class="footer-logo">
                                <figure class="image"><a href="index.html"><img src="images/footer-logo.png" alt=""></a></figure>
                            </div>
                            <div class="widget-content">
                                <div class="text">PRK Steel Products Pvt. Ltd. is one of the leading names in wide scale manufacturing of modern logistic equipments such as slotted angle racks, palletize racking system and more. We offer full-service ranging from research and development, designing, production and installation of logistic equipments.</div>
                                <ul class="social-icon-colored">
                                    <li class="facebook"><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                    <li class="dribbble"><a href="#"><i class="fab fa-instagram"></i></a></li>
                                    <li class="twitter"><a href="#"><i class="fab fa-twitter"></i></a></li>
                                </ul>
                                
                            </div>
                        </div>
                    </div>
                    <div class="footer-column col-xl-3 col-lg-3 col-md-6 col-sm-12">
                        <div class="footer-widget links-widget">
                            <h2 class="widget-title">Quick links</h2>
                            <div class="widget-content">
                                <ul class="list">
                                    <li><a href="index.html">Home</a></li>
                                    <li><a href="about.html">About Us</a></li>
                                    <li><a href="product.html">Product</a></li>
                                    <li><a href="client.html">Clients</a></li>
                                    <li><a href="contact.html">Contact Us</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="footer-column col-xl-3 col-lg-4 col-md-6 col-sm-12">
                        <div class="footer-widget contact-widget">
                            <h2 class="widget-title">Contact Info</h2>
                            <div class="address-area">
                            <div class="single-address">
                            <p><i class="fa fa-map-marker"></i> <span style="color:#fff;"><b>Head Office</span> :</b><br> PRK Steel Products Pvt. Ltd.
118 First Floor South Ex Plazza-2 
South Ex Part-2 , New Delhi 110049</p>
	                        </div>

                            <div class="single-address">
                            <p><i class="fa fa-mobile"></i><a href="tel:09891493095"> +91 - 9891493095 </a></p>
                            </div> 

                            <div class="single-address">
                            <p><i class="fa fa-phone"></i><a href="tel:011-47451188"> 011-47451188 </a></p>
                            </div>

                          <div class="single-address">
                          <p><i class="fa fa-envelope"></i><a href="mailto:info@prksteel.com"> info@prksteel.com </a>, <a href="mailto:prksteel.sales@gmail.com">prksteel.sales@gmail.com</a></p>
                          </div>
                            <div class="single-address">
                               <p><i class="fa fa-globe"></i><a href="https://www.prksteel.in/">www.prksteel.in</a></p>
                            </div>



                           </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <!--Bottom-->
        <div class="footer-bottom">
            <div class="auto-container">
                <div class="row clearfix">
                    <div class="bottom-column col-md-6 col-sm-12">
                        <div class="copyright-text"> &copy; 2019 PRK Steel Products Pvt. Ltd. All Right Reserved. Design By <a href="https://www.cwsindia.co.in/">CWS</a></div>
                    </div>
                    <div class="bottom-column col-md-6 col-sm-12">
                        <ul class="footer-links clearfix">
                            <li><a href="#">Terms of Service</a></li>
                            <li><a href="#">Privacy Policy</a></li>
                        </ul>
                    </div>
                </div>
                
                <!--Scroll to top-->
                <div class="scroll-to-top scroll-to-target" data-target="html"><span class="icon flaticon-right-arrow"></span></div>
                <!--Scroll to top-->
            </div>
        </div>
        
    </footer>
    <!-- End Main Footer -->

</div>  
<!--End pagewrapper-->

<script src="js/jquery.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery-ui.js"></script>
<script src="js/jquery.fancybox.js"></script>
<script src="js/owl.js"></script>
<script src="js/wow.js"></script>
<script src="js/mixitup.js"></script>
<script src="js/appear.js"></script>
<script src="js/validate.js"></script>
<script src="js/script.js"></script>
<!--Google Map APi Key-->

<script src="js/map-script.js"></script>
<!--End Google Map APi-->
</body>
</html>