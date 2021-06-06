<!DOCTYPE html>
<html>
	<head>
		<title>Laporan Checking Peralatan Layanan-Cerah</title>
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
		<center>
			<b>CHECKING PERALATAN BANKING HALL
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
					<th class="tg-2c25" width="77%" style="padding: 4;"><?= $user['kantor'] ?></th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td class="tg-2c25" style="padding: 4;"><span style="font-weight:bold">Alamat Cabang/Cabang</span></td>
					<td class="tg-xeyn" style="padding: 4;">:</td>
					<td class="tg-2c25" style="padding: 4;"><?= $user['alamat'] ?></td>
				</tr>
				<tr>
					<td class="tg-2c25" style="padding: 4;"><span style="font-weight:bold">Pelaksanaan</span></td>
					<td class="tg-xeyn" style="padding: 4;">:</td>
					<td class="tg-2c25" style="padding: 4;">Hari  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: <?= $query['hari'] ?></td>
				</tr>
				<tr>
					<td class="tg-2c25" style="padding: 4;"></td>
					<td class="tg-xeyn" style="padding: 4;"></td>
					<td class="tg-2c25" style="padding: 4;">Tanggal&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: <?= $query['tanggal'] ?></td>
				</tr>
				<tr>
					<td class="tg-2c25" style="padding: 4;"></td>
					<td class="tg-xeyn" style="padding: 4;"></td>
					<td class="tg-2c25" style="padding: 4;">Waktu Observasi&nbsp;&nbsp;: <?= $query['waktu'] ?></td>
				</tr>
				<tr>
					<td class="tg-2c25" style="padding: 4;">Nama Petugas</td>
					<td class="tg-xeyn" style="padding: 4;">:</td>
					<td class="tg-2c25" style="padding: 4;">1. <?= $query['petugas1'] ?></td>
				</tr>
				<tr>
					<td class="tg-2c25" style="padding: 4;"></td>
					<td class="tg-xeyn" style="padding: 4;"></td>
					<td class="tg-2c25" style="padding: 4;">2. <?= $query['petugas2'] ?></td>
				</tr>
			</tbody>
		</table>
		
		<table class="tg" width="100%" style="margin-top: 35px;">
			<thead>
				<tr>
					<th rowspan="2" class="tg-xeyn" style="font-size:14px;font-weight: ">No</th>
					<th rowspan="2" class="tg-xeyn" style="font-size:14px;font-weight: ">Objek Pengamatan</th>
					<th colspan="2" class="tg-xeyn" style="font-size:14px;font-weight: ">Keberadaan</th>
					<th rowspan="2" class="tg-xeyn" style="font-size:14px;font-weight: ">Kondisi Peralatan Bankink Hall <br>(Jika Ada)</th>
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
					<td class="tg-2c25" style="font-size:14px;font-weight: ; padding: 4;">Panel Valas</td>
					<td class="tg-2c25" style="font-size:14px;font-weight: ; padding: 4;"><?php if($query['O1']=="Ada"){ ?> <img src="uploadfile/pngegg.png" width="20">  <?php }else{ ?>  <?php } ?></td>
					<td class="tg-2c25" style="font-size:14px;font-weight: ; padding: 4;"><?php if($query['O1']=="Tidak Ada"){ ?> <img src="uploadfile/pngegg.png" width="20">  <?php }else{ ?>  <?php } ?></td>
					<td class="tg-2c25" style="font-size:14px;font-weight: ; padding: 4;">1. Terisi &amp; Up to date</td>
					<td class="tg-2c25" style="font-size:14px;font-weight: ; padding: 4;"><?php if($query['K1']=="Terisi & Up to date"){ ?> <img src="uploadfile/pngegg.png" width="20">  <?php }else{ ?>  <?php } ?></td>
				</tr>
				<tr>
					<td class="tg-2c25" style="font-size:14px;font-weight: ; padding: 4;"></td>
					<td class="tg-2c25" style="font-size:14px;font-weight: ; padding: 4;"></td>
					<td class="tg-2c25" style="font-size:14px;font-weight: ; padding: 4;"></td>
					<td class="tg-2c25" style="font-size:14px;font-weight: ; padding: 4;"></td>
					<td class="tg-2c25" style="font-size:14px;font-weight: ; padding: 4;">2. Terisi, tidak Up to date</td>
					<td class="tg-2c25" style="font-size:14px;font-weight: ; padding: 4;"><?php if($query['K1']=="Terisi, tidak Up to date"){ ?> <img src="uploadfile/pngegg.png" width="20">  <?php }else{ ?>  <?php } ?></td>
				</tr>
				<tr>
					<td class="tg-2c25" style="font-size:14px;font-weight: ; padding: 4;"></td>
					<td class="tg-2c25" style="font-size:14px;font-weight: ; padding: 4;"></td>
					<td class="tg-2c25" style="font-size:14px;font-weight: ; padding: 4;"></td>
					<td class="tg-2c25" style="font-size:14px;font-weight: ; padding: 4;"></td>
					<td class="tg-2c25" style="font-size:14px;font-weight: ; padding: 4;">3. Kosong</td>
					<td class="tg-2c25" style="font-size:14px;font-weight: ; padding: 4;"><?php if($query['K1']=="Kosong"){ ?> <img src="uploadfile/pngegg.png" width="20">  <?php }else{ ?>  <?php } ?></td>
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
					<td class="tg-2c25" style="font-size:14px;font-weight: ; padding: 4;">Panel Suku Bunga</td>
					<td class="tg-2c25" style="font-size:14px;font-weight: ; padding: 4;"><?php if($query['O2']=="Ada"){ ?> <img src="uploadfile/pngegg.png" width="20">  <?php }else{ ?>  <?php } ?></td>
					<td class="tg-2c25" style="font-size:14px;font-weight: ; padding: 4;"><?php if($query['O2']=="Tidak Ada"){ ?> <img src="uploadfile/pngegg.png" width="20">  <?php }else{ ?>  <?php } ?></td>
					<td class="tg-2c25" style="font-size:14px;font-weight: ; padding: 4;">1. Terisi &amp; Up to date</td>
					<td class="tg-2c25" style="font-size:14px;font-weight: ; padding: 4;"><?php if($query['K2']=="Terisi & Up to date"){ ?> <img src="uploadfile/pngegg.png" width="20">  <?php }else{ ?>  <?php } ?></td>
				</tr>
				<tr>
					<td class="tg-2c25" style="font-size:14px;font-weight: ; padding: 4;"></td>
					<td class="tg-2c25" style="font-size:14px;font-weight: ; padding: 4;"></td>
					<td class="tg-2c25" style="font-size:14px;font-weight: ; padding: 4;"></td>
					<td class="tg-2c25" style="font-size:14px;font-weight: ; padding: 4;"></td>
					<td class="tg-2c25" style="font-size:14px;font-weight: ; padding: 4;">2. Kosong</td>
					<td class="tg-2c25" style="font-size:14px;font-weight: ; padding: 4;"><?php if($query['K2']=="Kosong"){ ?> <img src="uploadfile/pngegg.png" width="20">  <?php }else{ ?>  <?php } ?></td>
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
					<td class="tg-2c25" style="font-size:14px;font-weight: ; padding: 4;">Tempat Sampah</td>
					<td class="tg-2c25" style="font-size:14px;font-weight: ; padding: 4;"><?php if($query['O3']=="Ada"){ ?> <img src="uploadfile/pngegg.png" width="20">  <?php }else{ ?>  <?php } ?></td>
					<td class="tg-2c25" style="font-size:14px;font-weight: ; padding: 4;"><?php if($query['O3']=="Tidak Ada"){ ?> <img src="uploadfile/pngegg.png" width="20">  <?php }else{ ?>  <?php } ?></td>
					<td class="tg-2c25" style="font-size:14px;font-weight: ; padding: 4;">1. Rapi &amp; Bersih</td>
					<td class="tg-2c25" style="font-size:14px;font-weight: ; padding: 4;"><?php if($query['K3']=="Rapi & bersih"){ ?> <img src="uploadfile/pngegg.png" width="20">  <?php }else{ ?>  <?php } ?></td>
				</tr>
				<tr>
					<td class="tg-2c25" style="font-size:14px;font-weight: ; padding: 4;"></td>
					<td class="tg-2c25" style="font-size:14px;font-weight: ; padding: 4;"></td>
					<td class="tg-2c25" style="font-size:14px;font-weight: ; padding: 4;"></td>
					<td class="tg-2c25" style="font-size:14px;font-weight: ; padding: 4;"></td>
					<td class="tg-2c25" style="font-size:14px;font-weight: ; padding: 4;">2. Kotor/Rusak</td>
					<td class="tg-2c25" style="font-size:14px;font-weight: ; padding: 4;"><?php if($query['K3']=="Kotor/rusak"){ ?> <img src="uploadfile/pngegg.png" width="20">  <?php }else{ ?>  <?php } ?></td>
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
					<td class="tg-2c25" style="font-size:14px;font-weight: ; padding: 4;">Rak Brosur</td>
					<td class="tg-2c25" style="font-size:14px;font-weight: ; padding: 4;"><?php if($query['O4']=="Ada"){ ?> <img src="uploadfile/pngegg.png" width="20">  <?php }else{ ?>  <?php } ?></td>
					<td class="tg-2c25" style="font-size:14px;font-weight: ; padding: 4;"><?php if($query['O4']=="Tidak Ada"){ ?> <img src="uploadfile/pngegg.png" width="20">  <?php }else{ ?>  <?php } ?></td>
					<td class="tg-2c25" style="font-size:14px;font-weight: ; padding: 4;">1. Rapi &amp; Bersih</td>
					<td class="tg-2c25" style="font-size:14px;font-weight: ; padding: 4;"><?php if($query['K4']=="Rapi & bersih"){ ?> <img src="uploadfile/pngegg.png" width="20">  <?php }else{ ?>  <?php } ?></td>
				</tr>
				<tr>
					<td class="tg-2c25" style="font-size:14px;font-weight: ; padding: 4;"></td>
					<td class="tg-2c25" style="font-size:14px;font-weight: ; padding: 4;"></td>
					<td class="tg-2c25" style="font-size:14px;font-weight: ; padding: 4;"></td>
					<td class="tg-2c25" style="font-size:14px;font-weight: ; padding: 4;"></td>
					<td class="tg-2c25" style="font-size:14px;font-weight: ; padding: 4;">2. Kotor/Rusak</td>
					<td class="tg-2c25" style="font-size:14px;font-weight: ; padding: 4;"><?php if($query['K4']=="Kotor/rusak"){ ?> <img src="uploadfile/pngegg.png" width="20">  <?php }else{ ?>  <?php } ?></td>
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
					<td class="tg-2c25" style="font-size:14px;font-weight: ; padding: 4;">Brosur</td>
					<td class="tg-2c25" style="font-size:14px;font-weight: ; padding: 4;"><?php if($query['O5']=="Ada"){ ?> <img src="uploadfile/pngegg.png" width="20">  <?php }else{ ?>  <?php } ?></td>
					<td class="tg-2c25" style="font-size:14px;font-weight: ; padding: 4;"><?php if($query['O5']=="Tidak Ada"){ ?> <img src="uploadfile/pngegg.png" width="20">  <?php }else{ ?>  <?php } ?></td>
					<td class="tg-2c25" style="font-size:14px;font-weight: ; padding: 4;">1. Rapi</td>
					<td class="tg-2c25" style="font-size:14px;font-weight: ; padding: 4;"><?php if($query['K5']=="Rapi"){ ?> <img src="uploadfile/pngegg.png" width="20">  <?php }else{ ?>  <?php } ?></td>
				</tr>
				<tr>
					<td class="tg-2c25" style="font-size:14px;font-weight: ; padding: 4;"></td>
					<td class="tg-2c25" style="font-size:14px;font-weight: ; padding: 4;"></td>
					<td class="tg-2c25" style="font-size:14px;font-weight: ; padding: 4;"></td>
					<td class="tg-2c25" style="font-size:14px;font-weight: ; padding: 4;"></td>
					<td class="tg-2c25" style="font-size:14px;font-weight: ; padding: 4;">2. Berantakan</td>
					<td class="tg-2c25" style="font-size:14px;font-weight: ; padding: 4;"><?php if($query['K5']=="Berantakan"){ ?> <img src="uploadfile/pngegg.png" width="20">  <?php }else{ ?>  <?php } ?></td>
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
					<td class="tg-2c25" style="font-size:14px;font-weight: ; padding: 4;">Writing Desk</td>
					<td class="tg-2c25" style="font-size:14px;font-weight: ; padding: 4;"><?php if($query['O6']=="Ada"){ ?> <img src="uploadfile/pngegg.png" width="20">  <?php }else{ ?>  <?php } ?></td>
					<td class="tg-2c25" style="font-size:14px;font-weight: ; padding: 4;"><?php if($query['O6']=="Tidak Ada"){ ?> <img src="uploadfile/pngegg.png" width="20">  <?php }else{ ?>  <?php } ?></td>
					<td class="tg-2c25" style="font-size:14px;font-weight: ; padding: 4;">1. Rapi &amp; Bersih</td>
					<td class="tg-2c25" style="font-size:14px;font-weight: ; padding: 4;"><?php if($query['K6']=="Rapi & bersih"){ ?> <img src="uploadfile/pngegg.png" width="20">  <?php }else{ ?>  <?php } ?></td>
				</tr>
				<tr>
					<td class="tg-2c25" style="font-size:14px;font-weight: ; padding: 4;"></td>
					<td class="tg-2c25" style="font-size:14px;font-weight: ; padding: 4;"></td>
					<td class="tg-2c25" style="font-size:14px;font-weight: ; padding: 4;"></td>
					<td class="tg-2c25" style="font-size:14px;font-weight: ; padding: 4;"></td>
					<td class="tg-2c25" style="font-size:14px;font-weight: ; padding: 4;">2. Kotor/Rusak</td>
					<td class="tg-2c25" style="font-size:14px;font-weight: ; padding: 4;"><?php if($query['K6']=="Kotor/rusak"){ ?> <img src="uploadfile/pngegg.png" width="20">  <?php }else{ ?>  <?php } ?></td>
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
					<td class="tg-2c25" style="font-size:14px;font-weight: ; padding: 4;">7</td>
					<td class="tg-2c25" style="font-size:14px;font-weight: ; padding: 4;">Slip Transaksi</td>
					<td class="tg-2c25" style="font-size:14px;font-weight: ; padding: 4;"><?php if($query['O7']=="Ada"){ ?> <img src="uploadfile/pngegg.png" width="20">  <?php }else{ ?>  <?php } ?></td>
					<td class="tg-2c25" style="font-size:14px;font-weight: ; padding: 4;"><?php if($query['O7']=="Tidak Ada"){ ?> <img src="uploadfile/pngegg.png" width="20">  <?php }else{ ?>  <?php } ?></td>
					<td class="tg-2c25" style="font-size:14px;font-weight: ; padding: 4;">1. Rapi &amp; Berish</td>
					<td class="tg-2c25" style="font-size:14px;font-weight: ; padding: 4;"><?php if($query['K7']=="Rapi & bersih"){ ?> <img src="uploadfile/pngegg.png" width="20">  <?php }else{ ?>  <?php } ?></td>
				</tr>
				<tr>
					<td class="tg-2c25" style="font-size:14px;font-weight: ; padding: 4;"></td>
					<td class="tg-2c25" style="font-size:14px;font-weight: ; padding: 4;"></td>
					<td class="tg-2c25" style="font-size:14px;font-weight: ; padding: 4;"></td>
					<td class="tg-2c25" style="font-size:14px;font-weight: ; padding: 4;"></td>
					<td class="tg-2c25" style="font-size:14px;font-weight: ; padding: 4;">2. Slip Tercampur-campur</td>
					<td class="tg-2c25" style="font-size:14px;font-weight: ; padding: 4;"><?php if($query['K7']=="Slip tercampur-campur"){ ?> <img src="uploadfile/pngegg.png" width="20">  <?php }else{ ?>  <?php } ?></td>
				</tr>
				<tr>
					<td class="tg-2c25" style="font-size:14px;font-weight: ; padding: 4;"></td>
					<td class="tg-2c25" style="font-size:14px;font-weight: ; padding: 4;"></td>
					<td class="tg-2c25" style="font-size:14px;font-weight: ; padding: 4;"></td>
					<td class="tg-2c25" style="font-size:14px;font-weight: ; padding: 4;"></td>
					<td class="tg-2c25" style="font-size:14px;font-weight: ; padding: 4;">3. Slip Berantakan</td>
					<td class="tg-2c25" style="font-size:14px;font-weight: ; padding: 4;"><?php if($query['K7']=="Slip berantakan"){ ?> <img src="uploadfile/pngegg.png" width="20">  <?php }else{ ?>  <?php } ?></td>
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
					<td class="tg-2c25" style="font-size:14px;font-weight: ; padding: 4;">8</td>
					<td class="tg-2c25" style="font-size:14px;font-weight: ; padding: 4;">Alat Tulis/Pena</td>
					<td class="tg-2c25" style="font-size:14px;font-weight: ; padding: 4;"><?php if($query['O8']=="Ada"){ ?> <img src="uploadfile/pngegg.png" width="20">  <?php }else{ ?>  <?php } ?></td>
					<td class="tg-2c25" style="font-size:14px;font-weight: ; padding: 4;"><?php if($query['O8']=="Tidak Ada"){ ?> <img src="uploadfile/pngegg.png" width="20">  <?php }else{ ?>  <?php } ?></td>
					<td class="tg-2c25" style="font-size:14px;font-weight: ; padding: 4;">1. Berfungsi</td>
					<td class="tg-2c25" style="font-size:14px;font-weight: ; padding: 4;"><?php if($query['K8']=="Berfungsi"){ ?> <img src="uploadfile/pngegg.png" width="20">  <?php }else{ ?>  <?php } ?></td>
				</tr>
				<tr>
					<td class="tg-2c25" style="font-size:14px;font-weight: ; padding: 4;"></td>
					<td class="tg-2c25" style="font-size:14px;font-weight: ; padding: 4;"></td>
					<td class="tg-2c25" style="font-size:14px;font-weight: ; padding: 4;"></td>
					<td class="tg-2c25" style="font-size:14px;font-weight: ; padding: 4;"></td>
					<td class="tg-2c25" style="font-size:14px;font-weight: ; padding: 4;">2. Tidak Berfungsi</td>
					<td class="tg-2c25" style="font-size:14px;font-weight: ; padding: 4;"><?php if($query['K8']=="Tidak berfungsi"){ ?> <img src="uploadfile/pngegg.png" width="20">  <?php }else{ ?>  <?php } ?></td>
				</tr>
			</tbody>
		</table>
		<table class="tg" style="margin-top: 40px; position: absolute; right: 150;">
			<tr>
				<td>Unit Umum dan Akuntansi <br> <br> <br> <br>
					&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<?= $user['nama']; ?>
				</td>
			</tr>
		</table>
	</body>
</html>