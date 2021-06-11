
            <div class="main-content-inner">
                <div class="row">
                    <!-- map area start -->
                    <div class="col-12 mt-5">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="header-title">Profile</h4>
                                 <!-- Start 4 column grid system -->
                                <?= $this->session->flashdata('message'); ?>

                                <div class="row">
                                    <div class="col-lg-2">
                                            <div class="form-group">
                                                <img src="<?= base_url('uploadfile/').$user['foto']; ?>" width="300"><br>
                                                <label for="exampleInputEmail1">Foto Profile</label>
                                            </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-2">
                                        <div class="form-group">
                                                <h6 class="h6">Nama &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</h6>
                                            </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="form-group">
                                                <h6 class="h6"><strong><?= $user['nama'] ?></strong></h6>
                                            </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-2">
                                        <div class="form-group">
                                                <h6 class="h6">Unit &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</h6>
                                            </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="form-group">
                                                <h6 class="h6"><strong><?= $user['unit'] ?></strong></h6>
                                            </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-2">
                                        <div class="form-group">
                                                <h6 class="h6">Kantor &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</h6>
                                            </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="form-group">
                                                <h6 class="h6"><strong><?= $user['kantor'] ?></strong></h6>
                                            </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-lg-8">
                                        <?php if($this->session->userdata('role')==1){ ?>
                                                <a href="<?= base_url('Welcome/dashboard') ?>" class="btn btn-warning mt-4 pr-4 pl-4" >Kembali</a>
                                            <?php }else{ ?>
                                                <a href="<?= base_url('Cabang/dashboard') ?>" class="btn btn-warning mt-4 pr-4 pl-4" >Kembali</a>
                                            <?php } ?>
                                        <a href="" class="btn btn-primary mt-4 pr-4 pl-4" data-toggle="modal" data-target="#editprofile">Edit Profile</a>

                                        <!-- Modal -->
                                <div class="modal fade" id="editprofile">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title">Edit Profile</h5>
                                                <button type="button" class="close" data-dismiss="modal"><span>&times;</span></button>
                                            </div>
                                            <form action="<?= base_url('Login/editprofile/').$user['id_pengguna'] ?>" method="post" enctype="multipart/form-data">
                                            <div class="modal-body">
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Username</label>
                                                <input type="hidden" class="form-control" id="id" name="id" value="<?= $user['id_pengguna'] ?>" >
                                                <input type="text" class="form-control" id="username1" name="username1" value="<?= $user['username'] ?>" readonly>
                                               
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputEmail2">Username Baru</label>
                                                <input type="text" class="form-control" id="username" name="username" >
                                                <?= form_error('username','<small class="text-danger pl-3 ">','</small>');?>
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputPassword1">Password Baru</label>
                                                <input type="password" class="form-control" id="password" name="password" placeholder="Masukan Password Baru...">
                                                <?= form_error('password','<small class="text-danger pl-3 ">','</small>');?>
                                            </div> 
                                            <div class="input-group mb-3">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text">Upload Foto</span>
                                                </div>
                                                <div class="custom-file">
                                                    <input type="file" class="custom-file-input" id="foto" name="foto">
                                                    <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
                                                </div>
                                            </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                <button type="submit" class="btn btn-primary">Save changes</button>
                                            </div>
                                            </form>
                                    </div>                                    
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- map area end -->
                   
                </div>
            </div>
            </div>
        </div>
    </div>
</div>
        <!-- main content area end -->
       