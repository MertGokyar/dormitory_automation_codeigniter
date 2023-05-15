<?php

class ogrenciler extends CI_Model {

    function ogrenci()
    {
        $result = $this
        ->db
        ->select('*')
        ->from('ogrenciler')
        ->order_by('ogr_id','ASC')
        ->get()
        ->result();
        return $result;
    }

    function listele($from)
    {
        $result=$this
        ->db
        ->select('*')
        ->from($from)
        ->get()
        ->result();
        return $result;
    }

    function borclu_listele($from) {
        $result = $this
        ->db
        ->select('odemeler.odeme_id,odemeler.yurt_ucreti,ogrenciler.ogr_ad,ogrenciler.ogr_soyad,ogrenciler.ogr_dg,ogrenciler.ogr_tcNo')
        ->from($from)
        ->join('odemeler', 'ogrenciler.odeme_id = odemeler.odeme_id', 'left')
        ->get()
        ->result();
        return $result;
    }
    

    function ekle($where,$data=array())
    {
        $result=$this
        ->db
        ->insert($data,$where);
        return $result;
    }

    function sil($id,$where,$from)
    {
        $result=$this
        ->db
        ->delete($from,array($where => $id));
        return $result;

    }

    function ogrencicek($id)
    {
        $result=$this
        ->db
        ->select('*')
        ->from('ogrenciler')
        ->where('ogr_id',$id)
        ->get()
        ->row();
        return $result;
    }

    function update($data,$id,$where,$from)
    {
        $result=$this
        ->db
        ->where($where,$id)
        ->update($from,$data);
        return $result;
    }
}

