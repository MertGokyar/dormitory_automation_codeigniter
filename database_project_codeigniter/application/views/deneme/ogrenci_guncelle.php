<!doctype html>
<html>
<head>
<link rel="icon" href="favicon.ico" type="image/x-icon">
<title>Öğrenci Güncelle</title>
<link rel="stylesheet" href="<?php echo base_url('assets/css/ogrenci_kayıt_ekle.css');?>">
</head>
<?php echo $this->session->flashdata('sonuc'); ?>
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


	<div class="ortasayfa">
<div>
		<form action="<?php echo base_url('anasayfa/ogrenciguncelleok');?>" method="post" class="kayırtorta">
		<h1><?php echo $sonuc->ogr_ad;?> Öğrenci Bilgisi Güncelleme</h1>
		<input class="textbox" type="text" name="ogr_ad" placeholder="Ad" value="<?php echo $sonuc->ogr_ad;?>">
        <input type="hidden" class="form-control" id="basic-default-name" data-placeholder="" name="ogr_id" value="<?php echo $sonuc->ogr_id;?>">
		<br>
		<br>
		<input class="textbox" type="text" name="ogr_soyad" placeholder="Soyad" value="<?php echo $sonuc->ogr_soyad;?>">
		<br>
		<br>
		<input class="textbox" type="text" name="ogr_telNo" placeholder="Telefon" value="<?php echo $sonuc->ogr_telNo;?>">
		<br>
		<br>
		<input class="textbox" type="email" name="ogr_mail" placeholder="E-Posta" value="<?php echo $sonuc->ogr_mail;?>">
		<br>
		<br>
		<input class="textbox" type="text" name="ogr_tcNo" placeholder="TC" value="<?php echo $sonuc->ogr_tcNo;?>">
		<br>
		<br>
		<input class="textbox" type="text" name="ogr_dg" placeholder="gg.aa.yyyy" value="<?php echo $sonuc->ogr_dg;?>">
		<input class="textbox" type="hidden" name="ogr_sifre" placeholder="" value="<?php echo $sonuc->ogr_sifre;?>">
		<br>
		<br>
		<input class="textbox" type="text" name="bolum_id" placeholder="Öğrencinin Bölümü" value="<?php echo $sonuc->bolum_id;?>">
		<br>
		<br>
		<input class="textbox" type="text" name="oda_id" placeholder="Oda Numarası" value="<?php echo $sonuc->oda_id;?>">
		<input class="textbox" type="hidden" name="yurt_id" placeholder="" value="<?php echo $sonuc->yurt_id;?>">
		<input class="textbox" type="hidden" name="kb_id" placeholder="" value="<?php echo $sonuc->kb_id;?>">
		<input class="textbox" type="hidden" name="odeme_id" placeholder="" value="<?php echo $sonuc->odeme_id;?>">
		<br>
		<br>
		<input class="textbox" type="text" name="ogr_veliAd" placeholder="Veli Ad" value="<?php echo $sonuc->ogr_veliAd;?>">
		<br>
		<br>
		<input class="textbox" type="text" name="ogr_veliTel" placeholder="Veli Telefon" value="<?php echo $sonuc->ogr_veliTel;?>">
		<br>
		<br>
		<input class="textbox" type="text" name="ogr_veliAdres" placeholder="Veli Adres" value="<?php echo $sonuc->ogr_veliAdres;?>">
		<br>
		<br>
		<input class="button" type="submit" value="GÜNCELLE">
	</form>
		</div>
	  </div>
    &nbsp;</div>	
</body>
</html>
