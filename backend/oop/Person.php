<?php

class Person
{
    # membuat property
    public $nama;
    public $alamat;
    public $jurusan;

    # membuat constructor
    public function __construct($nama, $alamat, $jurusan)
    {
        $this->nama = $nama;
        $this->alamat = $alamat;
        $this->jurusan = $jurusan;
    }

    # membuat method (function)
    public function setNama($data)
    {
        $this->nama = $data;
    }

    public function getNama()
    {
        return $this->nama;
    }

    # buat method set dan get alamat
    # buat method set dan get jurusan
}

$edo = new Person('Syita Dwi Safitri', 'Banyumas', 'Informatika');
$ismail = new Person('Adam Afandi', 'Bekasi', 'Bisnis Digital');

echo $edo->getNama();
echo '<br>';
echo $ismail->getNama();

// $mahasiswa = [
//     [
//         'nama' => 'Syita Dwi Safitri',
//         'jurusan' => 'Informatika',
//     ],
//     [
//         'nama' => 'Adam Afandi',
//         'jurusan' => 'Sistem Informasi',
//     ],
// ];
// foreach ($mahasiswa as $mhs) {
//     $person = new Person();
//     $person->setNama($mhs['nama']);
//     echo $person->getNama();
//     echo '<br>';
// }

// $edo = new Person();
// $edo->setNama('Syita Dwi Safitri');
// echo $edo->getNama();
// echo '<br>';

// $ismail = new Person();
// $ismail->setNama('Adam Afandi');
// echo $adam->getNama();
