<!doctype html>
<html>
<head>
	<link rel="icon" href="favicon.ico" type="image/x-icon">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<meta charset="utf-8" name="viewport" content="width=device-width">
<title>öğrencileri listele/güncelle</title>
<link rel="stylesheet" href="<?php echo base_url('assets/css/stil_anasayfa_admin.css');?>">
<link rel="stylesheet" href="<?php echo base_url('assets/css/listele.css');?>">
<link rel="stylesheet" href="<?php echo base_url('assets/css/stil_odalar.css');?>">
<link rel="stylesheet" href="<?php echo base_url('assets/css/borclar.css');?>">

</head>
<body>
<div class="wrap">
<nav>
  <ul class="primary">
    <li>
      <a>Ana Sayfa</a>      
    </li>
    <li>
      <a>Öğrenci işlemleri</a>
      <ul class="sub">
        <li><a href="<?php echo base_url('anasayfa/ogrenciekle');?>">Öğrenci Kaydı Ekle</a></li>
        <li><a href="<?php echo base_url('anasayfa/ogrenciler');?>">Öğrencileri Listele/Güncelle </a></li>
		    <li><a href="<?php echo base_url('anasayfa/odalar');?>">Odalar </a></li>
      </ul>
    </li>
    <li>
      <a>ÖDEME İŞLEMLERİ</a>
      <ul class="sub">
      <li><a href="<?php echo base_url('anasayfa/borclar');?>">Beklenen Borçlar</a></li>
      </ul>  
    </li>
    <li>
      <a>YÖNETİCİ İŞLEMLERİ</a>
      <ul class="sub">
		<li><a href="<?php echo base_url('anasayfa/yoneticiekle');?>">Yönetici Ekle</a></li>
        <li><a href="<?php echo base_url('anasayfa/yoneticiler');?>">Yöneticileri Listele</a></li> 
		</ul>	
    </li>
    <li>
      <a href="<?php echo base_url('anasayfa/index');?>">ÇIKIŞ</a>      
    </li>
  </ul>
</nav>


	<div class="ortasayfa">
		<div class="table1">
      <?php if($this->session->userdata('durum')){ ?>
		<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">#</th>    
      <th scope="col">Ad</th>
      <th scope="col">Soyad</th>
	  <th scope="col">Doğum Tarihi</th>
	  <th scope="col">TC NO</th>
	  <th scope="col">Yurt Ücreti</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach($bilgi as $bilgi){?>
    <tr>
        <th scope="row"><?php echo $bilgi->odeme_id?></th>
        <td><?php echo $bilgi->ogr_ad?></td>
        <td><?php echo $bilgi->ogr_soyad?></td>
	    <td><?php echo $bilgi->ogr_dg?></td>
		<td><?php echo $bilgi->ogr_tcNo?></td>
		<td><?php echo $bilgi->yurt_ucreti?></td>
      <td>
	</td>
    </tr>
    <?php } ?>
  </tbody>
</table>
<?php } ?>	
		</div>
      </div>
    &nbsp;</div>	
</body>
</html>
