<!DOCTYPE html>
<html>
<head>
	<title>Laporan Monitoring Briefing Layanan-Cerah</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<style type="text/css">
.tg  {border-collapse:collapse;border-spacing:0;}
.tg td{border-color:black;border-style:solid;border-width:1px;font-family:Arial, sans-serif;font-size:14px;
  overflow:hidden;padding:10px 5px;word-break:normal;}
.tg th{border-color:black;border-style:solid;border-width:1px;font-family:Arial, sans-serif;font-size:14px;
  font-weight:normal;overflow:hidden;padding:10px 5px;word-break:normal;}
.tg .tg-tmw7{background-color:#7497fc;border-color:inherit;font-family:"Arial Black", Gadget, sans-serif !important;;
  font-weight:bold;text-align:center;vertical-align:middle}
.tg .tg-llyw{background-color:#c0c0c0;border-color:inherit;text-align:left;vertical-align:top}
.tg .tg-fz5k{background-color:#c0c0c0;border-color:inherit;font-family:"Arial Black", Gadget, sans-serif !important;;
  font-weight:bold;text-align:center;vertical-align:middle}
.tg .tg-xrrm{border-color:inherit;font-family:"Arial Black", Gadget, sans-serif !important;;font-weight:bold;text-align:center;
  vertical-align:middle}
.tg .tg-0pky{border-color:inherit;text-align:left;vertical-align:top}

div.b {
  position: absolute;
  left: auto;
}
</style>
<body>
	<center>

		<b>FORM MONITORING <br>
		MORNING BRIEFING DAN AFTERNOON BRIEFING
		 <br>
<div class="row" style="margin-top: 35px;" >
	<div class="b">
		CABANG&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: &nbsp; 
		<?= $user['kantor']; ?>
	</div>
</div> <br>
<div class="row"style="margin-top: 35px;">
	<div class="b">
		BULAN/TAHUN&nbsp;: &nbsp;
		<?php 
		$date=date_create($bulan);
		echo date_format($date,"m-Y"); ?>
	</div>
</div>
</b>
		<table class="tg" style="margin-top: 70px;">
<thead>
  <tr>
    <th class="tg-fz5k" rowspan="2">Tanggal</th>
    <th class="tg-fz5k" colspan="2">Morning Briefing</th>
    <th class="tg-tmw7" rowspan="2">Keterangan (Jika Tidak)</th>
    <th class="tg-fz5k" colspan="2">Afternoon Briefing</th>
    <th class="tg-tmw7" rowspan="2">Keterangan (Jika Tidak)</th>
  </tr>
  <tr>
    <td class="tg-xrrm">Ya</td>
    <td class="tg-xrrm">Tidak</td>
    <td class="tg-xrrm">Ya</td>
    <td class="tg-xrrm">Tidak</td>
  </tr>
</thead>
<tbody>
	<?php foreach($query->result() as $q) { ?>
  <tr>
    <td class="tg-llyw"><?= $q->tanggal; ?></td>
    <td class="tg-0pky"><?php if($q->morning=="Ya"){ ?> <img src="uploadfile/pngegg.png" width="20">  <?php }else{ ?>  <?php } ?></td>
    <td class="tg-0pky"><?php if($q->morning=="Tidak"){ ?> <img src="uploadfile/pngegg.png" width="20"><?php }else{ ?>  <?php } ?></td>
    <td class="tg-0pky"><?= $q->keterangan; ?></td>
    <td class="tg-0pky"><?php if($q->afternoon=="Ya"){ ?> <img src="uploadfile/pngegg.png" width="20"> <?php }else{ ?>  <?php } ?></td>
    <td class="tg-0pky"><?php if($q->afternoon=="Tidak"){ ?> <img src="uploadfile/pngegg.png" width="20"> <?php }else{ ?>  <?php } ?></td>
    <td class="tg-0pky"><?= $q->keterangan; ?></td>
  </tr>
<?php } ?>
</tbody>
</table>

	</center>

<table class="tg" style="margin-top: 25px; position: absolute; right: 180;">
	<tr>
		<td>Unit Umum dan Akuntansi <br> <br> <br> <br>
			&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<?= $user['nama']; ?>
		</td>
	</tr>
</table>



</body>
</html>