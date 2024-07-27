<?php
$nama_lengkap = "Susilo";
$namaLengkap = "Susilo";
$namalengkap = "Susilo";

// if(hujan){bawakpayung}
// else if(kondisi){pernyataan}
// else{pernyataan}

// $nama = ['soekarno', 'soeharto', 'habibie', 'gusdur', 'mega', 'sby', 'jokowi'];

$data = [
    [
        'nama' => 'ronaldo',
        'posisi' => 'penyerang',
        'kebangsaan' => 'portugal'
    ],
    [
        'nama' => 'messi',
        'posisi' => 'penyerang',
        'kebangsaan' => 'argentina'
    ],
    [
        'nama' => 'bambang',
        'posisi' => 'penyerang',
        'kebangsaan' => 'indonesia raya'
    ],
];



foreach($data as $item)
{
    echo($item['kebangsaan']);
    echo('<br>');
}

// for ($x = 0; $x < count($nama); $x++) {
//     echo ($nama[$x]);
//     echo ('<br>');
// }
