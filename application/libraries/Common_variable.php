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
    public function getTimeNow()
    {
        return date('Y-m-d H:i:s');
    }
}
