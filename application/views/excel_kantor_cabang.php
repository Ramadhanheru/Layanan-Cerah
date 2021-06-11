<?php 
header("Cache-Control: no-chace, must-revalidate");
header("Pragma: no-cache");
header("Content-type: application/x-msexcel");
header("Content-type: application/octet-stream");
header("Content-Disposition: attachment; filename=Report Pengguna Layanan-Cerah.xls");
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Report Pengguna Layanan-Cerah App</title>

	<style type="text/css">
.tg  {border-collapse:collapse;border-spacing:0;}
.tg td{border-color:black;border-style:solid;border-width:1px;font-family:Arial, sans-serif;font-size:14px;
  overflow:hidden;padding:10px 5px;word-break:normal;}
.tg th{border-color:black;border-style:solid;border-width:1px;font-family:Arial, sans-serif;font-size:14px;
  font-weight:normal;overflow:hidden;padding:10px 5px;word-break:normal;}
.tg .tg-xpd4{background-color:#4575ff;font-family:"Arial Black", Gadget, sans-serif !important;;text-align:left;vertical-align:top; font-weight: bold; text-align: center;}
.tg .tg-0lax{text-align:left;vertical-align:top}
.tg .tg-orf0{font-family:"Arial Black", Gadget, sans-serif !important;;text-align:left;vertical-align:top}
</style>
</head>
<body>
	<center>
		<h2>Laporan Pengguna Kantor Cabang <br> Layanan - Cerah By Bank SUMSEL BABEL </h2>

	</center>
	<small>Dicetak Pada Tanggal : <?= date('d M Y');?></small>
<table class="tg" >
<thead>
  <tr>
    <th class="tg-xpd4">No</th>
    <th class="tg-xpd4">Username</th>
    <th class="tg-xpd4">Nama Pengguna</th>
    <th class="tg-xpd4">Unit Kerja</th>
    <th class="tg-xpd4">Kantor Cabang</th>
    <th class="tg-xpd4">Alamat Kantor</th>
    <th class="tg-xpd4">Foto</th>
  </tr>
</thead>
<tbody>
  	<?php
     $no=1;
     foreach($query->result() as $q) { ?>
    <tr>
        <td class="tg-orf0"><?= $no; ?></td>
        <td class="tg-orf0"><?= $q->username; ?></td>
        <td class="tg-orf0"><?= $q->nama; ?></td>
        <td class="tg-orf0"><?= $q->unit; ?></td>
        <td class="tg-orf0"><?= $q->kantor; ?></td>
        <td class="tg-orf0"><?= $q->alamat; ?></td>

    <td class="tg-orf0" style="text-align: center;"><img src="uploadfile/<?= $q->foto; ?>" width="100"></td>
  </tr>
  <?php $no++;} ?>
</tbody>
</table>
</body>
</html>