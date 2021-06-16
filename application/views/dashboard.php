
            <div class="main-content-inner">
                <div class="row">
                    <div class="col-12 mt-3">
                                <div class="row">
                                    <div class="col-12">
                                        <div><?= $this->session->flashdata('message');?></div>    
                                    </div>
                                </div>
                    </div>

                    
                    <?php if($this->session->userdata('role')==1){ ?>
                    <div class="col-12 ">
                        <div class="row">
                            <div class="col-md-3  mb-3">
                                <div class="card">
                                    <div class="seo-fact sbg1">
                                        <div class="p-4 d-flex justify-content-between align-items-center">
                                            <div class="seofct-icon"> Kantor Cabang</div>
                                            <h2><?= $kantor_cabang['total'] ?></h2>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3  mb-3">
                                <div class="card">
                                    <div class="seo-fact sbg1">
                                        <div class="p-4 d-flex justify-content-between align-items-center">
                                            <div class="seofct-icon"> Total Briefing</div>
                                            <h2><?= $totalBriefing['total'] ?></h2>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3  mb-3">
                                <div class="card">
                                    <div class="seo-fact sbg1">
                                        <div class="p-4 d-flex justify-content-between align-items-center">
                                            <div class="seofct-icon"> Briefing Ya </div>
                                            <h2><?= $totalBriefingYa['total'] ?></h2>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3  mb-3">
                                <div class="card">
                                    <div class="seo-fact sbg4">
                                        <div class="p-4 d-flex justify-content-between align-items-center">
                                            <div class="seofct-icon"> Briefing Tidak</div>
                                            <h2><?= $totalBriefingTidak['total'] ?></h2>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 mb-3 mb-lg-0">
                                <div class="card">
                                    <div class="seo-fact sbg2">
                                        <div class="p-4 d-flex justify-content-between align-items-center">
                                            <div class="seofct-icon"><small class="text-white">Today,&nbsp;<?= date('d-m-Y'); ?></small><br>Absen Briefing Sudah </div>
                                            <h2><?= $totalBriefingSudahToday['total'] ?></h2>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="card">
                                    <div class="seo-fact sbg3">
                                        <div class="p-4 d-flex justify-content-between align-items-center">
                                            <div class="seofct-icon"><small class="text-white">Today,&nbsp;<?= date('d-m-Y'); ?></small><br>Absen Briefing Belum</div>
                                            <h2><?= $kantor_cabang['total'] - $totalBriefingSudahToday['total']  ?></h2>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>    

                    <div class="col-12 mt-5">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="header-title">Grafik Data Per-Bulan</h4>
                                <div class="col-lg-12">
                                    <div class="card">
                                        <div class="card-body">
                                           <div id="myfirstchart"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
                    <script src="//cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
                    <script src="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.min.js"></script>
                    <script type="text/javascript">
                        new Morris.Bar({
                          // ID of the element in which to draw the chart.
                          element: 'myfirstchart',
                          // Chart data records -- each entry in this array corresponds to a point on
                          // the chart.
                          data: [
                            { month: 'Jan',
                            <?php foreach($jan->result() as $q) { ?> 
                                <?=$q->kantor ?>: <?= $q->jumlah_bulanan ?>, 
                                <?php } ?>
                            },{ month: 'Feb',
                            <?php foreach($feb->result() as $q) { ?> 
                                <?=$q->kantor ?>: <?= $q->jumlah_bulanan ?>, 
                                <?php } ?>
                            },{ month: 'Mar',
                            <?php foreach($mar->result() as $q) { ?> 
                                <?=$q->kantor ?>: <?= $q->jumlah_bulanan ?>, 
                                <?php } ?>
                            },{ month: 'Apr',
                            <?php foreach($apr->result() as $q) { ?> 
                                <?=$q->kantor ?>: <?= $q->jumlah_bulanan ?>, 
                                <?php } ?>
                            },{ month: 'Mei',
                            <?php foreach($mei->result() as $q) { ?> 
                                <?=$q->kantor ?>: <?= $q->jumlah_bulanan ?>, 
                                <?php } ?>
                            },
                            { month: 'Juni',
                            <?php foreach($jun->result() as $q) { ?> 
                                <?=$q->kantor ?>: <?= $q->jumlah_bulanan ?>, 
                                <?php } ?>
                            },
                            { month: 'Juli',
                            <?php foreach($jul->result() as $q) { ?> 
                                <?=$q->kantor ?>: <?= $q->jumlah_bulanan ?>, 
                                <?php } ?>
                            },
                            { month: 'Agu',
                            <?php foreach($agu->result() as $q) { ?> 
                                <?=$q->kantor ?>: <?= $q->jumlah_bulanan ?>, 
                                <?php } ?>
                            },
                            { month: 'Sep',
                            <?php foreach($sep->result() as $q) { ?> 
                                <?=$q->kantor ?>: <?= $q->jumlah_bulanan ?>, 
                                <?php } ?>
                            },
                            { month: 'Okt',
                            <?php foreach($okt->result() as $q) { ?> 
                                <?=$q->kantor ?>: <?= $q->jumlah_bulanan ?>, 
                                <?php } ?>
                            },
                            { month: 'Nov',
                            <?php foreach($nov->result() as $q) { ?> 
                                <?=$q->kantor ?>: <?= $q->jumlah_bulanan ?>, 
                                <?php } ?>
                            },
                            { month: 'Des',
                            <?php foreach($des->result() as $q) { ?> 
                                <?=$q->kantor ?>: <?= $q->jumlah_bulanan ?>, 
                                <?php } ?>
                            }


                          ],
                          // The name of the data record attribute that contains x-values.
                          xkey: 'month',
                          // A list of names of data record attributes that contain y-values.
                          ykeys: [
                          <?php foreach($pengguna->result() as $q) { ?>
                            '<?=$q->kantor?>',
                        <?php } ?>
                          ],
                          // Labels for the ykeys -- will be displayed when you hover over the
                          // chart.
                          labels: [<?php foreach($pengguna->result() as $q) { ?>
                            '<?=$q->kantor?>',
                        <?php } ?>]
                        });
                    </script>




                    <?php } ?>
                    <?php if($this->session->userdata('role')==2){ ?>
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
       