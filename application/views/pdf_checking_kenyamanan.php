<!DOCTYPE html>
<html>
	<head>
		 <link rel="shortcut icon" type="image/png" href="<?= base_url('asset/'); ?>assets/images/icon/logoo_X3q_icon.ico">
		<title>Laporan Checking Kenyamanan Layanan-Cerah</title>
		<style type="text/css">
		.tg  {border-collapse:collapse;border-spacing:0;}
		.tg td{border-color:black;border-style:solid;border-width:1px;font-family:Arial, sans-serif;font-size:14px;
		overflow:hidden;padding:10px 5px;word-break:normal;}
		.tg th{border-color:black;border-style:solid;border-width:1px;font-family:Arial, sans-serif;font-size:14px;
		font-weight:normal;overflow:hidden;padding:10px 5px;word-break:normal;}
		.tg .tg-xeyn{border-color:inherit;font-family:"Times New Roman", Times, serif !important;;font-size:12px;font-weight:bold;
		text-align:center;vertical-align:top}
		.tg .tg-2c25{border-color:inherit;font-family:"Times New Roman", Times, serif !important;;font-size:12px;font-weight:bold;
		text-align:left;vertical-align:top}
		</style>
	</head>
	<body>
		<?php
		
		foreach($query->result() as $q) { ?>
		<center>
		<b>CHECKING KENYAMANAN BANKING HALL
		<br>
		</center>
		<table class="tg" width="100%" style="undefined;table-layout: fixed; margin-top: 35px;">
			<colgroup>
			<col style="width: 138px">
			<col style="width: 26px">
			<col style="width: 506px">
			</colgroup>
			<thead>
				<tr >
					<th class="tg-2c25" width="20%" style="padding: 4;"><span style="font-weight:bold">Nama Cabang/Capem</span></th>
					<th class="tg-xeyn" width="3%" style="padding: 4;">:</th>
					<th class="tg-2c25" width="77%" style="padding: 4;"><?= $q->kantor ?></th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td class="tg-2c25" style="padding: 4;"><span style="font-weight:bold">Alamat Cabang/Cabang</span></td>
					<td class="tg-xeyn" style="padding: 4;">:</td>
					<td class="tg-2c25" style="padding: 4;"><?= $q->alamat ?></td>
				</tr>
				<tr>
					<td class="tg-2c25" style="padding: 4;"><span style="font-weight:bold">Pelaksanaan</span></td>
					<td class="tg-xeyn" style="padding: 4;">:</td>
					<td class="tg-2c25" style="padding: 4;">Hari  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: <?= $q->hari  ?></td>
				</tr>
				<tr>
					<td class="tg-2c25" style="padding: 4;"></td>
					<td class="tg-xeyn" style="padding: 4;"></td>
					<td class="tg-2c25" style="padding: 4;">Tanggal&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: <?= $q->tanggal  ?></td>
				</tr>
				<tr>
					<td class="tg-2c25" style="padding: 4;"></td>
					<td class="tg-xeyn" style="padding: 4;"></td>
					<td class="tg-2c25" style="padding: 4;">Waktu Observasi&nbsp;&nbsp;: <?= $q->waktu  ?></td>
				</tr>
				<tr>
					<td class="tg-2c25" style="padding: 4;">Nama Petugas</td>
					<td class="tg-xeyn" style="padding: 4;">:</td>
					<td class="tg-2c25" style="padding: 4;">1. <?= $q->petugas1  ?></td>
				</tr>
				<tr>
					<td class="tg-2c25" style="padding: 4;"></td>
					<td class="tg-xeyn" style="padding: 4;"></td>
					<td class="tg-2c25" style="padding: 4;">2. <?= $q->petugas2  ?></td>
				</tr>
			</tbody>
		</table>
		
		<table class="tg" width="100%" style="margin-top: 35px;">
			<thead>
				<tr>
					<th rowspan="2" class="tg-xeyn" style="font-size:14px;font-weight: ">No</th>
					<th rowspan="2" class="tg-xeyn" style="font-size:14px;font-weight: ">Objek Pengamatan</th>
					<th colspan="2" class="tg-xeyn" style="font-size:14px;font-weight: ">Keberadaan</th>
					<th rowspan="2" class="tg-xeyn" style="font-size:14px;font-weight: ">Kondisi Kenyamanan Bankink Hall <br>(Jika Ada)</th>
					<th rowspan="2" class="tg-xeyn" style="font-size:14px;font-weight: ">Isi dengan tanda <br>checklist</th>
				</tr>
				<tr>
					<td class="tg-xeyn" style="font-size:14px;font-weight: ">Ada</td>
					<td class="tg-xeyn" style="font-size:14px;font-weight: ">Tidak</td>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td class="tg-2c25" style="font-size:14px;font-weight: ; padding: 4;">1</td>
					<td class="tg-2c25" style="font-size:14px;font-weight: ; padding: 4;">Tanaman plastik/hidup</td>
					<td class="tg-2c25" style="font-size:14px;font-weight: ; padding: 4;"><?php if($q->O1 =="Ada"){ ?> <img src="uploadfile/pngegg.png" width="20">  <?php }else{ ?>  <?php } ?></td>
					<td class="tg-2c25" style="font-size:14px;font-weight: ; padding: 4;"><?php if($q->O1 =="Tidak Ada"){ ?> <img src="uploadfile/pngegg.png" width="20">  <?php }else{ ?>  <?php } ?></td>
					<td class="tg-2c25" style="font-size:14px;font-weight: ; padding: 4;">1. Segar &amp; terawat</td>
					<td class="tg-2c25" style="font-size:14px;font-weight: ; padding: 4;"><?php if($q->K1 =="Segar & terawat"){ ?> <img src="uploadfile/pngegg.png" width="20">  <?php }else{ ?>  <?php } ?></td>
				</tr>
				<tr>
					<td class="tg-2c25" style="font-size:14px;font-weight: ; padding: 4;"></td>
					<td class="tg-2c25" style="font-size:14px;font-weight: ; padding: 4;"></td>
					<td class="tg-2c25" style="font-size:14px;font-weight: ; padding: 4;"></td>
					<td class="tg-2c25" style="font-size:14px;font-weight: ; padding: 4;"></td>
					<td class="tg-2c25" style="font-size:14px;font-weight: ; padding: 4;">2. Layu</td>
					<td class="tg-2c25" style="font-size:14px;font-weight: ; padding: 4;"><?php if($q->K1 =="Layu"){ ?> <img src="uploadfile/pngegg.png" width="20">  <?php }else{ ?>  <?php } ?></td>
				</tr>
				<tr>
					<td class="tg-2c25" style="font-size:14px;font-weight: ; padding: 4;"></td>
					<td class="tg-2c25" style="font-size:14px;font-weight: ; padding: 4;"></td>
					<td class="tg-2c25" style="font-size:14px;font-weight: ; padding: 4;"></td>
					<td class="tg-2c25" style="font-size:14px;font-weight: ; padding: 4;"></td>
					<td class="tg-2c25" style="font-size:14px;font-weight: ; padding: 4;">3. Berdebu</td>
					<td class="tg-2c25" style="font-size:14px;font-weight: ; padding: 4;"><?php if($q->K1 =="Berdebu"){ ?> <img src="uploadfile/pngegg.png" width="20">  <?php }else{ ?>  <?php } ?></td>
				</tr>
				<tr>
					<td class="tg-2c25" style="font-size:14px;font-weight: ; padding: 4;"></td>
					<td class="tg-2c25" style="font-size:14px;font-weight: ; padding: 4;"></td>
					<td class="tg-2c25" style="font-size:14px;font-weight: ; padding: 4;"></td>
					<td class="tg-2c25" style="font-size:14px;font-weight: ; padding: 4;"></td>
					<td class="tg-2c25" style="font-size:14px;font-weight: ; padding: 4;">4. Kering</td>
					<td class="tg-2c25" style="font-size:14px;font-weight: ; padding: 4;"><?php if($q->K1 =="Kering"){ ?> <img src="uploadfile/pngegg.png" width="20">  <?php }else{ ?>  <?php } ?></td>
				</tr>
				<tr>
					<td class="tg-2c25" style="font-size:14px;font-weight: ; padding: 4;"></td>
					<td class="tg-2c25" style="font-size:14px;font-weight: ; padding: 4;"></td>
					<td class="tg-2c25" style="font-size:14px;font-weight: ; padding: 4;"></td>
					<td class="tg-2c25" style="font-size:14px;font-weight: ; padding: 4;"></td>
					<td class="tg-2c25" style="font-size:14px;font-weight: ; padding: 4;"></td>
					<td class="tg-2c25" style="font-size:14px;font-weight: ; padding: 4;"></td>
				</tr>
				<tr>
					<td class="tg-2c25" style="font-size:14px;font-weight: ; padding: 4;">2</td>
					<td class="tg-2c25" style="font-size:14px;font-weight: ; padding: 4;">Kursi Tunggu Nasabah</td>
					<td class="tg-2c25" style="font-size:14px;font-weight: ; padding: 4;"><?php if($q->O2 =="Ada"){ ?> <img src="uploadfile/pngegg.png" width="20">  <?php }else{ ?>  <?php } ?></td>
					<td class="tg-2c25" style="font-size:14px;font-weight: ; padding: 4;"><?php if($q->O2 =="Tidak Ada"){ ?> <img src="uploadfile/pngegg.png" width="20">  <?php }else{ ?>  <?php } ?></td>
					<td class="tg-2c25" style="font-size:14px;font-weight: ; padding: 4;">1. Bersih &amp; terawat</td>
					<td class="tg-2c25" style="font-size:14px;font-weight: ; padding: 4;"><?php if($q->K2 =="Bersih & terawat"){ ?> <img src="uploadfile/pngegg.png" width="20">  <?php }else{ ?>  <?php } ?></td>
				</tr>
				<tr>
					<td class="tg-2c25" style="font-size:14px;font-weight: ; padding: 4;"></td>
					<td class="tg-2c25" style="font-size:14px;font-weight: ; padding: 4;"></td>
					<td class="tg-2c25" style="font-size:14px;font-weight: ; padding: 4;"></td>
					<td class="tg-2c25" style="font-size:14px;font-weight: ; padding: 4;"></td>
					<td class="tg-2c25" style="font-size:14px;font-weight: ; padding: 4;">2. Kotor/sobek</td>
					<td class="tg-2c25" style="font-size:14px;font-weight: ; padding: 4;"><?php if($q->K2 =="Kotor/sobek"){ ?> <img src="uploadfile/pngegg.png" width="20">  <?php }else{ ?>  <?php } ?></td>
				</tr>
				<tr>
					<td class="tg-2c25" style="font-size:14px;font-weight: ; padding: 4;"></td>
					<td class="tg-2c25" style="font-size:14px;font-weight: ; padding: 4;"></td>
					<td class="tg-2c25" style="font-size:14px;font-weight: ; padding: 4;"></td>
					<td class="tg-2c25" style="font-size:14px;font-weight: ; padding: 4;"></td>
					<td class="tg-2c25" style="font-size:14px;font-weight: ; padding: 4;"></td>
					<td class="tg-2c25" style="font-size:14px;font-weight: ; padding: 4;"></td>
				</tr>
				<tr>
					<td class="tg-2c25" style="font-size:14px;font-weight: ; padding: 4;">3</td>
					<td class="tg-2c25" style="font-size:14px;font-weight: ; padding: 4;">Penyejuk AC</td>
					<td class="tg-2c25" style="font-size:14px;font-weight: ; padding: 4;"><?php if($q->O3 =="Ada"){ ?> <img src="uploadfile/pngegg.png" width="20">  <?php }else{ ?>  <?php } ?></td>
					<td class="tg-2c25" style="font-size:14px;font-weight: ; padding: 4;"><?php if($q->O3 =="Tidak Ada"){ ?> <img src="uploadfile/pngegg.png" width="20">  <?php }else{ ?>  <?php } ?></td>
					<td class="tg-2c25" style="font-size:14px;font-weight: ; padding: 4;">1. Berfungsi</td>
					<td class="tg-2c25" style="font-size:14px;font-weight: ; padding: 4;"><?php if($q->K3 =="Berfungsi"){ ?> <img src="uploadfile/pngegg.png" width="20">  <?php }else{ ?>  <?php } ?></td>
				</tr>
				<tr>
					<td class="tg-2c25" style="font-size:14px;font-weight: ; padding: 4;"></td>
					<td class="tg-2c25" style="font-size:14px;font-weight: ; padding: 4;"></td>
					<td class="tg-2c25" style="font-size:14px;font-weight: ; padding: 4;"></td>
					<td class="tg-2c25" style="font-size:14px;font-weight: ; padding: 4;"></td>
					<td class="tg-2c25" style="font-size:14px;font-weight: ; padding: 4;">2. Tidak berfungsi</td>
					<td class="tg-2c25" style="font-size:14px;font-weight: ; padding: 4;"><?php if($q->K3 =="Tidak berfungsi"){ ?> <img src="uploadfile/pngegg.png" width="20">  <?php }else{ ?>  <?php } ?></td>
				</tr>
				<tr>
					<td class="tg-2c25" style="font-size:14px;font-weight: ; padding: 4;"></td>
					<td class="tg-2c25" style="font-size:14px;font-weight: ; padding: 4;"></td>
					<td class="tg-2c25" style="font-size:14px;font-weight: ; padding: 4;"></td>
					<td class="tg-2c25" style="font-size:14px;font-weight: ; padding: 4;"></td>
					<td class="tg-2c25" style="font-size:14px;font-weight: ; padding: 4;"></td>
					<td class="tg-2c25" style="font-size:14px;font-weight: ; padding: 4;"></td>
				</tr>
				<tr>
					<td class="tg-2c25" style="font-size:14px;font-weight: ; padding: 4;">4</td>
					<td class="tg-2c25" style="font-size:14px;font-weight: ; padding: 4;">Lantai Banking Hall</td>
					<td class="tg-2c25" style="font-size:14px;font-weight: ; padding: 4;"><?php if($q->O4 =="Ada"){ ?> <img src="uploadfile/pngegg.png" width="20">  <?php }else{ ?>  <?php } ?></td>
					<td class="tg-2c25" style="font-size:14px;font-weight: ; padding: 4;"><?php if($q->O4 =="Tidak Ada"){ ?> <img src="uploadfile/pngegg.png" width="20">  <?php }else{ ?>  <?php } ?></td>
					<td class="tg-2c25" style="font-size:14px;font-weight: ; padding: 4;">1. Bersih</td>
					<td class="tg-2c25" style="font-size:14px;font-weight: ; padding: 4;"><?php if($q->K4 =="Bersih"){ ?> <img src="uploadfile/pngegg.png" width="20">  <?php }else{ ?>  <?php } ?></td>
				</tr>
				<tr>
					<td class="tg-2c25" style="font-size:14px;font-weight: ; padding: 4;"></td>
					<td class="tg-2c25" style="font-size:14px;font-weight: ; padding: 4;"></td>
					<td class="tg-2c25" style="font-size:14px;font-weight: ; padding: 4;"></td>
					<td class="tg-2c25" style="font-size:14px;font-weight: ; padding: 4;"></td>
					<td class="tg-2c25" style="font-size:14px;font-weight: ; padding: 4;">2. Kotor</td>
					<td class="tg-2c25" style="font-size:14px;font-weight: ; padding: 4;"><?php if($q->K4 =="Kotor"){ ?> <img src="uploadfile/pngegg.png" width="20">  <?php }else{ ?>  <?php } ?></td>
				</tr>
				<tr>
					<td class="tg-2c25" style="font-size:14px;font-weight: ; padding: 4;"></td>
					<td class="tg-2c25" style="font-size:14px;font-weight: ; padding: 4;"></td>
					<td class="tg-2c25" style="font-size:14px;font-weight: ; padding: 4;"></td>
					<td class="tg-2c25" style="font-size:14px;font-weight: ; padding: 4;"></td>
					<td class="tg-2c25" style="font-size:14px;font-weight: ; padding: 4;">3. Gompel</td>
					<td class="tg-2c25" style="font-size:14px;font-weight: ; padding: 4;"><?php if($q->K4 =="Gompel"){ ?> <img src="uploadfile/pngegg.png" width="20">  <?php }else{ ?>  <?php } ?></td>
				</tr>
				<tr>
					<td class="tg-2c25" style="font-size:14px;font-weight: ; padding: 4;"></td>
					<td class="tg-2c25" style="font-size:14px;font-weight: ; padding: 4;"></td>
					<td class="tg-2c25" style="font-size:14px;font-weight: ; padding: 4;"></td>
					<td class="tg-2c25" style="font-size:14px;font-weight: ; padding: 4;"></td>
					<td class="tg-2c25" style="font-size:14px;font-weight: ; padding: 4;"></td>
					<td class="tg-2c25" style="font-size:14px;font-weight: ; padding: 4;"></td>
				</tr>
				<tr>
					<td class="tg-2c25" style="font-size:14px;font-weight: ; padding: 4;">5</td>
					<td class="tg-2c25" style="font-size:14px;font-weight: ; padding: 4;">Dinding Banking Hall</td>
					<td class="tg-2c25" style="font-size:14px;font-weight: ; padding: 4;"><?php if($q->O5 =="Ada"){ ?> <img src="uploadfile/pngegg.png" width="20">  <?php }else{ ?>  <?php } ?></td>
					<td class="tg-2c25" style="font-size:14px;font-weight: ; padding: 4;"><?php if($q->O5 =="Tidak Ada"){ ?> <img src="uploadfile/pngegg.png" width="20">  <?php }else{ ?>  <?php } ?></td>
					<td class="tg-2c25" style="font-size:14px;font-weight: ; padding: 4;">1. Bersih</td>
					<td class="tg-2c25" style="font-size:14px;font-weight: ; padding: 4;"><?php if($q->K5 =="Bersih"){ ?> <img src="uploadfile/pngegg.png" width="20">  <?php }else{ ?>  <?php } ?></td>
				</tr>
				<tr>
					<td class="tg-2c25" style="font-size:14px;font-weight: ; padding: 4;"></td>
					<td class="tg-2c25" style="font-size:14px;font-weight: ; padding: 4;"></td>
					<td class="tg-2c25" style="font-size:14px;font-weight: ; padding: 4;"></td>
					<td class="tg-2c25" style="font-size:14px;font-weight: ; padding: 4;"></td>
					<td class="tg-2c25" style="font-size:14px;font-weight: ; padding: 4;">2. Kotor</td>
					<td class="tg-2c25" style="font-size:14px;font-weight: ; padding: 4;"><?php if($q->K5 =="Kotor"){ ?> <img src="uploadfile/pngegg.png" width="20">  <?php }else{ ?>  <?php } ?></td>
				</tr>
				<tr>
					<td class="tg-2c25" style="font-size:14px;font-weight: ; padding: 4;"></td>
					<td class="tg-2c25" style="font-size:14px;font-weight: ; padding: 4;"></td>
					<td class="tg-2c25" style="font-size:14px;font-weight: ; padding: 4;"></td>
					<td class="tg-2c25" style="font-size:14px;font-weight: ; padding: 4;"></td>
					<td class="tg-2c25" style="font-size:14px;font-weight: ; padding: 4;">3. Gompel/Lapuk</td>
					<td class="tg-2c25" style="font-size:14px;font-weight: ; padding: 4;"><?php if($q->K5 =="Gompel/Lapuk"){ ?> <img src="uploadfile/pngegg.png" width="20">  <?php }else{ ?>  <?php } ?></td>
				</tr>
				<tr>
					<td class="tg-2c25" style="font-size:14px;font-weight: ; padding: 4;"></td>
					<td class="tg-2c25" style="font-size:14px;font-weight: ; padding: 4;"></td>
					<td class="tg-2c25" style="font-size:14px;font-weight: ; padding: 4;"></td>
					<td class="tg-2c25" style="font-size:14px;font-weight: ; padding: 4;"></td>
					<td class="tg-2c25" style="font-size:14px;font-weight: ; padding: 4;"></td>
					<td class="tg-2c25" style="font-size:14px;font-weight: ; padding: 4;"></td>
				</tr>
				<tr>
					<td class="tg-2c25" style="font-size:14px;font-weight: ; padding: 4;">6</td>
					<td class="tg-2c25" style="font-size:14px;font-weight: ; padding: 4;">Lampu</td>
					<td class="tg-2c25" style="font-size:14px;font-weight: ; padding: 4;"><?php if($q->O6 =="Ada"){ ?> <img src="uploadfile/pngegg.png" width="20">  <?php }else{ ?>  <?php } ?></td>
					<td class="tg-2c25" style="font-size:14px;font-weight: ; padding: 4;"><?php if($q->O6 =="Tidak Ada"){ ?> <img src="uploadfile/pngegg.png" width="20">  <?php }else{ ?>  <?php } ?></td>
					<td class="tg-2c25" style="font-size:14px;font-weight: ; padding: 4;">1. Hidup</td>
					<td class="tg-2c25" style="font-size:14px;font-weight: ; padding: 4;"><?php if($q->K6 =="Hidup"){ ?> <img src="uploadfile/pngegg.png" width="20">  <?php }else{ ?>  <?php } ?></td>
				</tr>
				<tr>
					<td class="tg-2c25" style="font-size:14px;font-weight: ; padding: 4;"></td>
					<td class="tg-2c25" style="font-size:14px;font-weight: ; padding: 4;"></td>
					<td class="tg-2c25" style="font-size:14px;font-weight: ; padding: 4;"></td>
					<td class="tg-2c25" style="font-size:14px;font-weight: ; padding: 4;"></td>
					<td class="tg-2c25" style="font-size:14px;font-weight: ; padding: 4;">2. Set lampu yang seharusnya menyala tetapi mati</td>
					<td class="tg-2c25" style="font-size:14px;font-weight: ; padding: 4;"><?php if($q->K6 =="Set lampu yang seharusnya menyala tetapi mati"){ ?> <img src="uploadfile/pngegg.png" width="20">  <?php }else{ ?>  <?php } ?></td>
				</tr>
				
			</tbody>
		</table>
		<div class="row" style="text-align: right; margin-top:60px; margin-bottom: 70px; padding-left: 450px;">
			<table class="tg" >
			<tr>
				<td>Unit Umum dan Akuntansi <br> <br> <br> <br>
					&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<?= $q->nama; ?>
				</td>
			</tr>
		</table>
		</div>
		
		<?php } ?>
	</body>
</html>