<div id="wrapper">
    <div id="page-wrapper">
        <div class="container-fluid">
        <div class="row">
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            <span class="label label-default">Daftar Mobil</span> <a class="btn btn-success" href="<?php echo site_url('user/createMobil') ?>" role="button"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Tambah</a>
                        </h1>
                        <ol class="breadcrumb">

                         
                        </ol>
                    </div>
                </div>
                

               <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                        <div class="table-responsive">
                        <?php if ($this->session->flashdata('sudah_input')) {
                                   ?><div class="alert alert-success">
                                    <strong><?php echo $this->session->flashdata('sudah_input');?></strong></div>
                                <?php 

                               } else if ($this->session->flashdata('terhapus')) {
                                   ?><div class="alert alert-success">
                                    <strong><?php echo $this->session->flashdata('terhapus');?></strong></div>
                                <?php 
                               } ?>

                            <table class="table table-bordered table-hover" id="examplee">
                                <thead>
                                    <tr>
                                        <th>Merek Produk</th>
                                        <th>Jenis Produk</th>
                                        <th>Jumlah Stok</th>
                                        <th>Harga</th>
                                        <th>Keterangan</th>
                                        <th>Aksi</th>
                                        <th>Edit</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php foreach ($mobil_list as $key) { ?>
                                    <tr>
                                        <td><?php echo $key->merek_produk ?></td>
                                        <td><?php echo $key->jenis_produk ?></td>
                                        <td><?php echo $key->jumlah_stok ?></td>
                                        <td><?php echo $key->harga ?></td> 
                                        <td><?php echo $key->keterangan ?></td> 
                                        <td><?php echo $key->aksi ?></td> 
                                        <td><li><a href="<?php echo site_url('user/editMobil/').$key->id_produk ?>"><i class="fa fa-pencil fa-fw"></i> Edit</a></li><li><a href="<?php echo site_url('user/deleteMobil/').$key->id_produk ?>"><i class="fa fa-trash-o fa-fw"></i> Delete</a></li></td>

                                <?php } ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
            </div>
        </div>
    </div>
</div>