
            <div class="main-content-inner">
                <div class="row">
                    <!-- Primary table start -->
                    <div class="col-12 mt-5">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="header-title">Form Checking Kenyamanan Bankink Hall</h4>
                                <?php 
                                $datestring = 'Year: %Y Month: %m Day: %d - %h:%i %a';
$time = time();
echo mdate($datestring, $time);
echo '<br>';
$date = strtotime('2016-2-3');
$datee = date('l', $date);
echo $datee; ?>
                                        <form>
                                            <div class="form-group">
                                                <label for="nama_cabang">Nama Cabang</label>
                                                <input type="text" class="form-control" id="nama_cabang" aria-describedby="emailHelp" placeholder="masukan nama cabang..">
                                            </div>
                                            <div class="form-group">
                                                <label for="alamat_cabang">Alamat Cabang</label>
                                                <input type="text" class="form-control" id="alamat_cabang" placeholder="masukan alamat cabang..">
                                            </div>
                                            <div class="form-group">
                                            <label class="col-form-label">Hari</label>
                                            <select class="custom-select">
                                                <option selected="selected" value="Senin">Senin</option>
                                                <option value="Selasa">Selasa</option>
                                                <option value="Rabu">Rabu</option>
                                                <option value="Kamis">Kamis</option>
                                                <option value="Jumat">Jumat</option>
                                                <option value="Sabtu">Sabtu</option>
                                            </select>
                                        </div>
                                            <div class="form-group">
                                            <label for="example-date-input" class="col-form-label">Tanggal</label>
                                            <input class="form-control" type="date" id="tanggal">
                                        </div>
                                        <div class="form-group">
                                            <label for="example-time-input" class="col-form-label">Time</label>
                                            <input class="form-control" type="time" id="waktu">
                                        </div>
                                        <div class="form-group">
                                                <label for="petugas1">Nama Petugas 1</label>
                                                <input type="text" class="form-control" id="petugas1" aria-describedby="emailHelp" placeholder="masukan nama petugas..">
                                                
                                            </div>
                                            <div class="form-group">
                                                <label for="petugas2">Nama Petugas 2</label>
                                                <input type="text" class="form-control" id="petugas2" aria-describedby="emailHelp" placeholder="masukan nama petugas..">
                                            </div>

                                            <button type="submit" class="btn btn-primary mt-4 pr-4 pl-4">Submit</button>
                                        </form>
                            </div>
                        </div>
                    </div>
                    <!-- Primary table end -->
                    <!-- Primary table start -->
                    <div class="col-12 mt-5">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="header-title">Data Table Primary</h4>
                                <div class="data-tables datatable-primary">
                                    <table id="dataTable2" class="text-center">
                                        <thead class="text-capitalize">
                                            <tr>
                                                <th>Name</th>
                                                <th>Position</th>
                                                <th>Office</th>
                                                <th>Age</th>
                                                <th>Start Date</th>
                                                <th>salary</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>Airi Satou</td>
                                                <td>Accountant</td>
                                                <td>Tokyo</td>
                                                <td>33</td>
                                                <td>2008/11/28</td>
                                                <td>$162,700</td>
                                            </tr>
                                            <tr>
                                                <td>Angelica Ramos</td>
                                                <td>Chief Executive Officer (CEO)</td>
                                                <td>London</td>
                                                <td>47</td>
                                                <td>2009/10/09</td>
                                                <td>$1,200,000</td>
                                            </tr>
                                            <tr>
                                                <td>Ashton Cox</td>
                                                <td>Junior Technical Author</td>
                                                <td>San Francisco</td>
                                                <td>66</td>
                                                <td>2009/01/12</td>
                                                <td>$86,000</td>
                                            </tr>
                                            <tr>
                                                <td>Bradley Greer</td>
                                                <td>Software Engineer</td>
                                                <td>London</td>
                                                <td>41</td>
                                                <td>2012/10/13</td>
                                                <td>$132,000</td>
                                            </tr>
                                            <tr>
                                                <td>Brenden Wagner</td>
                                                <td>Software Engineer</td>
                                                <td>San Francisco</td>
                                                <td>28</td>
                                                <td>2011/06/07</td>
                                                <td>$206,850</td>
                                            </tr>
                                            <tr>
                                                <td>Caesar Vance</td>
                                                <td>Pre-Sales Support</td>
                                                <td>New York</td>
                                                <td>29</td>
                                                <td>2011/12/12</td>
                                                <td>$106,450</td>
                                            </tr>
                                            <tr>
                                                <td>Bruno Nash</td>
                                                <td>Software Engineer</td>
                                                <td>Edinburgh</td>
                                                <td>21</td>
                                                <td>2012/03/29</td>
                                                <td>$433,060</td>
                                            </tr>
                                            <tr>
                                                <td>Bradley Greer</td>
                                                <td>Software Engineer</td>
                                                <td>London</td>
                                                <td>41</td>
                                                <td>2012/10/13</td>
                                                <td>$132,000</td>
                                            </tr>
                                            <tr>
                                                <td>Brenden Wagner</td>
                                                <td>Software Engineer</td>
                                                <td>San Francisco</td>
                                                <td>28</td>
                                                <td>2011/06/07</td>
                                                <td>$206,850</td>
                                            </tr>
                                            <tr>
                                                <td>Caesar Vance</td>
                                                <td>Pre-Sales Support</td>
                                                <td>New York</td>
                                                <td>29</td>
                                                <td>2011/12/12</td>
                                                <td>$106,450</td>
                                            </tr>
                                            <tr>
                                                <td>Bruno Nash</td>
                                                <td>Software Engineer</td>
                                                <td>Edinburgh</td>
                                                <td>21</td>
                                                <td>2012/03/29</td>
                                                <td>$433,060</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Primary table end -->
                </div>
            </div>
        </div>
        <!-- main content area end -->
       