<?php

class vt extends CI_Model {

    function adminvarmi($username,$sifre)
    {
        $result=$this
        ->db
        ->select('*')
        ->from('admin')
        ->where('admin',$username)
        ->where('admin_sifre',md5($sifre))
        ->get()
        ->row();
        return $result;
    }

    function y_varmi($username,$sifre)
    {
        $result=$this
        ->db
        ->select('*')
        ->from('yoneticiler')
        ->where('y_username',$username)
        ->where('y_sifre',md5($sifre))
        ->get()
        ->row();
        return $result;
    }

    function o_varmi($email,$sifre)
    {
        $result=$this
        ->db
        ->select('*')
        ->from('ogrenciler')
        ->where('ogr_mail',$email)
        ->where('ogr_sifre',md5($sifre))
        ->get()
        ->row();
        return $result;
    }
}