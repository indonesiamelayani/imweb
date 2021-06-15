<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Common_variable
{
    public function getIdDesc()
    {
        return 1;
    }
    public function getGroupKarsaKarya()
    {
        return 2;
    }
    public function getIdKarsa()
    {
        return 2;
    }
    public function getIdKarya()
    {
        return 3;
    }
    public function getIdStruktur()
    {
        return 4;
    }
    public function getGroupManajemen()
    {
        return 3;
    }
    public function getGroupKajianPenelitian()
    {
        return 4;
    }
    public function getGroupAktifitas()
    {
        return 5;
    }
    public function getIdPublikasi()
    {
        return 6;
    }
    public function getGroupAlurPublikasi()
    {
        return 6;
    }
    public function getTimeNow()
    {
        return date('Y-m-d H:i:s');
    }
}
