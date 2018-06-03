
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
   <a href="#" data-toggle="modal" data-target="#modal-input-petani">
        <button type="button" class="btn btn-info">Tambah Data</button>
    </a>
     <table class='table table-bordered table-hover'>
     <thead>

         <tr>
         <td> NO </td>
             <td> Nama </td>
              <td> USERNAME </td>
             <td> PASSWORD </td>
             <td>NO HP </td>
           
         </tr>
     </thead>
     <tbody>
     <?php
      $i=0;
      foreach ($posts as $post) { 
   
  
      ?>
         <tr>
         <td>
             <?php
             echo $i+=1;
             ?>
         </td>
             <td> <?php echo  $post['nama']; ?> </td>
             <td> <?php echo $post['username'];?>  </td>
             <td> <?php echo $post['password']; ?></td>
             <td><?php echo $post['nohp']; ?></td>

            
            
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
