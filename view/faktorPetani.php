
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
        <!-- awal konten -->
     <div class='box box-default'>
     <div class='box-body'>
   
     <table class='table table-bordered table-hover'>
     <thead>

         <tr>
         <td> ID Faktor  </td>
             <td> Faktor  </td>
              <td>Level I </td>
             <td> Level II </td>
             <td>Level III </td>
           
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
             <td>

             <?php

              echo  $post['faktor'];
                ?>
             </td>
            
             <td>
                 <?php
                 echo $post['level_1'];
                 ?>
             </td>
             <td>
             <?php
             echo $post['level_2'];
             ?>
             </td>
             <td>
                 <?php echo $post['level_3'] ?>
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


</body>
</html>
