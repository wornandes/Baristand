
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
                            <ul class="res">
								<li><a href="/Siamang/homeManagerOperational" class="active">Home Manager</a></li>
								<li><a href="/Siamang/daftar_permohonan_manager" class="active">Daftar Permohonan</a></li>
								<li><a href="/Siamang/daftar_jadwal" class="active">Daftar Jadwal</a></li>
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
	<div class="page-wrapper bg-gra-03 p-t-45 p-b-50">
        <div class="wrapper wrapper--w790">
            <div class="card card-5">
                <div class="card-heading">
                    <h2 class="title">Tambah Jadwal dan Tim</h2>
                </div>
                <div class="card-body">
                    <form action="tambah_tim/tambah_tim" method="POST">
                        <div class="form-row m-b-55">
                            <div class="name">Jadwal Audit</div>
                            <div class="value">
                                <div class="row row-space">
                                    <div class="col-2">
                                        <div class="input-group-desc">
                                            <input class="input--style-5" type="date" name="tgl_mulai">
                                            <label class="label--desc">tanggal mulai</label>
                                        </div>
                                    </div>
                                    <div class="col-2">
                                        <div class="input-group-desc">
                                            <input class="input--style-5" type="date" name="tgl_selesai">
                                            <label class="label--desc">tanggal selesai</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">Lead Auditor</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-5" type="text" name="lead_auditor">
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">Auditor</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-5" type="text" name="auditor">
                                </div>
                            </div>
                        </div>
						<div class="form-row">
                            <div class="name">PPC</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-5" type="text" name="ppc">
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">Permohonan</div>
                            <div class="value">
								<div class="row row-refine">
                                    <div class="col-3">
										<div class="input-group">
											<label class="label">Jumlah</label>
											<div class="rs-select2 js-select-simple select--no-search">
												<select class="form-control" name="dropdown" id="dropdown1" >
													<option disabled="disabled" selected="selected"></option>
													<option value="1000">1-5</option >
													<option value="2000">6-10</option >
													<option value="3000">>10</option >
												</select>
												<div class="select-dropdown"></div>
											</div>	
										</div>
								    </div>
								    <div class="col-9">
                                        <div class="input-group-desc">
                                        <input class="input--style-5" type="text" name="biaya_permohonan" id="biaya_permohonan">
                                        <label class="label--desc">Biaya Permohonan</label>
										</div>
									</div>
								</div>
                            </div>
                        </div>
						<div class="form-row">
                            <div class="name">Audit Administrasi dan Dokumen Mutu</div>
                            <div class="value">
								<div class="row row-refine">
                                    <div class="col-3">
										<div class="input-group">
											<label class="label">Jumlah</label>
											<div class="rs-select2 js-select-simple select--no-search">
												<select class="form-control" name="dropdown" id="dropdown2" >
													<option disabled="disabled" selected="selected"></option>
													<option value="1000">1-5</option >
													<option value="2000">6-10</option >
													<option value="3000">>10</option >
												</select>
												<div class="select-dropdown"></div>
											</div>	
										</div>
								    </div>
								    <div class="col-9">
                                        <div class="input-group-desc">
                                        <input class="input--style-5" type="text" name="biaya_audit_administrasi" id="biaya_audit_administrasi">
                                        <label class="label--desc">Biaya Audit Administrasi dan Dokumen Mutu</label>
										</div>
									</div>
								</div>
                            </div>
                        </div>
						<div class="form-row">
                            <div class="name">Audit Lapangan</div>
                            <div class="value">
								<div class="row row-refine">
                                    <div class="col-3">
										<div class="input-group">
											<label class="label">Jumlah</label>
											<div class="rs-select2 js-select-simple select--no-search">
												<select class="form-control" name="dropdown" id="dropdown3" >
													<option disabled="disabled" selected="selected"></option>
													<option value="1000">1-5</option >
													<option value="2000">6-10</option >
													<option value="3000">>10</option >
												</select>
												<div class="select-dropdown"></div>
											</div>	
										</div>
								    </div>
								    <div class="col-9">
                                        <div class="input-group-desc">
                                        <input class="input--style-5" type="text" name="biaya_audit_lapangan" id="biaya_audit_lapangan">
                                        <label class="label--desc">Biaya Audit Lapangan</label>
										</div>
									</div>
								</div>
                            </div>
                        </div>
						<div class="form-row">
                            <div class="name">Jasa Proses Sertifikasi</div>
                            <div class="value">
								<div class="row row-refine">
                                    <div class="col-3">
										<div class="input-group">
											<label class="label">Jumlah</label>
											<div class="rs-select2 js-select-simple select--no-search">
												<select class="form-control" name="dropdown" id="dropdown4" >
													<option disabled="disabled" selected="selected"></option>
													<option value="1000">1-5</option >
													<option value="2000">6-10</option >
													<option value="3000">>10</option >
												</select>
												<div class="select-dropdown"></div>
											</div>	
										</div>
								    </div>
								    <div class="col-9">
                                        <div class="input-group-desc">
                                        <input class="input--style-5" type="text" name="biaya_jasa_proses" id="biaya_jasa_proses">
                                        <label class="label--desc">Biaya Jasa Proses Sertifikasi</label>
										</div>
									</div>
								</div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">Total Biaya</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-5" type="text" name="total_biaya">
                                </div>
                            </div>
                        </div>
						<input type="hidden" name="id_input" id="id_input" value="<?php echo $id_input;?>">
                        <div>
                            <button class="btn btn--radius-2 btn--red" type="submit">Simpan</button>
                        </div>
                    </form>
                </div>
            </div>
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
<script>

$(document).ready(function(){
    $('[id="dropdown1"]').on('change', function() {
        $('[name="biaya_permohonan"]').val($(this).val());
    });
});

$(document).ready(function(){
    $('[id="dropdown2"]').on('change', function() {
        $('[name="biaya_audit_administrasi"]').val($(this).val());
    });
});

$(document).ready(function(){
    $('[id="dropdown3"]').on('change', function() {
        $('[name="biaya_audit_lapangan"]').val($(this).val());
    });
});

$(document).ready(function(){
    $('[id="dropdown4"]').on('change', function() {
        $('[name="biaya_jasa_proses"]').val($(this).val());
    });
});

$(document).ready(function(){
    $('[id="dropdown4"]').on('change', function() {
        $('[name="total_biaya"]').val(parseInt($('[name="biaya_permohonan"]').val())+parseInt($('[name="biaya_audit_administrasi"]').val())+
		parseInt($('[name="biaya_audit_lapangan"]').val())+parseInt($('[name="biaya_jasa_proses"]').val()));
    });
});




</script>

<script src="/Siamang/assets/js/jquery.min.js"></script>
<script src="/Siamang/assets/js/data.js"></script>
<script src="/Siamang/assets/js/bootstrap.min.js"></script>

</body>
</html>