<?php 

    class Perhitungan {

        var $bil1;
        var $bil2;
        var $bil3;


        function luasPersegi($bil1) {
            $bil3 = $bil1 * $bil1;
            return 
            "<table border=1>".
            "<tr><td> Sisi : </td> <td>".$bil1."</td></tr>".
            "<tr><td colspan=2>Luas Persegi </td></tr>".
            "<tr><td> Hasil : </td> <td>".$bil3."</td></tr>".
            "</table>";
        }

        function luasPersegiPanjang($bil1, $bil2) {
            $bil3 = $bil1 * $bil2;
            return 
            "<table border=1>".
            "<tr><td> Panjang : </td> <td>".$bil1."</td></tr>".
            "<tr><td> Lebar : </td> <td>".$bil2."</td></tr>".
            "<tr><td colspan=2>Luas Persegi Panjang </td></tr>".
            "<tr><td> Hasil : </td> <td>".$bil3."</td></tr>".
            "</table>";
        }

        function luasSegitiga($bil1, $bil2) {
            $bil3 = $bil1 * $bil2 / 2;
            return 
            "<table border=1>".
            "<tr><td> Alas : </td> <td>".$bil1."</td></tr>".
            "<tr><td> Tinggi : </td> <td>".$bil2."</td></tr>".
            "<tr><td colspan=2>Luas Segitiga </td></tr>".
            "<tr><td> Hasil : </td> <td>".$bil3."</td></tr>".
            "</table>";
        }
    }

?>