<?php
# membuat array
$animal = new Animal(["panda", "jerapah", "kelinci"]);

# mengakses array
echo $animals[0];
echo "<br>";
echo $animals[2];
echo "<br>";

# membuat array asosiatif
$user = [
    'nama' => "Syita Dwi Safitri",
    'jurusan' => "Informatika",
    "ipk" => 3.72,
];

# mengakses array asosiatif
echo $user['nama'];
echo '<br>';
echo $user['jurusan'];
