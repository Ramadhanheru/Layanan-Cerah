<div class="main-content-inner">
    <div class="row">
        <div class="col-12 mt-5">
            <div class="row">
                <div class="col-12">
                    <div><?= $this->session->flashdata('message');?></div>
                </div>
            </div>
        </div>
        <?php if($this->session->userdata('role') == 1){ ?>
            <!-- Primary table start -->
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="header-title">Table Checking ATM</h4>
                    <a class="btn btn-danger mb-3" style="margin-left: 15px;" href="<?= base_url('welcome/pdf_checking_atm') ?>" target="_blank"><span class="ti-files" style="margin-right: 10px;"></span>Report Pdf</a>
                    <div class="data-tables datatable-primary">
                        <table id="dataTable2" class="text-center">
                            <thead class="text-capitalize">
                                <tr>
                                    <th>No</th>
                                    <th>Nama Cabang</th>
                                    <th>Alamat Cabang</th>
                                    <th>Tanggal</th>
                                    <th>Hari</th>
                                    <th>Waktu Observasi</th>
                                    <th>Petugas 1</th>
                                    <th>Petugas 2</th>
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
                                    <td><?= $q->alamat; ?></td>
                                    <td><?= $q->tanggal; ?></td>
                                    <td><?= $q->hari; ?></td>
                                    <td><?= $q->waktu; ?></td>
                                    <td><?= $q->petugas1; ?></td>
                                    <td><?= $q->petugas2; ?></td>
                                    <td><a href="<?= base_url('welcome/print_checking_atm/').$q->id; ?>" target="_blank"><span class="ti-printer" style="margin-right: 5px;"></span>Print</a> ||
                                        <a href="" data-toggle="modal" data-target="#exampleModalLong-<?= $q->id ?>"><span class="ti-pencil-alt" style="margin-right: 5px;"></span>Edit</a> ||
                                        <a href="<?= base_url('welcome/hapus_checking_atm/').$q->id; ?>" onclick="return confirm('Are you sure want to delete this?');"><span class="ti-trash" style="margin-right: 5px;"></span>Hapus</a></td>
                                </tr>
                                <!-- Modal -->
                                    <div class="modal fade" id="exampleModalLong-<?=$q->id;?>">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title">Form Edit Checking ATM</h5>
                                                    <button type="button" class="close" data-dismiss="modal"><span>&times;</span></button>
                                                </div>
                                                <form action="<?= base_url('welcome/edit_checking_atm/').$q->id ?>" method="post" enctype="multipart/form-data">
                                                    <div class="modal-body">
                                                        
                                                        <div class="form-group">
                                                            <label for="nama_cabang">Nama Cabang</label>
                                                            <input type="hidden" class="form-control" id="id" name="id" placeholder="masukan nama cabang.." value="<?= $q->id ?>">
                                                            <input type="text" class="form-control" id="nama_cabang" name="nama_cabang" placeholder="masukan nama cabang.." value="<?=$q->kantor; ?>" readonly>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="alamat_cabang">Alamat Cabang</label>
                                                            <input type="text" class="form-control" id="alamat_cabang" name="alamat_cabang" placeholder="masukan alamat cabang.." value="<?=$q->alamat; ?>" readonly>
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="col-form-label">Hari</label>
                                                            <select name="hari" class="custom-select">
                                                                <option selected="selected" value="<?= $q->hari; ?>"><?= $q->hari; ?></option>
                                                                <option value="Senin">Senin</option>
                                                                <option value="Selasa">Selasa</option>
                                                                <option value="Rabu">Rabu</option>
                                                                <option value="Kamis">Kamis</option>
                                                                <option value="Jumat">Jumat</option>
                                                                <option value="Sabtu">Sabtu</option>
                                                            </select>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="example-date-input" class="col-form-label">Tanggal</label>
                                                            <input class="form-control" type="date" id="tanggal" name="tanggal" value="<?=$q->tanggal; ?>">
                                                            <?= form_error('tanggal','<small class="text-danger pl-3 ">','</small>');?>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="example-time-input" class="col-form-label">Time</label>
                                                            <input class="form-control" type="time" id="waktu" name="waktu" value="<?=$q->waktu; ?>">
                                                            <?= form_error('waktu','<small class="text-danger pl-3 ">','</small>');?>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="petugas1">Nama Petugas 1</label>
                                                            <input type="text" class="form-control" id="petugas1" name="petugas1" aria-describedby="emailHelp" placeholder="masukan nama petugas.."value="<?=$q->petugas1; ?>">
                                                            <?= form_error('petugas1','<small class="text-danger pl-3 ">','</small>');?>
                                                            
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="petugas2">Nama Petugas 2</label>
                                                            <input type="text" class="form-control" id="petugas2" name="petugas2" aria-describedby="emailHelp" placeholder="masukan nama petugas.." value="<?=$q->petugas2; ?>">
                                                            <?= form_error('petugas2','<small class="text-danger pl-3 ">','</small>');?>
                                                        </div>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary" data-dismiss="modal" >Close</button>
                                                        <button type="submit" class="btn btn-primary" onclick="return confirm('Are you sure want to edit this?');">Submit</button>
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
        <?php if($this->session->userdata('role') == 2){ ?>
        <!-- Primary table start -->
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="header-title">Table Checking ATM</h4>
                    <div class="data-tables datatable-primary">
                        <table id="dataTable2" class="text-center">
                            <thead class="text-capitalize">
                                <tr>
                                    <th>No</th>
                                    <th>Nama Cabang</th>
                                    <th>Alamat Cabang</th>
                                    <th>Tanggal</th>
                                    <th>Hari</th>
                                    <th>Waktu Observasi</th>
                                    <th>Petugas 1</th>
                                    <th>Petugas 2</th>
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
                                    <td><?= $q->alamat; ?></td>
                                    <td><?= $q->tanggal; ?></td>
                                    <td><?= $q->hari; ?></td>
                                    <td><?= $q->waktu; ?></td>
                                    <td><?= $q->petugas1; ?></td>
                                    <td><?= $q->petugas2; ?></td>
                                    <td><a href="<?= base_url('cabang/print_checking_atm/').$q->id; ?>" target="_blank">Print</a></td>
                                </tr>
                                <?php $no++; } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <!-- Primary table end -->
        <!-- Primary table start -->
        <div class="col-12 mt-5">
            <div class="card">
                <div class="card-body">
                    <h4 class="header-title">Form Checking ATM</h4>
                    <?php
                    $datestring = 'Year: %Y Month: %m Day: %d ';
                    echo mdate($datestring); ?>
                    <form action="<?= base_url('Cabang/tambah_atm'); ?>" method="post">
                        <div class="form-group">
                            <label for="nama_cabang"><b class="text-dark">Nama Cabang</b></label>
                            <input type="hidden" class="form-control" id="id_pengguna" name="id_pengguna" placeholder="masukan nama cabang.." value="<?= $user['id_pengguna'] ?>">
                            <input type="text" class="form-control" id="nama_cabang" name="nama_cabang" placeholder="masukan nama cabang.." value="<?=$user['kantor']; ?>" readonly>
                        </div>
                        <div class="form-group">
                            <label for="alamat_cabang"><b class="text-dark">Alamat Cabang</b></label>
                            <input type="text" class="form-control" id="alamat_cabang" name="alamat_cabang" placeholder="masukan alamat cabang.." value="<?=$user['kantor']; ?>" readonly>
                        </div>
                        <div class="form-group">
                            <label class="col-form-label"><b class="text-dark">Hari</b></label>
                            <select name="hari" class="custom-select">
                                <option selected="selected" value="Senin">Senin</option>
                                <option value="Selasa">Selasa</option>
                                <option value="Rabu">Rabu</option>
                                <option value="Kamis">Kamis</option>
                                <option value="Jumat">Jumat</option>
                                <option value="Sabtu">Sabtu</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="example-date-input" class="col-form-label"><b class="text-dark">Tanggal</b></label>
                            <input class="form-control" type="date" id="tanggal" name="tanggal">
                            <?= form_error('tanggal','<small class="text-danger pl-3 ">','</small>');?>
                        </div>
                        <div class="form-group">
                            <label for="example-time-input" class="col-form-label"><b class="text-dark">Time</b></label>
                            <input class="form-control" type="time" id="waktu" name="waktu">
                            <?= form_error('waktu','<small class="text-danger pl-3 ">','</small>');?>
                        </div>
                        <div class="form-group">
                            <label for="petugas1"><b class="text-dark">Nama Petugas 1</b></label>
                            <input type="text" class="form-control" id="petugas1" name="petugas1" aria-describedby="emailHelp" placeholder="masukan nama petugas..">
                            <?= form_error('petugas1','<small class="text-danger pl-3 ">','</small>');?>
                            
                        </div>
                        <div class="form-group">
                            <label for="petugas2"><b class="text-dark">Nama Petugas 2</b></label>
                            <input type="text" class="form-control" id="petugas2" name="petugas2" aria-describedby="emailHelp" placeholder="masukan nama petugas..">
                            <?= form_error('petugas2','<small class="text-danger pl-3 ">','</small>');?>
                        </div>
                        <div class="form-group">
                            <label class="col-form-label"><b class="text-dark">Denominasi</b></label> <br>
                            <label class="col-form-label">Keberadaan :</label>
                            <select name="O1" class="custom-select" onchange="yesnoCheck1(this);">
                                <option selected="selected"></option>
                                <option value="Ada">Ada</option>
                                <option value="Tidak Ada">Tidak Ada</option>
                            </select>
                            <?= form_error('O1','<small class="text-danger pl-3 ">','</small>');?>
                            <script type="text/javascript">
                            function yesnoCheck1(that) {
                            if (that.value == "Ada") {
                            document.getElementById("ifYes1").style.display = "block";
                            } else {
                            document.getElementById("ifYes1").style.display = "none";
                            document.getElementById("K1").value = null;
                            }
                            }
                            </script>
                            <div class="form-group" id="ifYes1" style="display: none;">
                                <label class="col-form-label">Kondisi :</label>
                                <select id="K1" name="K1" class="custom-select">
                                    <option value="Jelas">Jelas</option>
                                    <option value="Sobek">Sobek</option>
                                    <option value="Kabur">Kabur</option>
                                </select><br />
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-form-label"><b class="text-dark">Kondisiruang ATM</b></label> <br>
                            <label class="col-form-label">Keberadaan :</label>
                            <select name="O2" class="custom-select" onchange="yesnoCheck2(this);">
                                <option selected="selected"></option>
                                <option value="Ada">Ada</option>
                                <option value="Tidak Ada">Tidak Ada</option>
                            </select>
                            <?= form_error('O2','<small class="text-danger pl-3 ">','</small>');?>
                            <script type="text/javascript">
                            function yesnoCheck2(that) {
                            if (that.value == "Ada") {
                            document.getElementById("ifYes2").style.display = "block";
                            } else {
                            document.getElementById("ifYes2").style.display = "none";
                            document.getElementById("K2").value = null;
                            }
                            }
                            </script>
                            <div class="form-group" id="ifYes2" style="display: none;">
                                <label class="col-form-label">Kondisi :</label>
                                <select id="K2" name="K2" class="custom-select">
                                    <option value="Bersih">Bersih</option>
                                    <option value="Ada Potongan kertas/kotor (debu)">Ada Potongan kertas/kotor (debu)</option>
                                </select><br />
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-form-label"><b class="text-dark">Tempat Sampah</b></label> <br>
                            <label class="col-form-label">Keberadaan :</label>
                            <select name="O3" class="custom-select" onchange="yesnoCheck3(this);">
                                <option selected="selected"></option>
                                <option value="Ada">Ada</option>
                                <option value="Tidak Ada">Tidak Ada</option>
                            </select>
                            <?= form_error('O3','<small class="text-danger pl-3 ">','</small>');?>
                            <script type="text/javascript">
                            function yesnoCheck3(that) {
                            if (that.value == "Ada") {
                            document.getElementById("ifYes3").style.display = "block";
                            } else {
                            document.getElementById("ifYes3").style.display = "none";
                            document.getElementById("K3").value = null;
                            }
                            }
                            </script>
                            <div class="form-group" id="ifYes3" style="display: none;">
                                <label class="col-form-label">Kondisi :</label>
                                <select id="K3" name="K3" class="custom-select">
                                    <option value="Bersih">Bersih</option>
                                    <option value="Kotor">Kotor</option>
                                </select><br />
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-form-label"><b class="text-dark">Lampu</b></label> <br>
                            <label class="col-form-label">Keberadaan :</label>
                            <select name="O4" class="custom-select" onchange="yesnoCheck4(this);">
                                <option selected="selected"></option>
                                <option value="Ada">Ada</option>
                                <option value="Tidak Ada">Tidak Ada</option>
                            </select>
                            <?= form_error('O4','<small class="text-danger pl-3 ">','</small>');?>
                            <script type="text/javascript">
                            function yesnoCheck4(that) {
                            if (that.value == "Ada") {
                            document.getElementById("ifYes4").style.display = "block";
                            } else {
                            document.getElementById("ifYes4").style.display = "none";
                            document.getElementById("K4").value = null;
                            }
                            }
                            </script>
                            <div class="form-group" id="ifYes4" style="display: none;">
                                <label class="col-form-label">Kondisi :</label>
                                <select id="K4" name="K4" class="custom-select">
                                    <option value="Hidup">Hidup</option>
                                    <option value="Mati">Mati</option>
                                </select><br />
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-form-label"><b class="text-dark">Penyejuk AC</b></label> <br>
                            <label class="col-form-label">Keberadaan :</label>
                            <select name="O5" class="custom-select" onchange="yesnoCheck5(this);">
                                <option selected="selected"></option>
                                <option value="Ada">Ada</option>
                                <option value="Tidak Ada">Tidak Ada</option>
                            </select>
                            <?= form_error('O5','<small class="text-danger pl-3 ">','</small>');?>
                            <script type="text/javascript">
                            function yesnoCheck5(that) {
                            if (that.value == "Ada") {
                            document.getElementById("ifYes5").style.display = "block";
                            } else {
                            document.getElementById("ifYes5").style.display = "none";
                            document.getElementById("K5").value = null;
                            }
                            }
                            </script>
                            <div class="form-group" id="ifYes5" style="display: none;">
                                <label class="col-form-label">Kondisi :</label>
                                <select id="K5" name="K5" class="custom-select">
                                    <option value="Berfungsi">Berfungsi</option>
                                    <option value="Tidak Berfungsi">Tidak Berfungsi</option>
                                </select><br />
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-form-label"><b class="text-dark">Slip/bukti transaksi</b></label> <br>
                            <label class="col-form-label">Keberadaan :</label>
                            <select name="O6" class="custom-select">
                                <option selected="selected"></option>
                                <option value="Ada">Ada</option>
                                <option value="Tidak Ada">Tidak Ada</option>
                            </select>
                            <?= form_error('O6','<small class="text-danger pl-3 ">','</small>');?>
                        </div>
                        <button type="refresh" class="btn btn-primary mt-4 pr-4 pl-4">Reset</button>
                        <button type="button" class="btn btn-primary mt-4 pr-4 pl-4" data-toggle="modal" data-target="#exampleModalLong">Submit</button>
                        <!-- Modal -->
                        <div class="modal fade" id="exampleModalLong">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title">Konfirmasi Data</h5>
                                        <button type="button" class="close" data-dismiss="modal"><span>&times;</span></button>
                                    </div>
                                    <div class="modal-body">
                                        <p>Apakah Data yang diisi sudah benar?
                                        </p>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- Primary table end -->
        <?php } ?>
        
    </div>
</div>
</div>
<!-- main content area end -->