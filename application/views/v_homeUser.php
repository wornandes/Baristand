
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
                   <h1><span class="books"></span> <a href="/Siamang/homeUser">Baristand</a></h1>
                </div>
                 <div class="top-nav">
                     <span class="menu"> <img src="assets2/images/icon.png" alt=""></span>  
                     <nav class="cl-effect-21" id="cl-effect-21">                                                           
                            <ul class="res">
                                <li><a href="/Siamang/homeUser" class="active">Home</a></li>
								<li><a href="/Siamang/homeUser" class="active">Pembayaran</a></li>
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
<div class="tambah">
    <?php if(isset($_SESSION['id_user'])){ ?> 
    <a href="#modalTambah" class="btn btn-primary pull-right" data-toggle="modal">Tambah Permohonan</a> 
    <?php }?>
</div>
<div class="educate">
    <div class="container">
        <div class="education-main">
            <ul class="ch-grid">
			<?php if (empty($permohonan)){ ?>
			<?php }
			else { ?>
            <?php foreach ($permohonan as $permohonan_key) {?>
                 <a href="/Siamang/permohonan?id_input=<?php echo $permohonan_key->id_input; ?>">
                 <div class="col-md-3 w3agile">
                    <li>
                        <div class="ch-item">               
                            <div class="ch-info">
                                <div class="ch-info-front ch-img-1">
                                    <span class="glyphicon glyphicon-grain" aria-hidden="true"> </span>
                                    <h5><?php echo $permohonan_key->input_komoditi;  ?></h5>
                                </div>
                                <div class="ch-info-back">
                                    <!--<img src="gambar/<?php echo $permohonan_key->nomor_surat; ?>"style="max-height: 100px"/> -->
                                    <h3><?php echo $permohonan_key->input_komoditi;  ?></h3>
                                    <h3><?php echo $permohonan_key->file_komoditi;  ?></h3><br>
                                 </div>  
                            </div>
                        </div>
                    </li>
                    </div> 
                    </a>
                    <?php } ?>
					<?php } ?>
                    <div class="clearfix"> </div>
             </ul>
         </div>
    </div>
</div>
<!-- Modal tambah permohonan -->
<div class="modal fade" id="modalTambah" role="dialog">
   <div class="modal-dialog" role="document">
      <div class="modal-content">
        <form role="form" action="permohonan/tambahPermohonan" method="post" class="form-group" enctype="multipart/form-data">
         <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Tutup"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title">Masukkan Data</h4>
         </div>
         <div class="modal-body">
            <label>Nomor Surat:</label><input type="text" name="nomor_surat" class="form-control" placeholder="Nomor Surat" required autofocus><br>
			<label>Tanggal Surat:</label><input type="date" name="tanggal" class="form-control" placeholder="Tanggal Surat" required autofocus><br>
			<label>File Surat</label><input type="file" name="userfile[]" multiple="multiple" class="form-control" placeholder="Browse" required autofocus><br>
            <label>Nama Direktur/Penanggung Jawab</label><input type="text" name="nama_direktur" class="form-control" placeholder="Nama Penanggung Jawab" required autofocus><br>
            <label>Input Komoditi</label><input type="text" name="input_komoditi" class="form-control" placeholder="Input Komoditi" required autofocus><br>
			<label>Input File Komoditi</label><input type="file" name="userfile[]" multiple="multiple" class="form-control" placeholder="Browse" required autofocus><br>
			<input type="button" onclick="addInput()" class="tambahkomoditi" value="Tambah Komoditi"/><br>
				<span id="responce"></span>
				<script>
				var countBox =2;
				var boxName = 0;
				function addInput()
				{	
				var boxName=" "+countBox;
				document.getElementById('responce').innerHTML+='<br><label>Komoditi'+boxName+'<br><input type="text" name="input_komoditi" class="form-control" required autofocus><br>';
					 countBox += 1;
				}
				</script>
			</div>
		<div class="modal-body">
			<label>Pedoman Mutu ISO 9001:2015</label><input type="file" name="userfile[]" multiple="multiple" class="form-control" placeholder="Browse" required autofocus><br>
			<label>Pedoman Kerja ISO 9001:2015</label><input type="file" name="userfile[]" multiple="multiple" class="form-control" placeholder="Browse" required autofocus><br>
			<label>Ilustrasi Pembubuhan Tanda SNI</label><input type="file" name="userfile[]" multiple="multiple" class="form-control" placeholder="Browse" required autofocus><br>
			<label>Denah Pabrik</label><input type="file" name="userfile[]" multiple="multiple" class="form-control" placeholder="Browse" required autofocus><br>
			<label>Flowchart Produksi</label><input type="file" name="userfile[]" multiple="multiple" class="form-control" placeholder="Browse" required autofocus><br>
			<label>Struktur Organisasi</label><input type="file" name="userfile[]" multiple="multiple" class="form-control" placeholder="Browse" required autofocus><br>
			<label>Foto Produk</label><input type="file" name="userfile[]" multiple="multiple" class="form-control" placeholder="Browse" required autofocus><br>
			<label>Daftar Isian Pemohon</label><input type="file" name="userfile[]" multiple="multiple" class="form-control" placeholder="Browse" required autofocus><br>
			<?php if (empty($permohonan)){ ?>
			<input type="hidden" name="id_perusahaan" id="id_perusahaan" value="<?php echo $idPerusahaan;?>">
			<?php }
			else { ?>
            <?php foreach ($permohonan as $permohonan_key) {?>
			<input type="hidden" name="id_perusahaan" id="id_perusahaan" value="<?php echo $permohonan_key->id_perusahaan;?>">
			<?php } ?>
			<?php } ?>
         </div>
      <div class="modal-footer">
     <button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
     <button class="btn btn-primary" type="submit">OK</button>
     </div>
  </div>
    </form>
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

<script src="/Siamang/assets/js/jquery.min.js"></script>
<script src="/Siamang/assets/js/data.js"></script>
<script src="/Siamang/assets/js/bootstrap.min.js"></script>

</body>
</html>