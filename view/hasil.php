
<!DOCTYPE html>
<html lang="en">
<head>
    <?php require_once('element/head.php'); ?>
    <title>Dashboard - Beranda</title>
</head>
<body class="hold-transition skin-blue-light sidebar-mini">
<?php require_once('element/header.php') ?>
<?php require_once('element/sidebarpetani.php') ?>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      
    </section>
    <section class="content container-fluid">
   
    	<div class='box box-default'>
     <div class='box-body'>
     HASIL PREDIKSI ANDA :
<?php foreach ($posts as $post) { ?>
  Kotoran Kelinci : <?php $post['kotoran']; ?>
<?php } ?>
    </div>
    </div>
   
     
    
     
        </section>

        <!-- akhir konten -->
        <?php require_once('element/modals.php'); ?>
</div>
<?php require_once('element/footer.php'); ?>

</body>
</html>
