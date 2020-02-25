	
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


<title>Daftar Permohonan</title> 
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
								<li><a href="/Siamang/homeBendahara" class="active">Home</a></li>
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
		

<div class="container my-5">
    <div class="card-body text-center">
    <h4 class="card-title">Daftar Permohonan Sertifikasi</h4>
    <p class="card-text"></p>
  </div>
    <div class="card">
        
        <table class="table table-hover">
            <thead>
              <tr>
                <th scope="col">Nomor Permohonan</th>
                <th scope="col">Nama Perusahaaan</th>
                <th scope="col">Alamat</th>
                <th scope="col">Produk</th>
				<th scope="col">Billing</th>
                <th scope="col">Tagihan</th>
                <th scope="col">Nama Importir</th>
				<th scope="col">Persetujuan Pembayaran</th>
				<th scope="col">Status Pembayaran</th>
				<th scope="col">Nomor NTPN</th>
				<th scope="col">Tindakan</th>
              </tr>
            </thead>
            <tbody>
			<?php
            foreach($dataPermohonan as $data){ ?>
            <tr>
            <td><?php echo $data->id_input;?> </td>
            <td><?php echo $data->nama_perusahaan;?> </td>
            <td><?php echo $data->alamat_kantor;?> </td>
            <td><?php echo $data->input_komoditi;?> </td>
            <td><?php echo $data->sertifikat_merek;?> </td>
            <td><?php echo $data->tipe_jenis;?> </td>
			<td><?php echo $data->nama_penanggung;?> </td>
			<td><?php echo $data->nama_penanggung;?> </td>
			<td><?php echo $data->nama_penanggung;?> </td>
			<td><?php if (empty($data->nama_penanggung)){ ?>
					  <input type="text"  class="form-control" disabled="disabled">
					  <?php
					  }
                      else{ ?>
					<input type="text"  class="form-control" id="<?php $data->id_input?>">
					  <?php
                      }
					  ?>
			</td>
            <?php ?> 
			<td><a class="btn btn-sm btn-primary" href="#modalUploadBilling" data-toggle="modal"><i class="far fa-edit" ></i> upload billing </a><br>
			<a class="btn btn-sm btn-primary" href=""><i class="far fa-edit"></i> cetak surat tugas</a><br>
			<a class="btn btn-sm btn-primary" href=""><i class="far fa-edit"></i> masukkan NTPN</a></td>
            </tr>
			<?php } ?>
            </tbody>
          </table>
    </div>
    <!-- Large modal -->

	



</div>
<div class="modal fade" id="modalUploadBilling" role="dialog">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
			<form role="form" action="upload_billing/upload_file" method="post" class="form-group" enctype="multipart/form-data">
				<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Tutup"><span aria-hidden="true">&times;</span></button>
				<h4 class="modal-title">Upload Billing</h4>
				</div>
			<div class="modal-body">
            <label>Billing : </label><br>
			<input type="file" name="billing" class="form-control" placeholder="Browse" required autofocus><br>
			</div>
			<div class="modal-footer">
			<button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
			<button class="btn btn-primary" type="submit"> Upload </button>
			</div>
		</div>
		</form>
	</div>
<style>
/* Style The Dropdown Button */

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
.card{
	background-color: #ffffff;
}
#add__new__list{
    top: -38px;
    right: 0px;
}

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