<?php

define('NAMA', 'Albert Panggabean');
echo NAMA;

echo "<br>";

const UMUR = 19;
echo UMUR;

class Coba
{
    const NAMA = 'Albert Panggabean';
}

echo Coba::NAMA;

// echo __LINE__;

// function Coba()
// {
//     return __FUNCTION__;
// }

// // echo coba();

// class Coba
// {
//     public $kelas = __CLASS__;
// }

// $obj = new Coba;
// echo $obj->kelas;