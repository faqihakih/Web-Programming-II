<?php 
    defined('BASEPATH') OR exit('No direct script access allowed');

    class Perkenalan extends CI_Controller{

        public function index(){
            echo "<h1 style='color:red; text-align:center'>Perkenalan</h1>";
            echo "<p>nama saya Faqih Zada <br>
                    Saya tinggal di <address>Tegal</address> <br>
                    Saya suka main Dota 2";
        }

        public function zada(){
            echo "<p>ini halaman zada</p>";
        }
    }

?>