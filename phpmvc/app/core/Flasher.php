<?php  

class Flasher {

    public static function setFlash($pesan, $aksi, $tipe) 
    {
        $_SESSION['Flash'] = [
            'pesan' => $pesan,
            'aksi' => $aksi,
            'tipe' => $tipe
        ];
    }

    public static function flash() 
    {
        if( isset($_SESSION['Flash']) ) {
            echo '<div class="alert alert-'. $_SESSION['Flash']['tipe'] .' alert-dismissible fade show" role="alert"> Data Mahasiswa
            <strong>'. $_SESSION['Flash']['pesan'] .' </strong>'. $_SESSION['Flash']['aksi'] .'
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>';
          unset($_SESSION['Flash']);
        }
    }

}