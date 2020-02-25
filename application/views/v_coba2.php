<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="ilmu-detil.blogspot.com">
    <title>Menampilkan Dokumen PDF</title>
    <!-- Bagian css -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/ilmudetil.css">
    <!--<link rel='stylesheet' href='assets/css/jquery-ui-custom.css'>-->
    
    <!-- Akhir dari Bagian css -->
    <!-- Bagian js -->
    <script src='assets/js/jquery-1.10.1.min.js'></script>       
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- akhir dari Bagian js -->
    
</head>
<body>
<nav class="navbar navbar-default navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="index.html">
            Pusat Ilmu Secara Detil</a>
        </div>
        <div class="navbar-collapse collapse">
            <ul class="nav navbar-nav navbar-left">
                <li class="clr1 active"><a href="index.html">Home</a></li>
                <li class="clr2"><a href="">Programming</a></li>
                <li class="clr3"><a href="">English</a></li>
            </ul>
        </div>
    </div>
</nav>
</br></br></br>
<!--- Bagian Judul-->   
<div class="container"> 
    <h2>Contoh Mengload Dokumen PDF</h2> 

    <div class="row">
        
        <?php
            foreach($dataBilling as $data){ ?>
        
        <div class='col-md-12'>
            <div class='panel panel-primary'>
                <div class='panel-heading'>
                    <div class='pull-left'>Undang-Undang Dasar Negara Republik Indonesia 1945</div>
                    <br>
                </div>
                <div class='panel-body'>
                
                    <div style='border-bottom:1px solid #000'><?php echo $data->id_file; ?></div>
                    <div><?php echo $data->nama_file; ?></div><br>
                    <div>
                        <embed src="../assets/file/<?php echo $data->link_file; ?>.pdf" type='application/pdf' width='100%' height='700px'/>
                    </div>
                </div>
            </div>
        </div>  

		 <?php } ?>
    </div>
</div> 
</body>
</html>