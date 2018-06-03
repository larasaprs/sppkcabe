
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
   
   <a href="#" data-toggle="modal" data-target="#modal-input-hasilPupuk">
        <button type="button" class="btn btn-info">Tambah Data</button>
    </a>
   
     <table class='table table-bordered table-hover'>
     <thead>

         <tr>
         <td> Percobaan ke- </td>
              <td>KOTORAN KELINCI </td>
             <td> BEKATUL </td>
             <td>SEKAM </td>
             <td>PROBIOTIK</td>
             <td> HASIL 1 </td>
           
         </tr>
     </thead>
     <tbody>
     <?php $i=1;
     foreach($posts as $post) { ?>
     <tr> 

   <td> <?php echo $i++; ?> </td>
   <td> <?php echo $post['kotoran'];?></td>
   <td> <?php echo $post['bekatul']; ?></td>
   <td> <?php echo $post['sekam']; ?></td>
   <td> <?php echo $post['probiotik'];?></td>
   <td> <?php echo $post['hasil'];?></td>
 
      <td>
               <a href="?controller=faktor&action=formtambahhasilpercobaan&id=<?php echo $post['id_percobaan'] ?>"><span class="glyphicon glyphicon-edit"></span></a>
              
             </td>
           </tr>
           <?php } ?>
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
