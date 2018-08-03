<?php

namespace App\test;

class test
{
    // 获取扩展名
    public function get_file_ext($file){
        return strtolower(pathinfo($file,PATHINFO_EXTENSION));
    }
}

