<!doctype html>
<html>
<head>
	<link rel="icon" href="favicon.ico" type="image/x-icon">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<meta charset="utf-8" name="viewport" content="width=device-width">
	<link rel="icon" href="favicon.ico" type="image/x-icon">
<title>Öğrenci kaydı ekle</title>
	<link rel="stylesheet" href="<?php echo base_url('assets/css//admin_yonetici_listele.css');?>">
</head>
<?php echo $this->session->flashdata('sonuc'); ?>
<body>
<div></div>
	<div class="wrap">
  <nav>
  <ul class="primary">
    <li>
      <a href="<?php echo base_url('anasayfa/admin_anasayfa');?>">Ana Sayfa</a>      
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
    <?php foreach($veri as $veri){?>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">kullanıcı adı&nbsp;</th>    
      <th scope="col">Yurt Adı</th>
		 <th scope="col">Sil</th>	 	
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row"><?php echo $veri->y_id;?></th>
      <td><?php echo $veri->y_username;?></td>
      <td><?php echo $veri->yurt_ad;?></td>
		  <td><a href="<?php echo base_url('anasayfa/yoneticisil/'.$veri->y_id.'/y_id/yoneticiler');?>"><button type="button" class="btn btn-danger"><i class="fa fa-remove">Sil</i></button></a></td> 
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