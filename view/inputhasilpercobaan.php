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
      <?php foreach($posts as $post) { ?>
            <form method="get">
          
                <input type="hidden" name="controller" value="faktor">
                <input type="hidden" name="action" value="ubahHasilPercobaan">
                <input type="hidden" name="id" value="<?php echo $post['id_percobaan'];?>">
                <div class="modal-header">
             
                    <h4 class="modal-title">Faktor</h4>
                </div>

                
                     <div class="form-group">
                        <label for="harga">HASIL 1 </label>
                            <p  id="errornya"> yaa </p>
                        <input type="number" name="hasil_1" class="form-control" 
                               id="level_1" value="<?php echo $post['hasil_1']; ?>">
                    </div>
                    
                
                     <div class="form-group">
                        <label for="harga">HASIL 2 </label>
                        <input type="number" name="hasil_2" class="form-control" 
                               id="level_2" value="<?php echo $post['hasil_2']; ?>">
                    </div>
                     <div class="form-group">
                        <label for="jadwal">Hasil 3 </label>
                        <input type="number" name="hasil_3" class="form-control" 
                               id="level_3" value="<?php echo $post['hasil_3']; ?>">
                    </div>
                   
                    
                </div>
                <div class="modal-footer">

                    <div class="btn-group">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </div>
                </div>
            </form>
            <?php } ?>
       
</div>
</div>
</section>