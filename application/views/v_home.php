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
   
    <!--<script src="lib/html5shiv/html5shiv.js"></script>-->
     <!-- Chartinator  -->
    

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
									 <a href="index.html"> <h1>RT10/39</h1> 
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
												<span class="prfil-img"><img src="" alt=""> </span> 
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

<!--main page chart layer2-->
<div class="chart-layer-2">
	
<div class="page-wrapper ">
        <div class="wrapper wrapper--w790">
            <div class="card card-5">
                <div class="card-heading">
                    <h2 class="title">Self Assessment Form</h2>
                </div>
                <div class="card-body">
                    <form action="<?php echo base_url(). 'home/tambah_aksi'; ?> "method="post">
					<div class="form-row">
                            <div class="name">Nama Lengkap</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-5" name="nama_warga" type="text">
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">Alamat</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-5" name="alamat_warga" type="text">
                                </div>
                            </div>
                        </div>
                        <div>
                            <p><b>Kendaraan yang sering dikendari</b></p><br><br>
                            <div class="p-t-15 text center">
                                <label class="radio-container m-r-55">Pribadi
                                    <input type="radio" name="kendaraan" value="1">
                                    <span class="checkmark"></span>
                                </label>
                                <label class="radio-container">Umum
                                    <input type="radio" name="kendaraan" value="0">
                                    <span class="checkmark"></span>
                                </label>
                            </div>
						</div><br><br>
						<div>
                            <p><b>Apa anda ke luar negeri 14 hari terakhir?</b></p><br><br>
                            <div class="p-t-15">
                                <label class="radio-container m-r-55">Ya
                                    <input type="radio" name="luarnegri" value="1">
                                    <span class="checkmark"></span>
                                </label>
                                <label class="radio-container">Tidak
                                    <input type="radio" name="luarnegri" value="0" >
                                    <span class="checkmark"></span>
                                </label>
                            </div>
						</div><br><br>
						<div>
                            <p><b>Apakah anda berkumpul/mengadakan acara secara tatap muka (lebih dari 10 orang) 14 hari terakhir?</b></p><br><br>
                            <div class="p-t-15">
                                <label class="radio-container m-r-55">Ya
                                    <input type="radio" name="kumpul"  value="1">
                                    <span class="checkmark"></span>
                                </label>
                                <label class="radio-container">Tidak
                                    <input type="radio" name="kumpul" value="0" >
                                    <span class="checkmark"></span>
                                </label>
                            </div>
						</div><br><br>
						<div>
                            <p><b>Apakah anda bertemu ODP/PDP/Positivie Covid 19 14 hari terakhir?</p><br><br>
                            <div class="p-t-15">
                                <label class="radio-container m-r-55">Ya
                                    <input type="radio" name="bertemu"  value="1">
                                    <span class="checkmark"></span>
                                </label>
                                <label class="radio-container">Tidak
                                    <input type="radio" name="bertemu" value="0" >
                                    <span class="checkmark"></span>
                                </label>
                            </div>
						</div><br><br>
						<div>
                            <p><b>Apakah anda sedang/pernah terjangkit covid 19?</p><br><br>
							<div class="p-t-15">
                                <label class="radio-container m-r-55">Ya
                                    <input type="radio" name="terjangkit"  value="1">
                                    <span class="checkmark"></span>
                                </label>
                                <label class="radio-container">Tidak
                                    <input type="radio" name="terjangkit" value="0" >
                                    <span class="checkmark"></span>
                                </label>
                            </div>
						</div><br><br>
						<div>
                            <p>Apakah anda saat ini demam/batuk/pilek/sakit tenggorokan/sesak nafas 14 hari terkahir?</p><br>
							<div class="p-t-15">
                                <label class="radio-container m-r-55">Ya
                                    <input type="radio" name="gejala"  value="1">
                                    <span class="checkmark"></span>
                                </label>
                                <label class="radio-container">Tidak
                                    <input type="radio" name="gejala" value="0" >
                                    <span class="checkmark"></span>
                                </label>
                            </div>
						</div><br><br>
                        <div>
                            <button class="btn btn--radius-2 btn--red" type="submit">TAMBAH</button>
                        </div>
                    </form>
                   
                </div>
            </div>
        </div>
    </div>

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
		<!-- <script src="assets/js/jquery.nicescroll.js"></script> -->
		<script src="assets/js/scripts.js"></script>
		<!--//scrolling js-->
<script src="assets/js/bootstrap.js"> </script>
<!-- mother grid end here-->
</body>
</html>                     