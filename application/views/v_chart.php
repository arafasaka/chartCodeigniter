<!--Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
<head>
<title>Web Self Assessment 2020</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Shoppy Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<link href="assets/css/bootstrap.css" rel="stylesheet" type="text/css" media="all">
<!-- Custom Theme files -->
<link href="assets/css/style.css" rel="stylesheet" type="text/css" media="all"/>
<!--js-->
<script src="assets/js/jquery-2.1.1.min.js"></script> 
<!--icons-css-->
<link href="assets/css/main.css" rel="stylesheet" media="all">
<link href="assets/css/font-awesome.css" rel="stylesheet"> 
<!--Google Fonts-->
<link href='//fonts.googleapis.com/css?family=Carrois+Gothic' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Work+Sans:400,500,600' rel='stylesheet' type='text/css'>

<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>

    <!-- Title Page-->
    <title>Au Register Forms by Colorlib</title>

    <!-- Icons font CSS-->
    <link href="assets/vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
    <link href="assets/vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <!-- Font special for pages-->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">

    <!-- Vendor CSS-->
    <link href="assets/vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="assets/vendor/datepicker/daterangepicker.css" rel="stylesheet" media="all">

<!--static chart-->
<script src="assets/js/Chart.min.js"></script>
<!--//charts-->
<!-- geo chart -->
    <script src="//cdn.jsdelivr.net/modernizr/2.8.3/modernizr.min.js" type="text/javascript"></script>
    <script>window.modernizr || document.write('<script src="lib/modernizr/modernizr-custom.js"><\/script>')</script>
    <!--<script src="lib/html5shiv/html5shiv.js"></script>-->
     <!-- Chartinator  -->
    <script src="assets/js/chartinator.js" ></script>
   
<!--geo chart-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.js"></script>
<!--skycons-icons-->
<script src="assets/js/skycons.js"></script>
<!--//skycons-icons-->
</head>
<body>	
<div class="page-container">	
   <div class="left-content">
	   <div class="mother-grid-inner">
            <!--header start here-->
				<div class="header-main">
					<div class="header-left">
							<div class="logo-name">
									 <a href="Home"> <h1>RT10/39</h1> 
									<!--<img id="logo" src="" alt="Logo"/>--> 
								  </a> 								
							</div>
							<div class="clearfix"> </div>
						 </div>
						 <div class="header-right">
							
							<div class="profile_details">		
								<ul>
									<li class="dropdown profile_details_drop">
										<a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
											<div class="profile_img">	
												<span class="prfil-img"><img src="images/p1.png" alt=""> </span> 
												<div class="user-name">
													<p>User</p>
													<span>Account</span>
												</div>
												<i class="fa fa-angle-down lnr"></i>
												<i class="fa fa-angle-up lnr"></i>
												<div class="clearfix"></div>	
											</div>	
										</a>
										<ul class="dropdown-menu drp-mnu">
											<li> <a href="<?php echo base_url(). 'Auth/logout'; ?>"><i class="fa fa-sign-out"></i> Logout</a> </li>
										</ul>
									</li>
								</ul>
							</div>
							<div class="clearfix"> </div>				
						</div>
				     <div class="clearfix"> </div>	
				</div>
<!--heder end here-->
<!-- script-for sticky-nav -->
		<script>
		$(document).ready(function() {
			 var navoffeset=$(".header-main").offset().top;
			 $(window).scroll(function(){
				var scrollpos=$(window).scrollTop(); 
				if(scrollpos >=navoffeset){
					$(".header-main").addClass("fixed");
				}else{
					$(".header-main").removeClass("fixed");
				}
			 });
			 
		});
		</script>
		<!-- /script-for sticky-nav -->
<!--inner block start here-->
<div class="inner-block">

<div id="chartContainer" style="height: 300px; width: 100%;"></div>
<div class="chart-layer-2">
<?php 
    $no=1;
    foreach($datas as $w){ ?>
<script>
    var total1 = <?php echo $w->totalkendaraan; ?>;
    var total2 = <?php echo $w->totalluarnegri; ?>; 
    var total3 = <?php echo $w->totalkumpul; ?>; 
    var total4 = <?php echo $w->totalbertemu; ?>; 
    var total5 = <?php echo $w->totalterjangkit; ?>; 
    var total6 = <?php echo $w->totalgejala; ?>; 
window.onload = function () {
	var chart = new CanvasJS.Chart("chartContainer",
	{
		title: {
			text: "Grafik Self Assessment Warga RT10/39",
			dockInsidePlotArea: true
		},		   
		data: [
		{        
			type: "column",             
			dataPoints: [
				{ label: "Kendaraan Umum", y: total1 },
				{ label: "Pergi Luar Negeri", y: total2 },
				{ label: "Berkumpul", y: total3 },
				{ label: "Bertemu ODP/PDP/Positive", y: total4 },
				{ label: "Penah/Sedang Terjangkit", y: total5 },
				{ label: "Mengalami Gejala", y: total6 }
			]
        }
		]
	});
	chart.render();
}
</script>
<?php } ?>
<script type="text/javascript" src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
    <!-- Jquery JS-->
    <script src="assets/vendor/jquery/jquery.min.js"></script>
    <!-- Vendor JS-->
    <script src="assets/vendor/select2/select2.min.js"></script>
    <script src="assets/vendor/datepicker/moment.min.js"></script>
    <script src="assets/vendor/datepicker/daterangepicker.js"></script>

    <!-- Main JS-->
    <script src="assets/js/global.js"></script>
	
  <div class="clearfix"> </div>
</div>

</div>
<!--inner block end here-->
<!--copy rights start here-->
<div class="copyrights">
	 <p>© 2020 KKN. All Rights Reserved | by  <a href="https://www.instagram.com/arafasaka/" target="_blank">Ara Fasaka</a> </p>
</div>	
<!--COPY rights end here-->
</div>
</div>
<!--slider menu-->
    <div class="sidebar-menu">
		  	<div class="logo"> <a href="#" class="sidebar-icon"> <span class="fa fa-bars"></span> </a> <a href="#"> <span id="logo" ></span> 
			      <!--<img id="logo" src="" alt="Logo"/>--> 
			  </a> </div>		  
		    <div class="menu">
			<ul id="menu" >
                <li id="menu-home" ><a href="Home"><i class="fa fa-tachometer"></i><span>Dashboard</span></a></li>
                <?php if($this->session->userdata('level') == 1) { ?>
		        <li id="menu-comunicacao" ><a href="Data"><i class="fa fa-book nav_icon"></i><span>Data</span></span></a>
                <li><a href="chart"><i class="fa fa-bar-chart"></i><span>Charts</span></a></li>
                <?php } ?>
                <li><a href="Info"><i class="fa fa-newspaper-o"></i><span>Info</span></a></li>
                <?php if($this->session->userdata('level') == 1) { ?>
                <li><a href="Manajemen"><i class="fa fa-key"></i><span>Manajemen</span></a></li>
                <?php } ?>
		      </ul>
		    </div>
	 </div>
	<div class="clearfix"> </div>
</div>
<!--slide bar menu end here-->
<script>
var toggle = true;
            
$(".sidebar-icon").click(function() {                
  if (toggle)
  {
    $(".page-container").addClass("sidebar-collapsed").removeClass("sidebar-collapsed-back");
    $("#menu span").css({"position":"absolute"});
  }
  else
  {
    $(".page-container").removeClass("sidebar-collapsed").addClass("sidebar-collapsed-back");
    setTimeout(function() {
      $("#menu span").css({"position":"relative"});
    }, 400);
  }               
                toggle = !toggle;
            });
</script>
<!--scrolling js-->
		<script src="assets/js/jquery.nicescroll.js"></script>
		<script src="assets/js/scripts.js"></script>
		<!--//scrolling js-->
<script src="assets/js/bootstrap.js"> </script>
<!-- mother grid end here-->
</body>
</html>                     