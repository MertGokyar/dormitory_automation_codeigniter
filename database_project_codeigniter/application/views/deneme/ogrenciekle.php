<!doctype html>
<html>
<head>
<link rel="icon" href="favicon.ico" type="image/x-icon">
<title>Öğrenci Kaydı Ekle</title>
<link rel="stylesheet" href="<?php echo base_url('assets/css/ogrenci_kayıt_ekle.css');?>">
</head>
<body>
<div></div>
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
<?php echo $this->session->flashdata('inf'); ?>

	<div class="ortasayfa">
<div>
		<form action="<?php echo base_url('anasayfa/ogrenciekle');?>" method="post" class="kayırtorta">
		<h1>KAYIT FORMU</h1>
		<input class="textbox" type="text" name="ogr_ad" placeholder="Ad">
		<br>
		<br>
		<input class="textbox" type="text" name="ogr_soyad" placeholder="Soyad">
		<br>
		<br>
		<input class="textbox" type="text" name="ogr_telNo" placeholder="Telefon">
		<br>
		<br>
		<input class="textbox" type="email" name="ogr_mail" placeholder="E-Posta">
		<br>
		<br>
		<input class="textbox" type="text" name="ogr_tcNo" placeholder="TC">
		<br>
		<br>
		<input class="textbox" type="password" name="ogr_sifre" placeholder="Şifre Belirle">
		<br>
		<br>
		<input class="textbox" type="text" name="ogr_dg" placeholder="gg.aa.yyyy">
		<br>
		<br>
		<input class="textbox" type="text" name="bolum_id" placeholder="Öğrencinin Bölümü">
		<br>
		<br>
		<input class="textbox" type="text" name="yurt_id"  placeholder="Yurt ID">
		<br>
		<br>
		<input class="textbox" type="text" name="oda_id"  placeholder="Oda Numarası">
		<input class="textbox" type="hidden" name="odeme_id"  placeholder="">
		<input class="textbox" type="hidden" name="kb_id"  placeholder="">
		<br>
		<br>
		<input class="textbox" type="text" name="ogr_veliAd" placeholder="Veli Ad">
		<br>
		<br>
		<input class="textbox" type="text" name="ogr_veliTel" placeholder="Veli Telefon">
		<br>
		<br>
		<input class="textbox" type="text" name="ogr_veliAdres" placeholder="Veli Adres">
		<br>
		<br>
		<input class="button" type="submit" value="KAYIT EKLE">
	</form>
		</div>
	  </div>
    &nbsp;</div>	
</body>
</html>
