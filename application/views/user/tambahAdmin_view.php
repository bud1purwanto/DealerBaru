<div id="wrapper">
    <div id="page-wrapper">
        <div class="container-fluid">
        <div class="row">
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Tambah Mobil
                        </h1><?php echo form_open_multipart('user/createMobil'); ?>
                                <?php if (validation_errors()) {
                                   ?><div class="alert alert-danger">
                                    <strong><?php echo validation_errors(); ?></strong></div><?php } 
                                    else if ($this->session->flashdata('eror')) {
                                        ?><div class="alert alert-danger">
                                    <strong><?php echo $this->session->flashdata('eror'); ?></strong></div><?php }
                                    ?>
                        <ol class="breadcrumb">

                            

                        </ol>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-6">               
                    

                            
                            <div style="margin-top: 0px" class="form-group">
                                <label>Nama Merek</label>
                                <input class="form-control" id="merek_produk" type="text" name="merek_produk" value="<?php echo set_value('merek_produk'); ?>" placeholder="Nama Merek">
                            </div>

                            <div style="margin-top: 0px" class="form-group">
                                <label>Jenis Produk</label>
                                <input class="form-control" id="jenis_produk" type="text" name="jenis_produk" value="<?php echo set_value('jenis_produk'); ?>" placeholder="Jenis Produk">
                            </div>

                            <div style="margin-top: 0px" class="form-group">
                                <label>Jumlah Stok</label>
                                <input class="form-control" id="jumlah_stok" type="text" name="jumlah_stok" value="<?php echo set_value('jumlah_stok'); ?>" placeholder="Jumlahh Stok">
                            </div>
                            
                            <div style="margin-top: 0px" class="form-group">
                                <label>Harga</label>
                                <input class="form-control" id="harga" type="text" name="harga" value="<?php echo set_value('jumlah_stok'); ?>" placeholder="harga">
                            </div>

                            <div style="margin-top: 0px" class="form-group">
                                <label>Keterangan</label>
                                <input class="form-control" id="keterangan" type="text" name="keterangan" value="<?php echo set_value('keterangan'); ?>" placeholder="keterangan">
                            </div>
                            
                            
                             <div class="form-group">
                                <button type="submit" class="btn btn-success"><i class="glyphicon glyphicon-adjust"></i>  Tambah Mobil</button>
                                
                            </div>
                    </div>
                    <div class="col-lg-6" style="margin-top: -70px">
        
                            
                        
                          <?php echo form_close(); ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
</div>