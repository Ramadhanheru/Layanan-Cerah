
            <div class="main-content-inner">
                <div class="row">
                    <div class="col-12 mt-5">
                                <div class="row">
                                    <div class="col-12">
                                        <div><?= $this->session->flashdata('message');?></div>    
                                    </div>
                                </div>
                    </div>
                    <!-- Primary table start -->
                    <div class="col-12 mt-5">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="header-title">Table Kantor Cabang </h4>
                                <a class="btn btn-primary mb-3" href="" data-toggle="modal" data-target="#exampleModalLong2"><span class="ti-plus" style="margin-right: 10px;"></span>Add Kantor Cabang</a>
                                <a class="btn btn-danger mb-3" style="margin-left: 15px;" href="<?= base_url('welcome/pdf_kantor_cabang') ?>" target="_blank"><span class="ti-files" style="margin-right: 10px;"></span>Report Pdf</a>
                                <a class="btn btn-success mb-3" href="<?= base_url('welcome/excel_kantor_cabang') ?>" target="_blank"><span class="ti-write" style="margin-right: 10px;"></span>Report Excel</a>
                                <div class="data-tables datatable-primary">
                                    <table id="dataTable2" class="text-center">
                                        <thead class="text-capitalize">
                                            <tr>
                                                <th>No</th>
                                                <th>Username</th>
                                                <th>Nama</th>
                                                <th>Unit</th>
                                                <th>Kantor</th>
                                                <th>Alamat Kantor</th>
                                                <th>Foto</th>
                                                <th>Role</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                             $no=1;
                                             foreach($query->result() as $q) { ?>
                                            <tr>
                                                <td><?= $no; ?></td>
                                                <td><?= $q->username; ?></td>
                                                <td><?= $q->nama; ?></td>
                                                <td><?= $q->unit; ?></td>
                                                <td><?= $q->kantor; ?></td>
                                                <td><?= $q->alamat; ?></td>
                                                <td><img src="<?= base_url('uploadfile/').$q->foto; ?>" width="100"></td>
                                                <td><?php if($q->role == '2'){ ?> 
                                                    <a class="btn btn-success" href="<?= base_url('welcome/role_tidak_aktif/').$q->id_pengguna; ?>">Aktif</a><?php }else{ ?>
                                                    <a class="btn btn-danger" href="<?= base_url('welcome/role_aktif/').$q->id_pengguna; ?>">Tidak Aktif</a> <?php } ?>
                                                    </td>
                                                <td><a href="" data-toggle="modal" data-target="#exampleModalLong-<?= $q->id_pengguna ?>"><span class="ti-pencil-alt" style="margin-right: 5px;"></span>Edit</a> || <a href="<?= base_url('welcome/hapus_kantor_cabang/').$q->id_pengguna; ?>" onclick="return confirm('Are you sure want to delete this?');"><span class="ti-trash" style="margin-right: 5px;"></span>Hapus</a></td>
                                            </tr>

                                            <!-- Modal -->
                                <div class="modal fade" id="exampleModalLong-<?=$q->id_pengguna;?>">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title">Form Edit Kantor Cabang</h5>
                                                <button type="button" class="close" data-dismiss="modal"><span>&times;</span></button>
                                            </div>
                                            <form action="<?= base_url('welcome/edit_kantor_cabang/').$q->id_pengguna ?>" method="post" enctype="multipart/form-data">
                                            <div class="modal-body">
                                            
                                            <div class="form-group">
                                                <label class="col-form-label">Username :</label>
                                                <input type="hidden" class="form-control" id="id" name="id" value="<?=$q->id_pengguna;?>" > 
                                                <input type="text" class="form-control" id="username" name="username" value="<?= $q->username; ?>" readonly>
                                                <?= form_error('username','<small class="text-danger pl-3 ">','</small>');?>
                                            </div>

                                            <div class="form-group">
                                                <label class="col-form-label">Nama Pengguna :</label> 
                                                <input type="text" class="form-control" id="nama" name="nama" value="<?= $q->nama; ?>" >
                                                <?= form_error('nama','<small class="text-danger pl-3 ">','</small>');?>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-form-label">Unit Kerja :</label> 
                                                <input type="text" class="form-control" id="unit" name="unit" value="<?= $q->unit; ?>" >
                                                <?= form_error('unit','<small class="text-danger pl-3 ">','</small>');?>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-form-label">Kantor Cabang :</label> 
                                                <input type="text" class="form-control" id="kantor" name="kantor" value="<?= $q->kantor; ?>" >
                                                <?= form_error('kantor','<small class="text-danger pl-3 ">','</small>');?>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-form-label">Alamat Kantor Cabang :</label> 
                                                <input type="text" class="form-control" id="alamat" name="alamat" value="<?= $q->alamat; ?>" >
                                                <?= form_error('alamat','<small class="text-danger pl-3 ">','</small>');?>
                                            </div>
                                            
                                            <div id="foto">
                                            <img class="mb-3" src="<?= base_url('uploadfile/').$q->foto; ?>" width="100">
                                            <div class="input-group mb-3" id="foto">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text">Upload Foto</span>
                                                </div>
                                                <div class="custom-file">
                                                    <input type="file" class="custom-file-input" id="foto" name="foto">
                                                    <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
                                                </div>
                                            </div>
                                            </div>

                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                <button type="submit" class="btn btn-primary">Submit</button>
                                            </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>

                                            <?php $no++; } ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Primary table end -->
                     <!-- Modal -->
                                <div class="modal fade" id="exampleModalLong2">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title">Form Add Kantor Cabang</h5>
                                                <button type="button" class="close" data-dismiss="modal"><span>&times;</span></button>
                                            </div>
                                            <form action="<?= base_url('welcome/tambah_kantor_cabang') ?>" method="post" enctype="multipart/form-data">
                                            <div class="modal-body">
                                            
                                            
                                            <div class="form-group">
                                                <label class="col-form-label">Username :</label> 
                                                <input type="text" class="form-control" id="username" name="username" >
                                                <?= form_error('username','<small class="text-danger pl-3 ">','</small>');?>
                                            </div>

                                            <div class="form-group">
                                                <label for="exampleInputPassword1">Password</label>
                                                <input type="password" class="form-control" id="password" name="password" >
                                                <?= form_error('password','<small class="text-danger pl-3 ">','</small>');?>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-form-label">Nama Pengguna :</label> 
                                                <input type="text" class="form-control" id="nama" name="nama" >
                                                <?= form_error('nama','<small class="text-danger pl-3 ">','</small>');?>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-form-label">Unit Kerja :</label> 
                                                <input type="text" class="form-control" id="unit" name="unit" >
                                                <?= form_error('unit','<small class="text-danger pl-3 ">','</small>');?>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-form-label">Kantor Cabang :</label> 
                                                <input type="text" class="form-control" id="kantor" name="kantor" >
                                                <?= form_error('kantor','<small class="text-danger pl-3 ">','</small>');?>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-form-label">Alamat Kantor Cabang :</label> 
                                                <input type="text" class="form-control" id="alamat" name="alamat" >
                                                <?= form_error('alamat','<small class="text-danger pl-3 ">','</small>');?>
                                            </div>
                                            
                                            <div id="foto">
                                            <div class="input-group mb-3" id="foto">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text">Upload Foto</span>
                                                </div>
                                                <div class="custom-file">
                                                    <input type="file" class="custom-file-input" id="foto" name="foto">
                                                    <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
                                                </div>
                                            </div>
                                            <?= form_error('foto','<small class="text-danger pl-3 ">','</small>');?>
                                            </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                <button type="submit" class="btn btn-primary">Submit</button>
                                            </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                    
                </div>
            </div>
        </div>
        <!-- main content area end -->
       