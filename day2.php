<?php
    
    //Penambahan
    // function tambah($a, $b){
    //     return $a + $b;
    // }
    // $c = tambah(5, 6);
    // echo "Hasil dari 5 + 6 = " .$c;

    //     //Perpangkatan
    // function pangkat($a, $b){
    //     $hasil = 1;
    //     $i = 0;
    //     while ($i != $b){
    //         $hasil = $hasil * $a;
    //         $i++;
    //     }
    //     return $hasil;
    // }
    // $c = pangkat(2, 3);
    // echo "<br>Hasil dari 2 pangkat 3 = " .$c;

        //Array
    // $identitas = ['Reva', 20, 170.6];
    // echo "<br>";
    // //Untuk mencetak array harus menggunakan var_dump()
    // var_dump($identitas[0]);
    // $identitas[0] = 'Agus';//Menampilkan array sesuai dengan apa yang kita input pada var-dump
    // var_dump($identitas);

    // echo '<br>';
    // $buahsatu = ['semangka', 'durian', 'leci'];
    // $buahdua = ['Mengkudu', 'Melon', 'Jeruk'];
    // //Array gabungan
    // $buah_gabungan = array_merge($buahsatu, $buahdua);
    // echo implode(', ', $buahsatu).'<br>';

    // $buahdua = explode(', ', $buahsatu);
    // var_dump($buahdua);

    // if(in_array('melon', $buahsatu)){
    //     echo 'Disini ada melon';
    // }else if(in_array('durian', $buahsatu)){
    //     echo 'Disini ada durian';
    // }else{
    //     echo 'Disini tidak ada apa-apa';
    // }

    //Assosiative array
    // $identitas = [
    //     "nama" => 'Reva',
    //     "umur" => '20',
    //     "nilai" => 90.5,
    //     "kelas" => 'C'
    // ];
    // var_dump($identitas);

    //OOP
    class Mahasiswa{
        public string $nama;
        public int $npm;
        

        public function __construct($nama, $npm){
            $this->nama = $nama;
            $this->npm = $npm;
           
            
        }
        public function print_nama(){
            echo "Nama saya Adalah Reva";
        }
        public function get_nama(){
            return $this->nama;
        }
        public function print_public(){
            $this->print_nama();
        }
    }
    $mahasiswa = new Mahasiswa('Reva Arya Maulana', '217006092', 'C');
    

    class Informatika extends Mahasiswa{
        public string $kelas;

        public function __construct($npm, $name, $kelas)
        {
            $this->kelas = $kelas;
            parent::__construct($npm, $name);
            
        }
        public function print_kelas(){
            echo 'Kelas nya '. parent::get_nama().' adalah '. $this->kelas;
                }
    }
?>