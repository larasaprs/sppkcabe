
<!DOCTYPE html>
<html lang="en">
<head>
    <?php require_once('element/head.php'); ?>
    <title>Dashboard - Beranda</title>
</head>
<body class="hold-transition skin-blue-light sidebar-mini">
<?php require_once('element/header.php') ?>
<?php require_once('element/sidebaradmin.php') ?>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      
    </section>
    <section class="content container-fluid">
        <!-- awal konten -->
     <div class='box box-default'>
     <div class='box-body'>
    <a href="#" data-toggle="modal" data-target="#modal-input-faktor">
        <button type="button" class="btn btn-info">Tambah Data</button>
    </a>
   
     <table class='table table-bordered table-hover'>
     <thead>

         <tr>
         <td> ID Faktor  </td>
             <td> Faktor  </td>
              <td>Level I </td>
             <td> Level II </td>
             <td>Level III </td>
             <td>Action </td>
         </tr>
     </thead>
     <tbody>
     <?php
      $i=0;
     
      for ($post=0;$post<$posts;$post++) { 
   
  
      ?>
         <tr>
        <td>
            Ya
        </td>
         </tr>
      <?php  } ?>
     </tbody>
     </table>
     </div>
         
     </div>
        </section>
        <!-- akhir konten -->
        <?php require_once('element/modals.php'); ?>
</div>
<?php require_once('element/footer.php'); ?>

</body>
</html>
