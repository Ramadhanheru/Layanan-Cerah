
            <div class="main-content-inner">
                <div class="row">
                    <div class="col-12 mt-5">
                                <div class="row">
                                    <div class="col-12">
                                        <div><?= $this->session->flashdata('message');?></div>    
                                    </div>
                                </div>
                    </div>

                    <div class="col-lg-12 mt-2" >
                        <div class="card">
                            <div class="card-body bg1">
                                <h4 class="header-title text-white">BANK SUMSEL BABEL</h4>
                                <div class="testimonial-carousel owl-carousel ">
                                    <div class="tst-item">
                                        
                                        <div class="tstu-content">
                                            <h4 class="tstu-name">Visi</h4>
                                            <span class="profsn mt-3">"Menjadi Bank Terkemuka dan Terpercaya dengan Kinerja Unggul"</span>

                                             <h4 class="tstu-name">Misi</h4>
                                             <span class="profsn mt-3">1. Membantu mengembangkan potensi daerah dan meningkatkan pertumbuhan perekonomian daerah. <br>
                                                2. Menumbuhkembangkan Retail Banking, Corporate Banking, dan International Banking. <br>
                                                3. Mengembangkan Human Capital yang profesional dan tata kelola perusahaan yang baik.</span>
                                            
                                        </div>
                                    </div>
                                    <div class="tst-item">
                                        <div class="tstu-content">
                                            <h4 class="tstu-name">Sejarah</h4>
                                            <span class="profsn mt-3">PT Bank Pembangunan Daerah Sumatera Selatan dan Bangka Belitung didirikan pada tanggal 6 November 1957 dengan nama PT Bank Pembangunan Sumatera Selatan yang didirikan berdasarkan:


                                            1.  Keputusan Panglima Ketua Penguasa Perang Daerah Sriwijaya Tingkat I Sumatera Selatan Nomor 132/SPP/58 tanggal 10 April 1958 dengan berlaku surut. mulai tanggal 6 Nopember 1957. <br>
                                            2.  Akta Notaris Tan Thong Khe Nomor 54 tanggal 29 September 1958 dengan izin Menteri Kehakiman No. J.A.5/44/16 tanggal 11 Mei 1959. <br>
                                            3.  Izin Usaha Bank dari Menteri Keuangan Nomor 47692/UM II tanggal 18 April 1959.</span>
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- testimonial area end -->
                    <?php if($this->session->userdata('role')==2){ ?>
                    <!-- Primary table start -->
                    <div class="col-12 mt-5">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="header-title">Table Monitoring Morning & Afternoon Briefing</h4>
                                <div class="col-6">
                                <form action="<?= base_url('cabang/print_tgl') ?>" method="post" target="_blank">
                                    <div class="input-group mb-3">
                                    <input type="month" class="form-control"  name="tgl_awal">
                                        <div class="input-group-append">
                                        <input class="btn btn-primary" type="submit" name="print"  value="Print" >
                                        </div>
                                    </div>
                                    </form>
                                </div>
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
                                                <td><span class="text-danger"><?= $q->keterangan; ?></td>
                                            </tr>
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
       