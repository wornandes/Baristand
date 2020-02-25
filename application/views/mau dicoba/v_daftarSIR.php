<!DOCTYPE html>
<html>
<head>
<link href="assets2/css/bootstrap.css" rel="stylesheet" type="text/css" media="all">
<link href="assets2/css/style.css" rel="stylesheet" type="text/css" media="all"/>
<link href="assets2/css/style1.css" rel="stylesheet" type="text/css" media="all" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords"/>
<link href='https://fonts.googleapis.com/css?family=Marvel:400,700' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Roboto:400,300,500,700,900' rel='stylesheet' type='text/css'>
<!--google fonts-->
<script src="assets2/js/jquery-1.11.0.min.js"></script>
<link rel="stylesheet" href="assets2/css/flexslider.css" type="text/css" media="screen" />
<title>Home</title> 
</head>
<body>
<!--header strat here-->
<form class="myform" action=".../index.php" method="post">
   <div class="modal-dialog" role="document">
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
			<label>Akte Pendirian Perusahaan<br><h6>deed of incorporation</h6></label><input type="text" name="telegram" class="form-control" required autofocus>
			<input type="file" name="gambar" class="form-control" placeholder="Browse" required autofocus>
			<label>Nomor Peserta Wajib Pajak(NPWP)<br><h6>taxpayer participan number</h6></label><input type="text" name="telegram" class="form-control" required autofocus>
			<input type="file" name="gambar" class="form-control" placeholder="Browse" required autofocus>
			<label>Tanda Daftar Perusahaan(TDP)<br><h6>certificate of company registration</h6></label><input type="text" name="telegram" class="form-control" required autofocus>
			<input type="file" name="gambar" class="form-control" placeholder="Browse" required autofocus>
			<label>Surat Izin Usaha Perusahaan(SIUP)<br><h6>business license</h6></label><input type="text" name="telegram" class="form-control" required autofocus>
			<input type="file" name="gambar" class="form-control" placeholder="Browse" required autofocus><br>
			<label>Sertifikat Merek/Tanda Daftar Merek<br><h6>trademark certificate/brand register</h6></label><input type="text" name="telegram" class="form-control" required autofocus>
			<input type="file" name="gambar" class="form-control" placeholder="Browse" required autofocus><br>
			<button>Tambah Merek</button><br><br>
			<label>Angka Pengenal Import<br><h6>import identification number</h6></label><input type="text" name="telegram" class="form-control" required autofocus>
			<input type="file" name="gambar" class="form-control" placeholder="Browse" required autofocus><br>
			<label>Sistem Manajemen Mutu</label><input type="text" name="telegram" class="form-control" required autofocus>
			<input type="file" name="gambar" class="form-control" placeholder="Browse" required autofocus><br>
			<label>Ijin Usaha Industri</label><input type="text" name="telegram" class="form-control" required autofocus>
			<input type="file" name="gambar" class="form-control" placeholder="Browse" required autofocus><br>


         </div>
      <div class="modal-footer">
     <button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
     <button class="btn btn-primary" type="submit">Simpan</button>
     </div>
  </div>
    </form>
</div>
</div>									
</body>
</html>