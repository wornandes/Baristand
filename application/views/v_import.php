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


<title>Tambah Tim</title> 
</head>
<body >
<!--header strat here-->
<div class="banner agileits">
    <div class="header">
        <div class="container">
            <div class="header-main">
                <div class="logo">
                   <h1><span class="books"></span> <a href="/Siamang/homeManagerOperational">Baristand</a></h1>
                </div>
                 <div class="top-nav">
                     <span class="menu"> <img src="assets2/images/icon.png" alt=""></span>  
                     <nav class="cl-effect-21" id="cl-effect-21">                                                           
                            
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
	<form class="myform" action=".../index.php" method="post">
	<div class="modal-dialog" role="document">
      <div class="modal-content">
        <form role="form" action="/Siamang/pencarian/pencarianLokasi" method="post">
         <div class="modal-header">
		 <h4 class="modal-title">Apakah produk anda adalah produk import?</h4>
         </div>
		 <?php foreach($dataID as $id_key){ ?>
         <div class="modal-body">
            <input type="button" onclick="window.location.href='http://localhost/Siamang/daftarImport?id_user=<?php echo $id_key->id_user?>'" class="btn btn-primary" value="Ya"/><br><br>
            <input type="button" onclick="window.location.href='http://localhost/Siamang/importp?id_user=<?php echo $id_key->id_user?>'" class="btn btn--radius-2 btn--red" value="Tidak"/><br>
         </div>
		 <?php } ?>
     </div>
	</div>
	</form>
	</div>
	</div>									
</div>
<style>
/* Style The Dropdown Button */

.myform{
	
	width:1000px;
	margin:0 auto;
	
}

.card{
	background-color: #ffffff;
}
.inputvalues{
	width:400px;
	margin:0 auto;
	padding:5px;
	margin-bottom:10px;
	
}
.inputharga{
	width:150px;
	margin:0 auto;
	padding:5px;
	margin-bottom:10px;
	
}

</style>

<script src="/Siamang/assets/js/jquery.min.js"></script>
<script src="/Siamang/assets/js/data.js"></script>
<script src="/Siamang/assets/js/bootstrap.min.js"></script>

</body>
</html>







