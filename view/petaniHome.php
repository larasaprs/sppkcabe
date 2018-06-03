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
   
            <form method="get">
                <input type="hidden" name="controller" value="perhitungan">
                <input type="hidden" name="action" value="hitungSN">
                <div class="modal-header">
                    <h4 class="modal-title"> PREDIKSI HASIL ANDA </h4>
                </div>
                     <div class="form-group">
                        <label for="harga">Kotoran Kelinci (gram) </label>
                      <select name="kotoran" id="kotoran" class="form-control"
                                data-placeholder="Pilih Kotoran Kelinci....">
                                <?php foreach ($kotoran as $kotor) {?>
                                <option value="<?php echo $kotor['level_1']; ?>"> 3000-3999 </option>
                                  <option value="<?php echo $kotor['level_2']; ?>"> 4000-4999 </option>
                                    <option value="<?php echo $kotor['level_3']; ?>"> 5000-5999 </option>
                             <?php } ?>
                               
                        </select>
                    </div>

                     <div class="form-group">
                        <label for="harga">Bekatul (gram) </label>
                      <select name="bekatul" id="bekatul" class="form-control"
                                data-placeholder="Pilih Bekatul....">
                                <?php foreach ($bekatul as $bktl) {?>
                                <option value="<?php echo $bktl['level_1']; ?>"> 150-199 </option>
                                  <option value="<?php echo $bktl['level_2']; ?>"> 200-249 </option>
                                    <option value="<?php echo $bktl['level_3']; ?>"> 250-299 </option>
                             <?php } ?>
                               
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="harga">Sekam (gram) </label>
                      <select name="sekam" id="sekam" class="form-control"
                                data-placeholder="Pilih Sekam....">
                                <?php foreach ($sekam as $sk) {?>
                                <option value="<?php echo $sk['level_1']; ?>"> 300-399</option>
                                  <option value="<?php echo $sk['level_2']; ?>"> 400-499 </option>
                                    <option value="<?php echo $sk['level_3']; ?>"> 500-599 </option>
                             <?php } ?>
                               
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="harga">Probiotik EM4 (ml) </label>
                      <select name="probiotik" id="probiotik" class="form-control"
                                data-placeholder="Pilih Probiotik....">
                                <?php foreach ($probiotik as $prb) {?>
                                <option value="<?php echo $prb['level_1']; ?>"> 10-19 </option>
                                  <option value="<?php echo $prb['level_2']; ?>"> 20-29 </option>
                                    <option value="<?php echo $prb['level_3']; ?>"> 30-39</option>
                             <?php } ?>
                               
                        </select>
                    </div>
                   
                </div>
                <div class="modal-footer">
                    <div class="btn-group">
                        
                        <button type="submit" class="btn btn-primary">CEK HASIL </button>
                    </div>
                </div>
            </form>
       
</div>
</div>
</section>