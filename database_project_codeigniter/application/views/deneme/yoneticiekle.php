<!doctype html>
<html>
<head>
	<link rel="icon" href="favicon.ico" type="image/x-icon">
<title>Öğrenci kaydı ekle</title>
	<link rel="stylesheet" href="<?php echo base_url('assets/css/admin_yonetici_kayıt_ekle.css');?>">
</head>
<?php echo $this->session->flashdata('inf'); ?>
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
<div>
		<form action="<?php echo base_url('anasayfa/yoneticiekle');?>" method="post" class="kayırtorta">
		<h1>YÖNETİCİ KAYIT FORMU</h1>
		<input class="textbox" type="text" name="y_username" placeholder="Kullanıcı Adı">
		<br>
		<br>
		<input class="textbox" type="password" name="y_sifre" placeholder="Şifre">
    <p><strong>Yönetici giriş yaptıktan sonra kendi düzenleyebilir.</strong></p>
		<br>
		<br>
		<input class="textbox" type="text" name="yurt_ad" placeholder="Yurt Adı">
    <input class="textbox" type="hidden" name="yurt_id" placeholder="">
		<br>
		<br>
		
		<br>
		<br>
		<input class="button" type="submit" value="KAYIT EKLE">
	</form>
		</div>
	  </div>
    &nbsp;</div>	
</body>
</html>
