
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
        <td> PERCOBAAN KE- </td>
             <td> HASIL 1 </td>
            <td> HASIL 2 </td>
            <td> HASIL 3</td>
            <td> Y </td>
            <td> S/N RATIO </td>
         </tr>
     </thead>
     <tbody>
     <?php $i=1;
   foreach ($posts as $post) {
 ?>
     
     <tr> 

   <td> <?php echo $i++; ?> </td>
   <td> <?php echo $post['hasil_1']; ?></td>
   <td> <?php echo $post['hasil_2']; ?></td>
   <td> <?php echo $post['hasil_3'] ?> </td>
    <td> <?php echo $post['hasil'];?></td>
    <td> <?php echo $post['SN']; ?></td>
    </tr>
           <?php  } ?>
            </tbody>

     </table>

     <div class='box-body'>
     SN TERHADAP LEVEL DAN FAKTOR
      <table class='table table-bordered table-hover'>
         <thead>
            <tr>
            <td> </td>
                <td> KOTORAN </td>
                <td> BEKATUL </td>
                <td> SEKAM </td>
                <td> PROBIOTIK EM4 </td>

            </tr>

         </thead>
         <tbody>
             <tr>
                 <td> LEVEL I</td>
                 <td> <?php echo $jumlaha1;?></td>
                 <td> <?php echo $jumlahb1; ?></td>
                 <td> <?php echo $jumlahc1; ?></td>
                 <td> <?php echo $jumlahd1; ?></td>
             </tr>
             <tr>
                 <td> LEVEL II</td>
                  <td> <?php echo $jumlaha2;?></td>
                 <td> <?php echo $jumlahb2; ?></td>
                 <td> <?php echo $jumlahc2; ?></td>
                 <td> <?php echo $jumlahd2; ?></td>
             </tr>
             <tr>
                 <td> LEVEL III</td>
                  <td> <?php echo $jumlaha3;?></td>
                 <td> <?php echo $jumlahb3; ?></td>
                 <td> <?php echo $jumlahc3; ?></td>
                 <td> <?php echo $jumlahd3; ?></td>
             </tr>
             <tr>
                 <td> DELTA </td>
                 <td><?php echo $deltaA; ?></td>
                 <td> <?php echo $deltaB; ?></td>
                 <td> <?php echo $deltaC; ?></td>
                 <td> <?php echo $deltaD; ?></td>
             </tr>
         </tbody>
     </table>
     </div>
         OPTIMUM 
         <br>
         <?php echo $optKotor; ?>
         <br>
         <?php echo $optBekatul; ?>
         <br>
         <?php echo $optSekam; ?>
         <br>
         <?php  echo $optProbiotik; ?>
     </div>
         

     </div>
        </section>
        <!-- akhir konten -->
        <?php require_once('element/modals.php'); ?>
</div>
<?php require_once('element/footer.php'); ?>

</body>
</html>
    