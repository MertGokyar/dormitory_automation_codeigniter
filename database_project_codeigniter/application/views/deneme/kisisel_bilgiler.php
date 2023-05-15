<!doctype html>
<html>
<head>
	<link rel="icon" href="favicon.ico" type="image/x-icon">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<meta charset="utf-8" name="viewport" content="width=device-width">
<title>index2.html</title>
	<link rel="stylesheet" href="<?php echo base_url('assets/css/stil_k_bilgiler.css');?>"
		  >
</head>

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
        <?php if($this->session->userdata('durum')){ ?>
		<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">ID</th>    
      <th scope="col">Ad</th>
      <th scope="col">Soyad</th>
		 <th scope="col">Doğum Tarihi</th>
		 <th scope="col">Mail</th>
		 <th scope="col">Veli Ad</th>
		 <th scope="col">Veli Tel</th>
		 <th scope="col">Oda ID&nbsp;</th>
		 <th scope="col">Bolum ID</th>
		 <th scope="col">TC NO</th>
		 <th scope="col">Tel No&nbsp; &nbsp;</th>		
    </tr>
  </thead>

  <tbody>
  <?php foreach($veri as $veri){?>
    <tr>
      <th scope="row"></th>
        <td><?php echo $veri->ogr_id;?></td>
        <td><?php echo $veri->ogr_ad;?></td>
		<td><?php echo $veri->ogr_soyad;?></td>
		<td><?php echo $veri->ogr_dg;?></td>
		<td><?php echo $veri->ogr_mail;?></td>
		<td><?php echo $veri->ogr_veliAd;?></td>
        <td><?php echo $veri->ogr_veliTel;?></td>
        <td><?php echo $veri->oda_id;?></td>
		<td><?php echo $veri->bolum_id;?></td>
		<td><?php echo $veri->ogr_tcNo;?></td>
		<td><?php echo $veri->ogr_telNo;?></td>    
    </tr>
  </tbody>		
</table>
			<br><br>
		<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">ID</th>    
      <th scope="col">Yurt Adı</th>		 	
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row"><?php echo $veri->yurt_id;?></th>
      <td><?php echo $veri->yurt_ad;?></td>
    </tr>
  </tbody>
</table>
		<br><br>
		<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">ID</th>    
      <th scope="col">Yurt ücreti</th>
      <th scope="col">Borç Durumu&nbsp;</th> 	
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row"><?php echo $veri->yurt_id;?></th>
      <td><?php echo $veri->yurt_ucreti;?></td>
      <td><?php echo $veri->borclu_mu;?></td>
    </tr>
    <?php } ?>
  </tbody>
  <?php } ?>
</table>
		</div>
      </div>	  
    &nbsp;</div>
</body>
</html>
