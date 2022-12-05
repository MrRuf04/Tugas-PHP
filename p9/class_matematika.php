<?php  
    class Matematika {
        // Konstanta class
        const PHI = 3.14;

        // Static member variabel
        public static $counter = 101;

        // Static member function 
        public static function tambahkan($a,$b){
            return $a + $b;
        }

        // Akses member variabel dari dalam class
        public static function naikanCounter(){
            self::$counter;
        }

        //akses konstanta class 
        public static function luasLingkaran($jari){
            $luas = self::PHI * $jari * $jari;
            return $luas;
        }
    }
?>
