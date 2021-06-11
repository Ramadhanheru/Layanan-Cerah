<!DOCTYPE html>
<html>
  <head>
    <title>Report Briefing Layanan-Cerah App</title>
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
    <h2>Laporan Briefing Kantor Cabang <br> Layanan - Cerah By Bank SUMSEL BABEL </h2>
    </center>
    <small>Dicetak Pada Tanggal : <?= date('d M Y');?></small>
    <table class="tg" width="100%" >
      <thead>
        <tr>
          <th class="tg-xpd4">No</th>
          <th class="tg-xpd4">Kantor</th>
          <th class="tg-xpd4">Tanggal</th>
          <th class="tg-xpd4">Morning Briefing</th>
          <th class="tg-xpd4">Waktu</th>
          <th class="tg-xpd4">Foto</th>
          <th class="tg-xpd4">Afternoon Briefing</th>
          <th class="tg-xpd4">Waktu</th>
          <th class="tg-xpd4">Foto</th>
          <th class="tg-xpd4">Keterangan</th>
        </tr>
      </thead>
      <tbody>
        <?php
        $no=1;
        foreach($query->result() as $q) { ?>
        <tr>
          <td class="tg-orf0"><?= $no; ?></td>
          <td class="tg-orf0"><?= $q->kantor; ?></td>
          <td class="tg-orf0"><?= $q->tanggal; ?></td>
          <td class="tg-orf0"><?= $q->morning; ?></td>
          <td class="tg-orf0"><?= $q->waktu1; ?></td>
          <td class="tg-orf0"><img src="uploadfile/<?=$q->foto1; ?>" width="100"></td>
          <td class="tg-orf0"><?= $q->afternoon; ?></td>
          <td class="tg-orf0"><?= $q->waktu2; ?></td>
          <td class="tg-orf0"><img src="uploadfile/<?=$q->foto2; ?>" width="100"></td>
          <td class="tg-orf0"><span class="text-danger"><?= $q->keterangan; ?></span></td>
        </tr>
        <?php $no++;} ?>
      </tbody>
    </table>
  </body>
</html>