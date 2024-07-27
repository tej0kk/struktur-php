<?php
    class Mobil 
    {
        public $warna;
        public $tipe;

        public function inputMobil($color, $type) 
        {
            $this->warna = $color;
            $this->tipe = $type;
            return [
                'warnanya'      =>      $this->warna,
                'tipenya'       =>      $this->tipe
            ];
        }

        public static function input_mobil($color, $type) 
        {
            return json_encode([
                'warnanya'      =>      $color,
                'tipenya'       =>      $type
            ]);
        }

        public function cekMobil()
        {
            echo 'Warna mobil '. $this->warna;
        }
    }
    
    $new_data = new Mobil();
    $new_data->inputMobil('Pink', 'Truk');
    echo('Mobil dengan warna '. $new_data->warna. ' Dengan tipe '. $new_data->tipe. ' berhasil dibeli !');
    
    echo('<br>');

    $data_baru = Mobil::input_mobil('merah', 'sedan');
    echo('Mobil dengan warna '. json_decode($data_baru)->warnanya. ' Dengan tipe '. json_decode($data_baru)->tipenya. ' berhasil dibeli');
