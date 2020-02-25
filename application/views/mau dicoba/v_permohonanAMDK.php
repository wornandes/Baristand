<!DOCTYPE html>
<html>
<head>
<link href="/Siamang/assets2/css/bootstrap.css" rel="stylesheet" type="text/css" media="all">
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<!-- Custom Theme files -->
<link href="/Siamang/assets2/css/style.css" rel="stylesheet" type="text/css" media="all"/>
<!-- Custom Theme files -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords"/>
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!--Google Fonts-->
<link href='//fonts.googleapis.com/css?family=Marvel:400,700' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Roboto:400,300,500,700,900' rel='stylesheet' type='text/css'>
<!--google fonts-->
<script src="/Siamang/assets2/js/jquery-1.11.0.min.js"></script>
<link type="/Siamang/assets2/text/css" rel="stylesheet" href="css/colorfulTab.min.css">
<title>Permohonan Amdk</title> 
</head>
<body>

<!--header strat here-->
<div class="banner1 agileits">
  <div class="header">
    <div class="container">
      <div class="header-main">
        <div class="logo">
             <h1><span class="books"></span> <a href="/Siamang/homeUser">SIAMANG</a></h1>
        </div>
			<div class="top-nav">
				<span class="menu"> <img src="assets2/images/icon.png" alt=""></span>  
				<nav class="cl-effect-21" id="cl-effect-21">                                   
				<ul class="res">
				<li><a href="/Siamang/homeUser" class="active">Home</a></li>
                <li><?php if(!isset($_SESSION['id_user'])){ ?>
					<div class="dropdown">
                        <button class="dropbtn active">Pencarian</button>
                        <div class="dropdown-content">
                        <a href="#modalLokasi" data-toggle="modal">Lokasi</a>
                        <a href="#modalGenre" data-toggle="modal">Genre</a>
                         <a href="/Siamang/pencarian/limateratas">5 Teratas</a>
                    </div>
            </div>  <?php } ?>
                </li>
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
</div>
<!--header end here-->


<form class="myform" action=".../index.php" method="post">
      <div class="modal-content">
        <form role="form" action="acara/registrasi" method="post" class="form-group">
         <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Tutup"><span aria-hidden="true">&times;</span></button>
         </div>
         <div class="modal-body">
			<h4><b>Bentuk Usaha dalam Negeri : </h4></b>
				<input type="radio" name="lokasi" value="UMM DOME"> PT
				<input type="radio" name="lokasi" value="GRAHA CAKRAWALA"> CV
				<input type="radio" name="lokasi" value="GRAHA CAKRAWALA"> UD<br>
            <label>Nama Perusahaan</label><input type="text" name="username" class="form-control"  required autofocus>
            <label>Alamat Kantor</label><input type="text" name="noTelp" class="form-control" required autofocus>
            <label>Alamat Pabrik</label><input type="text" name="noHP" class="form-control" required autofocus>
			<label>Akte Pendirian Perusahaan<br><h6>deed of incorporation</h6></label>
			<input type="text" name="telegram" class="form-control" required autofocus>
			<input type="button" onclick="window.location='https://www.youtube.com/'" class="register" value="Lihat Permohonan"/><br>
			<label>Nomor Peserta Wajib Pajak(NPWP)<br><h6>taxpayer participan number</h6></label>
			<input type="button" onclick="window.location='https://www.youtube.com/'" class="register" value="Lihat Permohonan"/><br>
			<input type="text" name="telegram" class="form-control" required autofocus>
			<label>Tanda Daftar Perusahaan(TDP)<br><h6>certificate of company registration</h6></label>
			<input type="text" name="telegram" class="form-control" required autofocus>
			<label>Surat Izin Usaha Perusahaan(SIUP)<br><h6>business license</h6></label>
			<input type="text" name="telegram" class="form-control" required autofocus>
			<label>Sertifikat Merek/Tanda Daftar Merek<br><h6>trademark certificate/brand register</h6></label>
			<input type="text" name="telegram" class="form-control" required autofocus>
			<button>Tambah Merek</button><br><br>
			<label>Surat Ijin Penggunaan Air Bawah Tanah (SIPA)<br><h6>permit for use of underground water</h6></label>
			<input type="text" name="telegram" class="form-control" required autofocus>
			<label>Angka Pengenal Import<br><h6>import identification number</h6></label>
			<input type="text" name="telegram" class="form-control" required autofocus>
			<label>Sistem Manajemen Mutu</label>
			<input type="text" name="telegram" class="form-control" required autofocus>
			<label>Ijin Usaha Industri</label>
			<input type="text" name="telegram" class="form-control" required autofocus>
		

         </div>
      <div class="modal-footer">
     <button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
     <button class="btn btn-primary" type="submit">Simpan</button>
     </div>
  </div>
    </form>
</div>					

<style>
.myform{
	
	width:1000px;
	margin:0 auto;
	
}
.inputvalues{
	width:400px;
	margin:0 auto;
	padding:5px;
	margin-bottom:10px;
	
}	

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
    background-color: hsl(225, 100%, 65%);
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

</body>
</html>