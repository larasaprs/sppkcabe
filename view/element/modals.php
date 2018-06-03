<!-- modal sign out -->
<div class="modal fade" id="modal-sign-out">
    <div class="modal-dialog">
        <div class="modal-content">
            <form action="logout.php">
                <div class="modal-header">
                    <h4 class="modal-title">Sign Out?</h4>
                </div>
                <div class="modal-body">
                    <p>Yakin Ingin Sign Out?</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Batal</button>
                    <button type="submit" class="btn btn-primary">Ya</button>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- akhir modal sign out -->

<!-- modal input toko -->
<div class="modal fade" id="modal-input-faktor">
    <div class="modal-dialog">
        <div class="modal-content">
            <form method="get">
                <input type="hidden" name="controller" value="faktor">
                <input type="hidden" name="action" value="tambahFaktor">
                <div class="modal-header">
                    <h4 class="modal-title">Faktor</h4>
                </div>
               
                    <div class="form-group">
                        <label for="faktor">Faktor </label>
                        <input type="text" name="faktor" class="form-control" placeholder="Faktor...."
                               id="matpel">
                    </div>
                      
                     <div class="form-group">
                        <label for="harga">Level I </label>
                        <input type="number" name="level_1" class="form-control" 
                               id="level_1">
                    </div>
                     <div class="form-group">
                        <label for="harga">Level II </label>
                        <input type="number" name="level_2" class="form-control" 
                               id="level_2">
                    </div>
                     <div class="form-group">
                        <label for="jadwal">Level III </label>
                        <input type="number" name="level_3" class="form-control" 
                               id="level_3">
                    </div>
                    
                </div>
                <div class="modal-footer">
                    <div class="btn-group">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

<div class="modal fade" id="modal-input-petani">
    <div class="modal-dialog">
        <div class="modal-content">
            <form method="get">
                <input type="hidden" name="controller" value="home">
                <input type="hidden" name="action" value="tambahPetani">
                <div class="modal-header">
                    <h4 class="modal-title">DATA PETANI </h4>
                </div>
               
                    <div class="form-group">
                        <label for="faktor">Nama </label>
                        <input type="text" name="nama" class="form-control" 
                               id="nama">
                    </div>
                      
                     <div class="form-group">
                        <label for="harga">Username </label>
                        <input type="text" name="username" class="form-control" 
                               id="level_1">
                    </div>
                     <div class="form-group">
                        <label for="harga"> Password </label>
                        <input type="text" name="password" class="form-control" 
                               id="level_2">
                    </div>
                     <div class="form-group">
                        <label for="harga"> NO HP </label>
                        <input type="text" name="nohp" class="form-control" 
                               id="level_2">
                    </div>
                    
                </div>
                <div class="modal-footer">
                    <div class="btn-group">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<div class="modal fade" id="modal-input-hasilPercobaan">
    <div class="modal-dialog">
        <div class="modal-content">
            <form method="get">
                <input type="hidden" name="controller" value="faktor">
                <input type="hidden" name="action" value="tambahFaktor">
                <div class="modal-header">
                    <h4 class="modal-title">Faktor</h4>
                </div>
                     <div class="form-group">
                        <label for="harga">HASIL 1 </label>
                        <input type="number" name="hasil_1" class="form-control" 
                               id="level_1">
                    </div>
                     <div class="form-group">
                        <label for="harga">HASIL 2 </label>
                        <input type="number" name="hasil_2" class="form-control" 
                               id="level_2">
                    </div>
                     <div class="form-group">
                        <label for="jadwal">Hasil 3 </label>
                        <input type="number" name="hasil_3" class="form-control" 
                               id="level_3">
                    </div>

                </div>
                <div class="modal-footer">
                    <div class="btn-group">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<div class="modal fade" id="modal-input-hasilPupuk">
    <div class="modal-dialog">
        <div class="modal-content">
            <form method="get">
                <input type="hidden" name="controller" value="hasilpupuk">
                <input type="hidden" name="action" value="tambahPupuk">
                <div class="modal-header">
                    <h4 class="modal-title">HASIL PUPUK</h4>
                </div>
                     <div class="form-group">
                        <label for="harga">KOTORAN KELINCI </label>
                        <input type="number" name="kotoran" class="form-control" 
                               id="kotoran">
                    </div>
                     <div class="form-group">
                        <label for="harga">BEKATUL </label>
                        <input type="number" name="bekatul" class="form-control" 
                               id="bekatul">
                    </div>
                     <div class="form-group">
                        <label for="jadwal">SEKAM </label>
                        <input type="number" name="sekam" class="form-control" 
                               id="sekam">
                    </div>
                      <div class="form-group">
                        <label for="jadwal">PROBIOTIK </label>
                        <input type="number" name="probiotik" class="form-control" 
                               id="probiotik">
                    </div>
                    <div class="form-group">
                        <label for="jadwal">HASIL </label>
                        <input type="number" name="hasil" class="form-control" 
                               id="hasil">
                    </div>
                   
                </div>
                <div class="modal-footer">
                    <div class="btn-group">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- modal update produk -->

<!-- modal tambah produk -->

<!-- modal detail toko -->



<!-- modal ubah toko -->


</section>
</div>