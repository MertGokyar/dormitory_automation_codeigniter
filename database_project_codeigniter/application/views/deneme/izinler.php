<!doctype html>
<html>
<head>
<link rel="icon" href="favicon.ico" type="image/x-icon">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<title>Öğrenci</title>
	<link rel="stylesheet" href="<?php echo base_url('assets/css/stil_izin.css');?>">
</head>
<?php echo $this->session->flashdata('inf'); ?>
<body>
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
		<div class="table1">
		<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">#</th>    
      <th scope="col">Giriş Tarihi</th>
      <th scope="col">Çıkış Tarihi</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td>Otto</td>
      
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Jacob</td>
      <td>Thornton</td>
      
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>Larry</td>
      <td>the Bird</td>
    </tr>
  </tbody>
</table>
		</div>
	  <div class="renk1">Yurt IZIN ALMA ISLEMI</div> <br>
	  <div>
	    <form id="form1" action="<?php echo base_url('anasayfa/izinal');?>" method="post">
	      
	     
<label for="textfield">Çıkış Tarihi:</label>
          <input type="hidden" name="kb_id" id="textfield">
          <input type="text" name="cıkıs" id="textfield">
	       <br>
			  <label for="textfield2"> Giriş Tarihi :</label>
          <input type="text" name="giris" id="textfield2"> <br><br>
          <input type="submit" name="button" id="button" value="Gönder"> 
        </form>
      </div>
    &nbsp;</div>	
</div>
</body>
</html>
