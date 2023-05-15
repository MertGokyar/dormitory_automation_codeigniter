<?php

class yoneticiler extends CI_Model {

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

    function y_listele($from) {
        $result=$this
        ->db
        ->select('yoneticiler.*, yurt.yurt_ad')
        ->from($from)
        ->join('yurt', 'yoneticiler.yurt_id = yurt.yurt_id', 'left')
        ->get()
        ->result();
        return $result;
    }

    function o_listele($from) {
        $result=$this
        ->db
        ->select('ogrenciler.*, yurt.yurt_ad, odemeler.yurt_ucreti, odemeler.borclu_mu')
        ->from($from)
        ->join('yurt', 'ogrenciler.yurt_id = yurt.yurt_id', 'left')
        ->join('odemeler', 'ogrenciler.odeme_id = odemeler.odeme_id', 'left')
        ->get()
        ->result();
        return $result;
    }

    

    function sil($id,$where,$from)
    {
        $result=$this
        ->db
        ->delete($from,array($where => $id));
        return $result;
    }

    function ekle($where,$data=array())
    {
        $result=$this
        ->db
        ->insert($data,$where);
        return $result;
    }
}