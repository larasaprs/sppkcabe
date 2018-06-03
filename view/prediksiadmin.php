
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
   
     <table class='table table-bordered table-hover'>
     <thead>

         <tr>
         <td> NO </td>
         <td> PETANI </td>
             <td> KOTORAN KELINCI (gram) </td>
             <td> HASIL </td>
              <td>BEKATUL (gram) </td>
             <td> HASIL </td>
             <td> SEKAM (gram) </td>
             <td>  HASIL </td>
             <td> PROBIOTIK EM4 (ml) </td>
             <td> HASIL </td>
           
         </tr>
     </thead>
     <tbody>
     <?php
    $i=1;
      foreach ($posts as $post) { 
     
  
      ?>
         <tr>
         <td> <?php echo $i++; ?></td>
         <td> <?php echo $post['nama']; ?></td>
         <td> <?php echo $post['kotoran']?></td>
         <td> <?php echo $post['hasil_kotoran'];?></td>
         <td> <?php echo $post['bekatul'];?></td>
         <td> <?php echo $post['hasil_bekatul'];?></td>
         <td> <?php echo $post['sekam']; ?></td>
         <td> <?php echo $post['hasil_sekam']?> </td>
         <td> <?php echo $post['probiotik'];?></td>
         <td> <?php echo $post['hasil_probiotik']; ?></td>
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


</body>
</html>
