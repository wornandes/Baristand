
<!DOCTYPE html>
<html>
<head>
<link href="/Siamang/assets2/css/bootstrap.css" rel="stylesheet" type="text/css" media="all">
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<!-- Custom Theme files -->
<link href="/Siamang/assets2/css/style.css" rel="stylesheet" type="text/css" media="all"/>
<link href="/Siamang/assets2/css/style1.css" rel="stylesheet" type="text/css" media="all" />
<!-- Custom Theme files -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords"/>
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!--Google Fonts-->
<link href='https://fonts.googleapis.com/css?family=Marvel:400,700' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Roboto:400,300,500,700,900' rel='stylesheet' type='text/css'>
<!--google fonts-->
<script src="/Siamang/assets2/js/jquery-1.11.0.min.js"></script>
<link rel="stylesheet" href="/Siamang/assets2/css/flexslider.css" type="text/css" media="screen" />
<title>Home</title> 
</head>
<body>
<!--header strat here-->
<div class="banner agileits">
    <div class="header">
        <div class="container">
            <div class="header-main">
                <div class="logo">
                   <h1><span class="books"></span> <a href="/Siamang/homeBendahara">Baristand</a></h1>
                </div>
                 <div class="top-nav">
                     <span class="menu"> <img src="assets2/images/icon.png" alt=""></span>  
                     <nav class="cl-effect-21" id="cl-effect-21">                                                           
                            <ul class="res">
                                <li><a href="/Siamang/homeBendahara" class="active">Home </a></li>
								<li><a href="/Siamang/daftar_permohonan_bendahara" class="active">Daftar Permohonan</a></li>
                                <li><?php if(isset($_SESSION['id_user'])){ ?> 
                                <a href="/Siamang/login/logout">Logout</a> 
                                <?php }else{ ?>
                                <a href="/Siamang/login">Login</a> 
                                <?php } ?>
                                </li>                   

                            </ul>
                        </nav>
                        <!-- script-for-menu -->
                                         <script>
                                           $( "span.menu" ).click(function() {
                                             $( "ul.res" ).slideToggle( 300, function() {
                                             // Animation complete.
                                              });
                                             });
                                        </script>
                        <!-- /script-for-menu -->
        
                 </div>
                <div class="clearfix"> </div>
            </div>
     </div>
   </div>
   <!-- FlexSlider -->
<!--banner end here-->
<!--educate logos start here-->

 <div class="banner-main">
                 <section class="slider">
                     <div class="flexslider">
                        <ul class="slides">
                          <li>
                            <div class="banner-main" >             
                                   <h3>Selamat Datang di <br><b>Portal Baristand Industri Medan</b></br></h3>
                                <div class="clearfix"> </div>
                            </div>
                          </li>
                          <li>
                            <div class="banner-main" >

                                   <h3>Badan Penelitian dan Pengembangan Industri</h3>
                                   <h2><b>BALAI RISET DAN STANDARISASI INDUSTRI MEDAN</b></h2>
								   <p>Jl. Sisingamangaraja No.24, Telp. (061)7363471, Fax. (061)7362830</p>
								   <p>Website: baristandmedan.kemenperin.go.id | Email : bind_medan@kemenperin.go.id</p>
								   <p><b>MEDAN - 20217</b></p>

                                <div class="clearfix"> </div>
                            </div>
                          </li>
                          <li>
                            <div class="banner-main">             
                                   <h1>Balai Riset dan Standardisasi Industri yang selanjutnya dalam Peraturan Menteri 
								   disebut Baristand Industri adalah unit pelaksana teknis di lingkungan Departemen Perindustrian 
								   yang berada dibawah dan bertanggungjawab kepada Kepala Badan Penelitian dan Pengembangan Industri.
								   </h1>
                                <div class="clearfix"> </div>
                            </div>
                          </li>              
                        </ul>
                     </div>
                     <div class="clearfix"> </div>
            </section>  
         </div>
</div>
<style>
/* Style The Dropdown Button */
.dropbtn {
    background-color: transparent;
    color: white;
    padding: 16px;
    font-size: 16px;
    border: none;
    cursor: pointer;
}

/* The container <div> - needed to position the dropdown content */
.dropdown {
    position: relative;
    display: inline-block;
}

/* Dropdown Content (Hidden by Default) */
.dropdown-content {
    display: none;
    position: absolute;
    background-color: hsl(225, 100%, 60%, 0.8);
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 1;
}

/* Links inside the dropdown */
.dropdown-content a {
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
}

/* Change color of dropdown links on hover */
.dropdown-content a:hover {background-color: transparent;}

/* Show the dropdown menu on hover */
.dropdown:hover .dropdown-content {
    display: block;
}

/* Change the background color of the dropdown button when the dropdown content is shown */
.dropdown:hover .dropbtn {
    background-color: transparent;
}
</style>
<script defer src="assets2/js/jquery.flexslider.js"></script>
                  <script type="text/javascript">
                    $(function(){                
                    });
                    $(window).load(function(){
                      $('.flexslider').flexslider({
                        animation: "slide",
                        start: function(slider){
                          $('body').removeClass('loading');
                        }
                      });
                    });
</script>
<script src="/Siamang/assets/js/jquery.min.js"></script>
<script src="/Siamang/assets/js/data.js"></script>
<script src="/Siamang/assets/js/bootstrap.min.js"></script>

</body>
</html>