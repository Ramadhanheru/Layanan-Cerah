
            <div class="main-content-inner">
                <div class="row">
                    <div class="col-12 mt-5">
                                <div class="row">
                                    <div class="col-12">
                                        <div><?= $this->session->flashdata('message');?></div>    
                                    </div>
                                </div>
                    </div>
                    <?php if($this->session->userdata('role') == 2){ ?>
                    <!-- Custom Content start -->
                    <div class="col-md-6 mt-5">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="header-title">Absensi</h4>
                                <div class="list-group">
                                    <?php if($query1['tanggal'] && $query1['id_pengguna'] && $query1['morning'] && $query1['afternoon']){ ?>
                                       <!--  1111 -->
                                        <a  href="#" class="list-group-item list-group-item-action flex-column align-items-start " >
                                        <div class="d-flex w-100 justify-content-between">
                                            <h5 class="mb-1">Form Morning Briefing</h5>
                                            <small>Today,&nbsp;<?= date('d-m-Y'); ?></small>
                                        </div>
                                        <p class="mb-1">Harap melakukan Absensi Morning Briefing</p>
                                        <small>Layanan Cerah by Bank Sumsel Babel.</small>
                                    </a>

                                    <a  href="#" class="list-group-item list-group-item-action flex-column align-items-start " >
                                        <div class="d-flex w-100 justify-content-between">
                                            <h5 class="mb-1">Form Afternoon Briefing</h5>
                                            <small class="text-muted">Today,&nbsp;<?= date('d-m-Y'); ?></small>
                                        </div>
                                        <p class="mb-1">Harap melakukan Absensi Afternoon Briefing</p>
                                        <small class="text-muted">Layanan Cerah by Bank Sumsel Babel.</small>
                                    </a>

                                         <?php }elseif ($query1['tanggal'] && $query1['id_pengguna'] && $query1['morning']=="Ya" && $query1['afternoon']=="") { ?>
                                            <!-- 222 -->
                                            <a  href="#" class="list-group-item list-group-item-action flex-column align-items-start " >
                                        <div class="d-flex w-100 justify-content-between">
                                            <h5 class="mb-1">Form Morning Briefing</h5>
                                            <small>Today,&nbsp;<?= date('d-m-Y'); ?></small>
                                        </div>
                                        <p class="mb-1">Harap melakukan Absensi Morning Briefing</p>
                                        <small>Layanan Cerah by Bank Sumsel Babel.</small>
                                    </a>

                                    <a  href="#" class="list-group-item list-group-item-action flex-column align-items-start " data-toggle="modal" data-target="#exampleModalLong2">
                                        <div class="d-flex w-100 justify-content-between">
                                            <h5 class="mb-1">Form Afternoon Briefing</h5>
                                            <small class="text-muted">Today,&nbsp;<?= date('d-m-Y'); ?></small>
                                        </div>
                                        <p class="mb-1">Harap melakukan Absensi Afternoon Briefing</p>
                                        <small class="text-muted">Layanan Cerah by Bank Sumsel Babel.</small>
                                    </a>

                                    <!-- Modal -->
                                <div class="modal fade" id="exampleModalLong2">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title">Afternoon Briefing</h5>
                                                <button type="button" class="close" data-dismiss="modal"><span>&times;</span></button>
                                            </div>
                                            <form action="<?= base_url('cabang/tambah_afternoon_briefing') ?>" method="post" enctype="multipart/form-data">
                                            <div class="modal-body">
                                            <div class="form-group">
                                                <input type="hidden" class="form-control" id="id_pengguna" name="id_pengguna" placeholder="masukan nama cabang.." value="<?= $query['id_pengguna'] ?>">
                                                <input type="hidden" class="form-control" id="id" name="id" placeholder="masukan nama cabang.." value="<?= $query['id'] ?>">
                                                <label for="exampleInputEmail1">Sudah melakukan briefing ?</label>
                                                <select name="afternoon" class="custom-select" onchange="yesnoCheck2(this);">
                                                <option selected="selected" value="Ya">Ya</option>
                                                <option value="Tidak">Tidak</option>
                                            </select>
                                            </div>
                                            <div class="form-group" id="tanggal">
                                                <label for="exampleInputPassword1">Tanggal</label>
                                                <input type="date" class="form-control" id="tanggal" name="tanggal" value="<?= $query['tanggal'] ?>" readonly>
                                                <?= form_error('tanggal','<small class="text-danger pl-3 ">','</small>');?>
                                            </div>
                                            <script type="text/javascript">
                                                function yesnoCheck2(that) {
                                                    if (that.value == "Tidak") {
                                                        document.getElementById("ifYes1").style.display = "block";
                                                         document.getElementById("tanggal").style.display = "block";
                                                          document.getElementById("waktu").style.display = "none";
                                                           document.getElementById("foto").style.display = "none";
                                                    } else {
                                                        document.getElementById("ifYes1").style.display = "none";
                                                         document.getElementById("tanggal").style.display = "block";
                                                          document.getElementById("waktu").style.display = "block";
                                                           document.getElementById("foto").style.display = "block";
                                                        document.getElementById("keterangan").value = null;
                                                    }
                                                }
                                            </script> 
                                            <div class="form-group" id="ifYes1" style="display: none;">
                                                <label class="col-form-label">keterangan :</label> 
                                                <input type="text" class="form-control" id="keterangan" name="keterangan" >
                                                <?= form_error('keterangan','<small class="text-danger pl-3 ">','</small>');?>
                                            </div>

                                            <div class="form-group" id="waktu">
                                                <label for="exampleInputPassword1">Waktu</label>
                                                <input type="time" class="form-control" id="waktu2" name="waktu2" >
                                                <?= form_error('waktu2','<small class="text-danger pl-3 ">','</small>');?>
                                            </div> 
                                            <div id="foto">
                                            <div class="input-group mb-3" id="foto">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text">Upload Foto</span>
                                                </div>
                                                <div class="custom-file">
                                                    <input type="file" class="custom-file-input" id="foto" name="foto2">
                                                    <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
                                                </div>
                                            </div>
                                            <?= form_error('foto1','<small class="text-danger pl-3 ">','</small>');?>
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

                                         <?php }else{ ?>
                                            <!-- 333 -->
                                             <a  href="#" class="list-group-item list-group-item-action flex-column align-items-start " data-toggle="modal" data-target="#exampleModalLong">
                                        <div class="d-flex w-100 justify-content-between">
                                            <h5 class="mb-1">Form Morning Briefing</h5>
                                            <small>Today,&nbsp;<?= date('d-m-Y'); ?></small>
                                        </div>
                                        <p class="mb-1">Harap melakukan Absensi Morning Briefing</p>
                                        <small>Layanan Cerah by Bank Sumsel Babel.</small>
                                    </a>

                                    <a  href="#" class="list-group-item list-group-item-action flex-column align-items-start " data-toggle="modal" data-target="#exampleModalLongg">
                                        <div class="d-flex w-100 justify-content-between">
                                            <h5 class="mb-1">Form Afternoon Briefing</h5>
                                            <small class="text-muted">Today,&nbsp;<?= date('d-m-Y'); ?></small>
                                        </div>
                                        <p class="mb-1">Harap melakukan Absensi Afternoon Briefing</p>
                                        <small class="text-muted">Layanan Cerah by Bank Sumsel Babel.</small>
                                    </a>

                                         <?php } ?>
                        
                                    <!-- Modal -->
                                <div class="modal fade" id="exampleModalLong">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title">Morning Briefing</h5>
                                                <button type="button" class="close" data-dismiss="modal"><span>&times;</span></button>
                                            </div>
                                            <form action="<?= base_url('cabang/tambah_morning_briefing') ?>" method="post" enctype="multipart/form-data">
                                            <div class="modal-body">
                                            <div class="form-group">
                                                <input type="hidden" class="form-control" id="id_pengguna" name="id_pengguna" placeholder="masukan nama cabang.." value="<?= $user['id_pengguna'] ?>">
                                                <label for="exampleInputEmail1">Sudah melakukan briefing ?</label>
                                                <select name="morning" class="custom-select" onchange="yesnoCheck1(this);">
                                                <option selected="selected" value="Ya">Ya</option>
                                                <option value="Tidak">Tidak</option>
                                            </select>
                                            </div>
                                            <div class="form-group" id="tanggal">
                                                <label for="exampleInputPassword1">Tanggal</label>
                                                <input type="date" class="form-control" id="tanggal" name="tanggal" >
                                                <?= form_error('tanggal','<small class="text-danger pl-3 ">','</small>');?>
                                            </div>
                                            <script type="text/javascript">
                                                function yesnoCheck1(that) {
                                                    if (that.value == "Tidak") {
                                                        document.getElementById("ifYes1").style.display = "block";
                                                         document.getElementById("tanggal").style.display = "block";
                                                          document.getElementById("waktu").style.display = "none";
                                                           document.getElementById("foto").style.display = "none";
                                                    } else {
                                                        document.getElementById("ifYes1").style.display = "none";
                                                         document.getElementById("tanggal").style.display = "block";
                                                          document.getElementById("waktu").style.display = "block";
                                                           document.getElementById("foto").style.display = "block";
                                                        document.getElementById("keterangan").value = null;
                                                    }
                                                }
                                            </script> 
                                            <div class="form-group" id="ifYes1" style="display: none;">
                                                <label class="col-form-label">keterangan :</label> 
                                                <input type="text" class="form-control" id="keterangan" name="keterangan" >
                                                <?= form_error('keterangan','<small class="text-danger pl-3 ">','</small>');?>
                                            </div>

                                            <div class="form-group" id="waktu">
                                                <label for="exampleInputPassword1">Waktu</label>
                                                <input type="time" class="form-control" id="waktu1" name="waktu1" >
                                                <?= form_error('waktu1','<small class="text-danger pl-3 ">','</small>');?>
                                            </div> 
                                            <div id="foto">
                                            <div class="input-group mb-3" id="foto">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text">Upload Foto</span>
                                                </div>
                                                <div class="custom-file">
                                                    <input type="file" class="custom-file-input" id="foto" name="foto1">
                                                    <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
                                                </div>
                                            </div>
                                            <?= form_error('foto1','<small class="text-danger pl-3 ">','</small>');?>
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
                    </div>
                    <!-- Custom Content end -->

                    <!-- additional content area start -->
                        <div class="col-lg-6 mt-5">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="header-title">Status Absensi</h4>
                                    <div class="additional-content">

                                        <?php if($query1['tanggal'] && $query1['id_pengguna'] && $query1['morning'] && $query1['afternoon']){ ?>
                                            <!-- 111 -->
                                            <div class="alert alert-success" role="alert">
                                            <h4 class="alert-heading">Success!</h4>
                                            <p>Anda sudah mengisi Form Morning Briefing Hari ini.</p>
                                            <hr>
                                            <p class="mb-0">Layanan Cerah by Bank Sumsel Babel.</p>
                                        </div>
                                        <div class="alert alert-success" role="alert">
                                            <h4 class="alert-heading">Success!</h4>
                                            <p>Anda sudah mengisi Form Afternoon Briefing Hari ini.</p>
                                            <hr>
                                            <p class="mb-0">Layanan Cerah by Bank Sumsel Babel.</p>
                                        </div>
                                           
                                    <?php }elseif ($query1['tanggal'] && $query1['id_pengguna'] && $query1['morning'] == "Ya" && $query1['afternoon']=="") { ?>
                                        <!-- 222 -->
                                        <div class="alert alert-success" role="alert">
                                            <h4 class="alert-heading">Success!</h4>
                                            <p>Anda sudah mengisi Form Morning Briefing Hari ini.</p>
                                            <hr>
                                            <p class="mb-0">Layanan Cerah by Bank Sumsel Babel.</p>
                                        </div>

                                       <div class="alert alert-danger" role="alert">
                                            <h4 class="alert-heading">Oh no!</h4>
                                            <p>Anda belum mengisi Form Afternoon Briefing Hari ini.</p>
                                            <hr>
                                            <p class="mb-0">Layanan Cerah by Bank Sumsel Babel.</p>
                                        </div>
                                   <?php }else{ ?>
                                        <!-- 333 -->
                                         <div class="alert alert-danger" role="alert">
                                            <h4 class="alert-heading">Oh no!</h4>
                                            <p>Anda belum mengisi Form Morning Briefing Hari ini.</p>
                                            <hr>
                                            <p class="mb-0">Layanan Cerah by Bank Sumsel Babel.</p>
                                        </div>
                                        <div class="alert alert-danger" role="alert">
                                            <h4 class="alert-heading">Oh no!</h4>
                                            <p>Anda belum mengisi Form Afternoon Briefing Hari ini.</p>
                                            <hr>
                                            <p class="mb-0">Layanan Cerah by Bank Sumsel Babel.</p>
                                        </div>
                                    
                                    <?php } ?>

<!--  -->
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php } ?>
                        <!-- additional content area end -->
                        <?php if($this->session->userdata('role') == 1){ ?>
                            <!-- Primary table start -->
                    <div class="col-12 mt-5">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="header-title">Table Monitoring Morning & Afternoon Briefing</h4>
                                <h4 class="header-title">Layanan - Cerah by Bank SUMSEL BABEL</h4>
                                <a class="btn btn-danger mb-3" style="margin-left: 15px;" href="<?= base_url('welcome/pdf_semua_briefing') ?>" target="_blank"><span class="ti-files" style="margin-right: 10px;"></span>Report Pdf</a>
                                <a class="btn btn-success mb-3" href="<?= base_url('welcome/excel_semua_briefing') ?>" target="_blank"><span class="ti-write" style="margin-right: 10px;"></span>Report Excel</a>
                                <div class="data-tables datatable-primary">
                                    <table id="dataTable2" class="text-center">
                                        <thead class="text-capitalize">
                                            <tr>
                                                <th>No</th>
                                                <th>Kantor</th>
                                                <th>Tanggal</th>
                                                <th>Morning Briefing</th>
                                                <th>Waktu</th>
                                                <th>Foto</th>
                                                <th>Afternoon Briefing</th>
                                                <th>Waktu</th>
                                                <th>Foto</th>
                                                <th>Keterangan</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                             $no=1;
                                             foreach($query->result() as $q) { ?>
                                            <tr>
                                                <td><?= $no; ?></td>
                                                <td><?= $q->kantor; ?></td>
                                                <td><?= $q->tanggal; ?></td>
                                                <td><?= $q->morning; ?></td>
                                                <td><?= $q->waktu1; ?></td>
                                                <td><img src="<?= base_url('uploadfile/').$q->foto1; ?>" width="100"></td>
                                                <td><?= $q->afternoon; ?></td>
                                                <td><?= $q->waktu2; ?></td>
                                                <td><img src="<?= base_url('uploadfile/').$q->foto2; ?>" width="100"></td>
                                                <td><span class="text-danger"><?= $q->keterangan; ?></span></td>
                                                <td><a href="" data-toggle="modal" data-target="#exampleModalLong-<?= $q->id ?>"><span class="ti-pencil-alt" style="margin-right: 5px;"></span>Edit</a> || <a href="<?= base_url('welcome/hapus_briefing/').$q->id; ?>" onclick="return confirm('Are you sure want to delete this?');"><span class="ti-trash" style="margin-right: 5px;"></span>Hapus</a></td>
                                            </tr>
                                            <!-- Modal -->
                                <div class="modal fade" id="exampleModalLong-<?= $q->id ?>">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title">Form Edit Monitoring Briefing</h5>
                                                <button type="button" class="close" data-dismiss="modal"><span>&times;</span></button>
                                            </div>
                                            <form action="<?= base_url('welcome/edit_briefing/').$q->id; ?>" method="post" >
                                            <div class="modal-body">
                                            <div class="form-group">
                                                <input type="hidden" class="form-control" id="id" name="id" placeholder="masukan nama cabang.." value="<?= $q->id ?>">

                                                <label class="col-form-label">Kantor cabang :</label> 
                                                <input type="text" class="form-control" id="kantor" name="kantor" value="<?= $q->kantor ?>" readonly >
                                                <?= form_error('kantor','<small class="text-danger pl-3 ">','</small>');?>
                                            </div>
                                            <div class="form-group" id="tanggal">
                                                <label for="exampleInputPassword1">Tanggal</label>
                                                <input type="date" class="form-control" id="tanggal" name="tanggal" value="<?= $q->tanggal ?>" >
                                                <?= form_error('tanggal','<small class="text-danger pl-3 ">','</small>');?>
                                            </div>

                                            <div class="form-group">
                                                <label for="exampleInputEmail1">morning briefing </label>
                                                <select name="morning" class="custom-select" >
                                                <option selected="selected" value="<?= $q->morning ?>"><?= $q->morning ?></option>
                                                <option value="Ya">Ya</option>
                                                <option value="Tidak">Tidak</option>
                                            </select>
                                            </div>
                                            
                                            <div class="form-group" id="waktu">
                                                <label for="exampleInputPassword1">Waktu</label>
                                                <input type="time" class="form-control" id="waktu1" name="waktu1" value="<?= $q->waktu1 ?>" >
                                                <?= form_error('waktu1','<small class="text-danger pl-3 ">','</small>');?>
                                            </div> 
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">afternoon briefing </label>
                                                <select name="afternoon" class="custom-select" >
                                                <option selected="selected" value="<?= $q->afternoon ?>"><?= $q->afternoon ?></option>
                                                <option value="Ya">Ya</option>
                                                <option value="Tidak">Tidak</option>
                                            </select>
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputPassword1">Waktu</label>
                                                <input type="time" class="form-control" id="waktu2" name="waktu2" value="<?= $q->waktu2 ?>" >
                                                <?= form_error('waktu2','<small class="text-danger pl-3 ">','</small>');?>
                                            </div> 
                                            
                                            <div class="form-group">
                                                <label class="col-form-label">keterangan :</label> 
                                                <input type="text" class="form-control" id="keterangan" name="keterangan" value="<?= $q->keterangan ?>" >
                                                <?= form_error('keterangan','<small class="text-danger pl-3 ">','</small>');?>
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
                        <?php } ?>
                </div>
            </div>
        </div>
        <!-- main content area end -->
       