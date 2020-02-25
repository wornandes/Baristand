<!DOCTYPE html>
<html>
<head>
<link href="/Siamang/assets2/css/bootstrap.css" rel="stylesheet" type="text/css" media="all">
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<!-- Custom Theme files -->
<link href="/Siamang/assets2/css/stylelogin.css" rel="stylesheet" type="text/css" media="all"/>
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

<!-- Icons font CSS-->
    <link href="/Siamang/assets2/vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
    <link href="/Siamang/assets2/vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <!-- Font special for pages-->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">

    <!-- Vendor CSS-->
    <link href="/Siamang/assets2/vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="/Siamang/assets2/vendor/datepicker/daterangepicker.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="/Siamang/assets2/css/tambah_jadwal.css" rel="stylesheet" media="all">
<title>Baristand Medan</title> 
</head>
<body>
<!--header strat here-->
<div class="banner agileits">
  <div class="header">
    <div class="container">
      <div class="header-main">
        <div class="logo">
             <h1><span class="books"></span> <a href="login">Baristand</a></h1>
          </div>
         <div class="top-nav">
           <span class="menu"> <img src="assets2/images/icon.png" alt=""></span>  
             <nav class="cl-effect-21" id="cl-effect-21">                        
                                <form action="login/aksi_login" method="post" class="form-inline">
                                  <div class="form-group">
                                    <label class="sr-only" >Username</label>
                                    <input type="text" class="form-control" name="username" placeholder="Username">
                                  </div>
                                  <div class="form-group">
                                    <label class="sr-only">Password</label>
                                    <input type="password" class="form-control" name="password" placeholder="Password">
                                  </div>
								  
                                  <button type="submit" class="btn-primary btn-lg">Log in</button>
								  <a href="#modalDaftar" class="btn-primary btn-lg" data-toggle="modal">Register</a>
								  </form>
								  
			 </nav>
            </div>
          <div class="clearfix"> </div>
       </div>



<div class="modal fade" id="modalDaftar" role="dialog">
   <div class="modal-dialog" role="document">
      <div class="modal-content">
        <form role="form" action="login/registrasi" method="post" class="form-group">
         <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Tutup"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title">Registrasi</h4>
         </div>
         <div class="modal-body">
            <label>Email Perusahaan</label><input type="text" name="username" class="form-control"  required autofocus><br>
            <label>Nomor Telpon Perusahaan</label><input type="text" name="noTelp" class="form-control" required autofocus><br>
            <label>Nomor Handphone Perusahaan</label><input type="text" name="noHP" class="form-control" required autofocus><br>
			<label>Nomor Aplikasi Telegram</label><input type="text" name="telegram" class="form-control" required autofocus><br>
			<label>Password</label><input type="password" name="password" class="form-control" required autofocus><br>
         </div>
      <div class="modal-footer">
     <button type="button" class="btn btn--radius-2 btn--red" data-dismiss="modal">Batal</button>
     <button class="btn btn-primary" type="submit"> Simpan </button>
     </div>
  </div>
    </form>
</div>
</div>									
                            
                            
                
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
   </div>
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
   <!-- FlexSlider -->
<!--banner end here-->
<style>
</style>
<script src="assets/js/jquery.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
</body>
</html>