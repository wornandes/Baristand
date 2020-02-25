

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


<title>Daftar Import</title> 
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
	<form role="form" action="daftarImport/daftarImport" method="post" class="form-group" enctype="multipart/form-data">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-body">
					<label>Legalitas Produsen <br>*Please translate to Indonesian Language with license translator </label><br>
					<h4><b>Bentuk Usaha dalam Negeri : </h4></b><br>
					<label class="radio-btn">PT
					<input type="radio" name="bentuk_usaha" value="PT">
					<span class="checkmark"></span>
					</label>
					<label class="radio-btn">CV
					<input type="radio" name="bentuk_usaha" value="CV">
					<span class="checkmark"></span>
					</label>
					<label class="radio-btn">UD
					<input type="radio" name="bentuk_usaha" value="UD">
					<span class="checkmark"></span>
					</label>
					<br>
					<label>Nama Perusahaan</label>
					<input type="text" name="nama_perusahaan" class="form-control"  required autofocus>
					<label>Alamat Kantor</label>
					<input type="text" name="alamat_kantor" class="form-control" required autofocus>
					<label>Alamat Pabrik</label>
					<input type="text" name="alamat_pabrik" class="form-control" required autofocus>
					<label>Akte Pendirian Perusahaan<br><h6>deed of incorporation</h6></label>
					<input type="text" name="akte_pendirian" class="form-control" required autofocus>
					<input type="file" name="userfile[]" multiple="multiple" class="form-control" placeholder="Browse" required autofocus><br>
					<label>Notary act *</label>
					<input type="text" name="notary_act" class="form-control" required autofocus>
					<input type="file" name="userfile[]" multiple="multiple" class="form-control" placeholder="Browse" required autofocus><br>
					<label>License Permite*</label><br>
					<input type="text" name="license_permite" class="form-control" required autofocus>
					<input type="file" name="userfile[]" multiple="multiple" class="form-control" placeholder="Browse" required autofocus><br>
					<label>MoU between Plant and Importir / Statement of Plant</label>
					<input type="text" name="mou" class="form-control" required autofocus>
					<input type="file" name="userfile[]" multiple="multiple" class="form-control" placeholder="Browse" required autofocus><br>
					<label>Pedoman Mutu ISO 9001:2015<br></label>
					<input type="text" name="pedoman_mutu" class="form-control" required autofocus>
					<input type="file" name="userfile[]" multiple="multiple" class="form-control" placeholder="Browse" required autofocus><br>
					<label>Sertifikat ISO 9001:2015<br></label>
					<input type="text" name="sertifikat_iso" class="form-control" required autofocus>
					<input type="file" name="userfile[]" multiple="multiple" class="form-control" placeholder="Browse" required autofocus><br>
					<label>Ilustrasi pembubuhan tanda SNI<br></label>
					<input type="text" name="illustrasi" class="form-control" required autofocus>
					<input type="file" name="userfile[]" multiple="multiple" class="form-control" placeholder="Browse" required autofocus><br>
					<label>Denah Pabrik<br></label>
					<input type="text" name="denah_pabrik" class="form-control" required autofocus>
					<input type="file" name="userfile[]" multiple="multiple" class="form-control" placeholder="Browse" required autofocus><br>
					<label>Flowchart Produksi<br></label>
					<input type="text" name="flowchart" class="form-control" required autofocus>
					<input type="file" name="userfile[]" multiple="multiple" class="form-control" placeholder="Browse" required autofocus><br>
					<label>Struktur Organisasi</label>
					<input type="text" name="struktur" class="form-control" required autofocus>
					<input type="file" name="userfile[]" multiple="multiple" class="form-control" placeholder="Browse" required autofocus><br>
					<label>Foto Produk</label>
					<input type="text" name="foto" class="form-control" required autofocus>
					<input type="file" name="userfile[]" multiple="multiple" class="form-control" placeholder="Browse" required autofocus><br>
					<input type="button" onclick="addInput()" class="btn btn--radius-2 btn--red" value="Tambah Importir"/><br>
						<span id="responce"></span>
						<script>
						var countBox =2;
						var boxName = 0;
						function addInput()
						{
						var boxName=" Importir "+countBox;
							document.getElementById('responce').innerHTML+='<br><label>MoU between Plant and Importir / Statement of Plant'+boxName+'</label><input type="text" name="noHP" class="form-control" required autofocus><input type="file" name="gambar" class="form-control" placeholder="Browse" required autofocus>';
							document.getElementById('responce').innerHTML+='<br><label>Ilustrasi pembubuhan tanda SNI'+boxName+'</label><input type="text" name="noHP" class="form-control" required autofocus><input type="file" name="gambar" class="form-control" placeholder="Browse" required autofocus>';
							document.getElementById('responce').innerHTML+='<br><label>Foto Produk'+boxName+'</label><input type="text" name="noHP" class="form-control" required autofocus><input type="file" name="gambar" class="form-control" placeholder="Browse" required autofocus>';
							document.getElementById('responce').innerHTML+='<br><label>Sertifikat Merek / Tanda Daftar Merek'+boxName+'</label><input type="text" name="noHP" class="form-control" required autofocus><input type="file" name="gambar" class="form-control" placeholder="Browse" required autofocus>';
							document.getElementById('responce').innerHTML+='<br><label>Nomor Peserta Wajib Pajak (NPWP)'+boxName+'</label><input type="text" name="noHP" class="form-control" required autofocus><input type="file" name="gambar" class="form-control" placeholder="Browse" required autofocus>';
							document.getElementById('responce').innerHTML+='<br><label>Tanda Daftar Perusahaan'+boxName+'</label><input type="text" name="noHP" class="form-control" required autofocus><input type="file" name="gambar" class="form-control" placeholder="Browse" required autofocus>';
							document.getElementById('responce').innerHTML+='<br><label>Angka Pengenal Import'+boxName+'</label><input type="text" name="noHP" class="form-control" required autofocus><input type="file" name="gambar" class="form-control" placeholder="Browse" required autofocus>';
							document.getElementById('responce').innerHTML+='<br><label>Nama Penanggung Jawab Importir'+boxName+'</label><input type="text" name="noHP" class="form-control" required autofocus><input type="file" name="gambar" class="form-control" placeholder="Browse" required autofocus><br>';
							 countBox += 1;
						}
						</script>
					<br>
					<form action="index.php" method="get">
					<label>Search :</label>
					<input type="text" name="cari">
					</form><br><br>
					<label>Belum terdaftar?klik <a href="https://www.youtube.com/">disini</a></label><br><br>
					<label>Nomor Peserta Wajib Pajak (NPWP)</label>
					<input type="text" name="nomor_pajak" class="form-control" required autofocus>
					<input type="file" name="userfile[]" multiple="multiple" class="form-control" placeholder="Browse" required autofocus><br>
					<label>Sertifikat Merek / Tanda Daftar Merek</label>
					<input type="text" name="sertifikat_merek" class="form-control" required autofocus>
					<input type="file" name="userfile[]" multiple="multiple" class="form-control" placeholder="Browse" required autofocus><br>
					<label>Tanda Daftar Perusahaan</label>
					<input type="text" name="tanda_daftar" class="form-control" required autofocus>
					<input type="file" name="userfile[]" multiple="multiple" class="form-control" placeholder="Browse" required autofocus><br>
					<label>Angka Pengenal Import</label>
					<input type="text" name="angka_pengenal" class="form-control" required autofocus>
					<input type="file" name="userfile[]" multiple="multiple" class="form-control" placeholder="Browse" required autofocus><br>
					<label>Nama Penanggung Jawab Importir</label>
					<input type="text" name="nama_penanggung" class="form-control" required autofocus>
					<input type="hidden" name="id_user" id="id_user" value="<?php echo $id_user;?>">
					<input type="hidden" name="tipe_jenis" id="tipe_jenis" value="Import">
				</div>
				<div class="modal-footer">
				<button class="btn btn-primary" type="submit">Simpan</button>
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




















