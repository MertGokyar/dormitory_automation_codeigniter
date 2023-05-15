<!doctype html>
<html>
<head>
	<link rel="icon" href="favicon.ico" type="image/x-icon">
<title>Öğrenci kaydı ekle</title>
	<link rel="stylesheet" href="<?php echo base_url('assets/css/iletisim.css');?>">
</head>

<body>
<div></div>
	<div class="wrap">
  <nav>
  <ul class="primary">
  <li>
      <a href="<?php echo base_url('anasayfa/ogrenci_anasayfa');?>">Ana Sayfa</a>      
    </li> 
    <li>
      <a href="<?php echo base_url('anasayfa/izinler');?>">Yurt izin al</a>
    </li>
    <li>
      <a href="<?php echo base_url('anasayfa/kisiselbilgiler');?>">Kişisel Bilgiler</a>
    </li>
    <li>
    <a href="<?php echo base_url('anasayfa/iletisim');?>">İletişim</a>
    </li>
    <li>
      <a href="<?php echo base_url('anasayfa/index');?>">ÇIKIŞ</a>      
    </li>
  </ul>
</nav>

	<div class="ortasayfa">
<div> 
        <form action="https://formspree.io/f/mqkjrvgr" method="post" class="kayırtorta">       
		<h1>İLETİŞİM FORMU</h1>
			<h1>ÖNERİ/İSTEK/ŞİKAYET&nbsp;&nbsp;</h1>
			<br>	
		<input class="textbox" type="text" name="bos" placeholder="Mesaj Konusu">
		<br>
		<br>
		<input class="textbox2" type="text" name="bos" placeholder="İçerik">	
		<br>
		<br>
		<input class="button" type="submit" value="Gönder">
	</form>
	  </div>
	  </div>
    &nbsp;</div>	
</body>
</html>
