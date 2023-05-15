<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Anasayfa extends CI_Controller {

	public function index()
	{ 
		$this->load->view('deneme/giris'); 
	}

    public function admin_anasayfa()
    {
		$this->load->view('deneme/admin_anasayfa');
	}

    public function y_anasayfa()
    {
		$this->load->view('deneme/y_anasayfa');
	}

    public function ogrenci_anasayfa()
    {
		$this->load->view('deneme/ogrenci_anasayfa');
	}

    public function iletisim()
    {
		$this->load->view('deneme/iletisim');
	}

    public function izinler()
    {
		$this->load->view('deneme/izinler');
	}

    public function ogrenciler()
	{
		$this->load->model('ogrenciler');
		$sonuc=$this->ogrenciler->listele("ogrenciler");
		$data=new stdClass;
		$data->bilgi=$sonuc;
		$this->load->view('deneme/ogrencilistesi',$data);
	}

    public function yoneticiler()
	{
		$this->load->model('yoneticiler');
		$sonuc=$this->yoneticiler->y_listele("yoneticiler");
		$data=new stdClass;
		$data->veri=$sonuc;
		$this->load->view('deneme/yoneticilistesi',$data);
	}

    public function kisiselbilgiler()
	{
		$this->load->model('yoneticiler');
		$sonuc=$this->yoneticiler->o_listele("ogrenciler");
		$data=new stdClass;
		$data->veri=$sonuc;
		$this->load->view('deneme/kisisel_bilgiler',$data);
	}

    /*ADMİN İŞLEMLERİ*/

    public function girisyap()
    {
        $this->load->model('vt');
        $this->load->library('form_validation');
        $this->form_validation->set_rules('admin','Kullanıcı Adı','required');

        if($this->form_validation->run())
        {
            $username=$this->input->post('admin');
            $sifre=$this->input->post('admin_sifre'); 
            $sonuc=$this->vt->adminvarmi($username,$sifre);
            if($sonuc)
            {
               $this->session->set_userdata('durum',true);
               $this->session->set_userdata('user',$sonuc);
               redirect('anasayfa/admin_anasayfa');
            }else
            {
                echo '<div class="alert alert-danger"><strong>Hata!<i class="fa fa-remove"></i></strong>E-mail veya şifre yanlış!</div>';
            }
        }else
        {
            echo validation_errors();
        }    
    }

    public function odalar()
	{
		$this->load->model('ogrenciler');
		$sonuc=$this->ogrenciler->listele("odalar");
		$data=new stdClass;
		$data->bilgi=$sonuc;
		$this->load->view('deneme/odalar',$data);
	}

    public function borclar()
	{
		$this->load->model('ogrenciler');
		$sonuc=$this->ogrenciler->borclu_listele("ogrenciler");
		$data=new stdClass;
		$data->bilgi=$sonuc;
		$this->load->view('deneme/borclar',$data);
	}



    /*-------------------------ÖĞRENCİ İŞLEMLERİ*-----------------------------------------------------------*/


    public function o_girisi()
    {
        $this->load->model('vt');
        $this->load->library('form_validation');
        $this->form_validation->set_rules('ogr_mail','E-mail Adresi','required');

        if($this->form_validation->run())
        {
            $email=$this->input->post('ogr_mail');
            $sifre=$this->input->post('ogr_sifre'); 
            $sonuc=$this->vt->o_varmi($email,$sifre);
            if($sonuc)
            {
            $this->session->set_userdata('durum',true);
            $this->session->set_userdata('user',$sonuc);
               redirect('anasayfa/ogrenci_anasayfa');
            }else
            {
                echo '<div class="alert alert-danger"><strong>Hata!<i class="fa fa-remove"></i></strong>E-mail veya şifre yanlış!</div>';
            }
        }else
        {
            echo validation_errors();
        }    
    }

    public function izinal()
    {
        $this->load->view('deneme/izinler');
        $this->load->library('form_validation');

        $this->form_validation->set_rules('cıkıs','Çıkış Tarihi','required');
    
             if($this->form_validation->run())
            {
                
                $id=$this->input->post('kb_id'); 
                $cıkıs=$this->input->post('cıkıs'); 
                $giris=$this->input->post('giris'); 

                $data=array
                (
                'kb_id'=>$id,
                'cikis_tarih'=>$cıkıs,
                'giris_tarih'=>$giris
                );

                $this->load->model('ogrenciler');
                $ekle=$this->ogrenciler->ekle($data,'konaklamabilgi');

                if($ekle){
                    $this->session->set_flashdata('inf','<div class="alert alert-success"><strong>Tebrikler!<i class="fa fa-check"></i></strong>Başarıyla eklendi</div>');
                    redirect('anasayfa/ogrenci_anasayfa');
                }
                }else{
                $this->session->set_flashdata('inf','<div class="alert alert-danger"><strong>Hata!<i class="fa fa-remove"></i></strong>Ekleyemediniz.</div>');
                }
            }


    public function ogrenciekle()
    { 
            $this->load->view('deneme/ogrenciekle');
            $this->load->library('form_validation');
    
            $this->form_validation->set_rules('email','E-mail','is_unique[ogrenciler.ogr_mail]');
    
             if($this->form_validation->run()){

                $ad=$this->input->post('ogr_ad'); 
                $soyad=$this->input->post('ogr_soyad'); 
                $telefon=$this->input->post('ogr_telNo');
                $email=$this->input->post('ogr_mail'); 
                $tc=$this->input->post('ogr_tcNo'); 
                $sifre=$this->input->post('ogr_sifre'); 
                $tarih=date('ogr_dg');
                $bolum=$this->input->post('bolum_id');
                $oda=$this->input->post('oda_id');
                $yurt_id = $this->input->post('yurt_id'); 
                $kb_id = 4;
                $odeme_id = 3;
                $veliad=$this->input->post('ogr_veliAd'); 
                $velitel=$this->input->post('ogr_veliTel'); 
                $veliadres=$this->input->post('ogr_veliAdres');
    
                $data=array
                (
                'ogr_ad'=>$ad,
                'ogr_soyad'=>$soyad,
                'ogr_telNo'=>$telefon,
                'ogr_mail'=>$email,
                'ogr_tcNo'=>$tc,
                'ogr_sifre'=>md5($sifre),
                'ogr_dg'=>$tarih,
                'bolum_id'=>$bolum,
                'oda_id'=>$oda,
                'yurt_id'=>$yurt_id,
                'kb_id'=>$kb_id,
                'odeme_id'=>$odeme_id,
                'ogr_veliAd'=>$veliad,
                'ogr_veliTel'=>$velitel,
                'ogr_veliAdres'=>$veliadres
            );

                $this->load->model('ogrenciler');
                $ekle=$this->ogrenciler->ekle($data,'ogrenciler');

                if($ekle){
                    $this->session->set_flashdata('inf','<div class="alert alert-success"><strong>Tebrikler!<i class="fa fa-check"></i></strong>Başarıyla eklendi</div>');
                    redirect('anasayfa/ogrenciler');
                }
             }else{
                $this->session->set_flashdata('inf','<div class="alert alert-danger"><strong>Hata!<i class="fa fa-remove"></i></strong>Ekleyemediniz.</div>');
             }
    }

    public function ogrenci_guncelle($id)
	{
		$this->load->model('ogrenciler');
		$sonuc=$this->ogrenciler->ogrencicek($id);
		if($sonuc)
		{
			$data['sonuc']=$sonuc;
			$this->load->view('deneme/ogrenci_guncelle',$data);
		}else
		{
			echo "öğrenci yok";
		}
		
	}

    public function ogrenciguncelleok()
	{
        $ogr_id=$this->input->post('ogr_id');
		$ad=$this->input->post('ogr_ad'); 
        $soyad=$this->input->post('ogr_soyad'); 
        $telefon=$this->input->post('ogr_telNo');
        $email=$this->input->post('ogr_mail'); 
        $tc=$this->input->post('ogr_tcNo'); 
        $tarih=date('ogr_dg');
        $bolum=$this->input->post('bolum_id');
        $oda=$this->input->post('oda_id');
        $yurt=$this->input->post('yurt_id');
        $kb=$this->input->post('kb_id');
        $odeme=$this->input->post('odeme_id');
        $veliad=$this->input->post('ogr_veliAd'); 
        $velitel=$this->input->post('ogr_veliTel'); 
        $veliadres=$this->input->post('ogr_veliAdres');

        $data=array
        (
        'ogr_id'=>$ogr_id,
        'ogr_ad'=>$ad,
        'ogr_soyad'=>$soyad,
        'ogr_telNo'=>$telefon,
        'ogr_mail'=>$email,
        'ogr_tcNo'=>$tc,
        'ogr_dg'=>$tarih,
        'bolum_id'=>$bolum,
        'oda_id'=>$oda,
        'yurt_id'=>$yurt,
        'kb_id'=>$kb,
        'odeme_id'=>$odeme,
        'ogr_veliAd'=>$veliad,
        'ogr_veliTel'=>$velitel,
        'ogr_veliAdres'=>$veliadres
        );

		$this->load->model('ogrenciler');
		$sonuc=$this->ogrenciler->update($data,$ogr_id,"ogr_id","ogrenciler");
		if($sonuc)
		{
			$this->session->set_flashdata('sonuc','<div class="alert alert-success" role="alert">'.$ad.' Öğrenci başarıyla güncellendi!</div>');
			redirect('anasayfa/ogrenciler');
		}
			
	}

    /*Öğrenci Sil */

    public function sil($id,$where,$from)
    {
        $this->load->model('ogrenciler');
        $sil=$this->ogrenciler->sil($id,$where,$from);
        if($sil)
        {
            $this->session->set_flashdata('sonuc','<div class="alert alert-success" role="alert">'.$ad.' silindi!</div>');
            redirect('anasayfa/ogrenciler');
        }else{
            echo "öğrenci yok";
        }
    }

    /*YÖNETİCİ İŞLEMLERİ*/
    
    public function yoneticisil($id,$where,$from)
    {
        $this->load->model('yoneticiler');
        $sil=$this->yoneticiler->sil($id,$where,$from);
        if($sil)
        {
            $this->session->set_flashdata('sonuc','<div class="alert alert-success" role="alert">'.$y_username.' silindi!</div>');
            redirect('anasayfa/yoneticilistesi');
        }else{
            echo "yönetici yok";
        }
    }

    public function yoneticiekle()
    { 
            $this->load->view('deneme/yoneticiekle');
            $this->load->library('form_validation');
    
            $this->form_validation->set_rules('y_username','Kullanıcı Adı','is_unique[yoneticiler.y_username]');
    
             if($this->form_validation->run()){

                $username=$this->input->post('y_username'); 
                $sifre=$this->input->post('y_sifre');
                $yurt_ad=$this->input->post('yurt_ad');
                $yurt_id = $this->db->select('yurt_id')->from('yurt')->where('yurt_ad', $yurt_ad)->get()->row()->yurt_id;
    
                $data=array
                (
                'y_username'=>$username,
                'y_sifre'=>md5($sifre),
                'yurt_id' => $yurt_id
                );

                $this->load->model('yoneticiler');
                $ekle=$this->yoneticiler->ekle($data,'yoneticiler');
                if($ekle){
                    $this->session->set_flashdata('inf','<div class="alert alert-success"><strong>Tebrikler!<i class="fa fa-chechk"></i></strong>Başarıyla eklendi</div>');
                    redirect('anasayfa/yoneticiler');
                }
             }else{
                $this->session->set_flashdata('inf','<div class="alert alert-danger"><strong>Hata!<i class="fa fa-remove"></i></strong>Ekleyemediniz.</div>');
             }
    }

    public function y_girisi()
    {
        $this->load->model('vt');
        $this->load->library('form_validation');
        $this->form_validation->set_rules('y_username','Kullanıcı Adı','required');

        if($this->form_validation->run())
        {
            $username=$this->input->post('y_username');
            $sifre=$this->input->post('y_sifre'); 
            $sonuc=$this->vt->y_varmi($username,$sifre);
            if($sonuc)
            {
                $this->session->set_userdata('durum',true);
               $this->session->set_userdata('user',$sonuc);
               redirect('anasayfa/y_anasayfa');
            }else
            {
                echo '<div class="alert alert-danger"><strong>Hata!<i class="fa fa-remove"></i></strong>E-mail veya şifre yanlış!</div>';
            }
        }else
        {
            echo validation_errors();
        }    
    }

    public function cikisyap()
    {
        $this->session->sess_destroy();
        redirect('anasayfa/index');
    }

}
