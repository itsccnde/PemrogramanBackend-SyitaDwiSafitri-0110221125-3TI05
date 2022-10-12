<?php
for ($i = 0; $i <= 10; $i++) {
    echo "looping ke $i<br>";
}

$animal = ["panda", "jerapah", "kelinci"];
foreach ($animals as $animal) {
    echo $animal . '<br>';
}

# membuat array asosiatif
$data_user = [
    'nama' => "Syita Dwi Safitri",
    'jurusan' => "Informatika",
    'ipk' => 3.72,
];

foreach ($data_user as $key => $value) {
    echo $key . ': ' . $value . '<br>';
}
