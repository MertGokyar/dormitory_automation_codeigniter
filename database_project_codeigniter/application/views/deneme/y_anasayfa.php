<!doctype html>
<html>
<head>
<link rel="icon" href="favicon.ico" type="image/x-icon">
<title>Yönetici Anasayfa</title>
	<link rel="stylesheet" href="<?php echo base_url('assets/css/yönetici_anasayfa.css');?>">
</head>
<body>
<div></div>
	<div class="wrap">
    <nav>
  <ul class="primary">
    <li>
      <a href="<?php echo base_url('anasayfa/y_anasayfa');?>">Ana Sayfa</a>      
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
      <a href="<?php echo base_url('anasayfa/index');?>">ÇIKIŞ</a>      
    </li>
  </ul>
</nav>

	<div class="ortasayfa">	
		<div class="biz"> 
		2011307083 GÖKDENİZ YILMAZ <br>
		201307051  MERT GÖKYAR     <br>
		201307018  SENA DEMİRBAŞ
		</div>
	  <div class="koü">
		<img src="<?php echo base_url('assets/css/unilogo.png');?>" width="300" height="298" alt=""/>
		</div>	
	  </div>
    &nbsp;</div>	
</body>
</html>
