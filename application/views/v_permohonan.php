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
<title>Detail Permohonan</title>
</head>
<body>
<!--header strat here-->
<div class="banner1 agileits">
  <div class="header">
    <div class="container">
      <div class="header-main">
        <div class="logo">
             <h1><span class="books"></span> <a href="/Siamang/homeAdmin">Baristand</a></h1>
        </div>
			<div class="top-nav">
				<span class="menu"> <img src="assets2/images/icon.png" alt=""></span>  
				<nav class="cl-effect-21" id="cl-effect-21">                                   
				<ul class="res">
				<li><a href="/Siamang/homeAdmin" class="active">Home</a></li>
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
<br>
<center><h2>Permohonan</h2></center>
<div class="container-fluid">

<?php 
      foreach($permohonan as $permohonan_key){ 
?>
<div class="row col-md-8 col-md-offset-2 custyle">
  <div class="panel panel-success">
	<div class="panel-heading">
      <b><?php echo $permohonan_key->input_komoditi; ?></b>
    </div>
    <div class="panel-body">
      <br>
      <p>Nomor Surat   : <?php echo $permohonan_key->nomor_surat;?></p><br>
      <p>Tanggal Surat : <?php echo $permohonan_key->tanggal;?></p><br>
      <p>File Surat  : <?php echo $permohonan_key->file_surat;?></p><br>
	  <a href="./assets/file/permohonan/<?php echo $permohonan_key->file_surat ?>" class="btn btn-primary" target="_blank">Lihat</a><br><br>
      <p>Nama Direktur/Penanggung Jawab  : <?php echo $permohonan_key->nama_direktur;?></p><br>
      <p>Input Komoditi : <?php echo $permohonan_key->input_komoditi;?></p><br>
      <p>File Komoditi  : <?php echo $permohonan_key->file_komoditi;?></p><br>
	  <a href="./assets/file/permohonan/<?php echo $permohonan_key->file_komoditi ?>" class="btn btn-primary" target="_blank">Lihat</a><br><br>
      <p>Pedoman Mutu ISO 9001:2015  : <?php echo $permohonan_key->pedoman_mutu;?></p><br>
	  <a href="./assets/file/permohonan/<?php echo $permohonan_key->pedoman_mutu ?>" class="btn btn-primary" target="_blank">Lihat</a><br><br>
	  <p>Pedoman Kerja ISO 9001:2015  : <?php echo $permohonan_key->pedoman_kerja;?></p><br>
	  <a href="./assets/file/permohonan/<?php echo $permohonan_key->pedoman_kerja ?>" class="btn btn-primary" target="_blank">Lihat</a><br><br>
	  <p>Ilustrasi Pembubuhan Tanda SNI  : <?php echo $permohonan_key->tanda_sni;?></p><br>
	  <a href="./assets/file/permohonan/<?php echo $permohonan_key->tanda_sni ?>" class="btn btn-primary" target="_blank">Lihat</a><br><br>
	  <p>Denah Pabrik  : <?php echo $permohonan_key->denah_pabrik;?></p><br>
	  <a href="./assets/file/permohonan/<?php echo $permohonan_key->denah_pabrik ?>" class="btn btn-primary" target="_blank">Lihat</a><br><br>
	  <p>Flowchart Produksi  : <?php echo $permohonan_key->flowchart_produksi;?></p><br>
	  <a href="./assets/file/permohonan/<?php echo $permohonan_key->flowchart_produksi ?>" class="btn btn-primary" target="_blank">Lihat</a><br><br>
	  <p>Struktur Organisasi  : <?php echo $permohonan_key->struktur_organisasi;?></p><br>
	  <a href="./assets/file/permohonan/<?php echo $permohonan_key->struktur_organisasi ?>" class="btn btn-primary" target="_blank">Lihat</a><br><br>
	  <p>Foto Produk  : <?php echo $permohonan_key->foto_produk;?></p><br>
	  <a href="./assets/file/permohonan/<?php echo $permohonan_key->foto_produk ?>" class="btn btn-primary" target="_blank">Lihat</a><br><br>
	  <p>Daftar Isian Pemohon  : <?php echo $permohonan_key->daftar_isian_pemohon;?></p><br>
	  <a href="./assets/file/permohonan/<?php echo $permohonan_key->daftar_isian_pemohon ?>" class="btn btn-primary" target="_blank">Lihat</a><br><br>
    </div>
	<?php } ?>
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
.dropbtn {
    background-color: transparent;
    color: white;
    padding: 16px;
    font-size: 16px;
    border: none;
    cursor: pointer;
}


</style>

<script src="assets/js/jquery.min.js"></script>
<script src="assets/js/data.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
</body>
</html>