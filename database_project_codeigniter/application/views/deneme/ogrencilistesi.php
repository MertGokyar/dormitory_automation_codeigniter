<!doctype html>
<html>
<head>
	<link rel="icon" href="favicon.ico" type="image/x-icon">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<meta charset="utf-8" name="viewport" content="width=device-width">
<title>öğrencileri listele/güncelle</title>
<link rel="stylesheet" href="<?php echo base_url('assets/css/stil_anasayfa_admin.css');?>">
<link rel="stylesheet" href="<?php echo base_url('assets/css/listele.css');?>">
</head>
<?php echo $this->session->flashdata('sonuc'); ?>
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
    <th scope="col">ID</th>    
    <th scope="col">Ad</th>
    <th scope="col">Soyad</th>
	<th scope="col">Doğum T.</th>
	<th scope="col">Mail</th>
	<th scope="col">Veli Ad</th>
	<th scope="col">Veli Tel</th>
    <th scope="col">Veli Adres</th>
	<th scope="col">Oda Adı&nbsp;</th>
	<th scope="col">Bölüm Adı</th>
	<th scope="col">TC NO</th>
	<th scope="col">Tel No&nbsp;</th>
	<th scope="col">İşlemler&nbsp;</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach($bilgi as $bilgi){?>
    <tr>
    <th scope="row"><?php echo $bilgi->ogr_id;?></th>
    <td><?php echo $bilgi->ogr_ad;?></td>
    <td><?php echo $bilgi->ogr_soyad;?></td>
	<td><?php echo $bilgi->ogr_dg;?></td>
	<td><?php echo $bilgi->ogr_mail;?></td>
	<td><?php echo $bilgi->ogr_veliAd;?></td>
	<td><?php echo $bilgi->ogr_veliTel;?></td>
    <td><?php echo $bilgi->ogr_veliAdres;?></td>
	<td><?php echo $bilgi->oda_id;?></td>
	<td><?php echo $bilgi->bolum_id;?></td>
	<td><?php echo $bilgi->ogr_tcNo;?></td>
    <td><?php echo $bilgi->ogr_telNo;?></td>
	<td>
      <a href="<?php echo base_url('anasayfa/ogrenci_guncelle/'.$bilgi->ogr_id.'');?>"><button type="button" class="btn btn-warning"><i class="fa-thin fa-pencil">Güncelle</i></button></a>
      <a href="<?php echo base_url('anasayfa/sil/'.$bilgi->ogr_id.'/ogr_id/ogrenciler');?>"><button type="button" class="btn btn-danger"><i class="fa fa-remove">Sil</i></button></a>
    </td>
      <td>
		</td>
    </tr>
    <?php } ?>
  </tbody>
</table>
<?php } ?>		
		</div> 
      </div>&nbsp;</div>	
</body>
</html>
