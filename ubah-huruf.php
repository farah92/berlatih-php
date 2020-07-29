<?php
function ubah_huruf($string){
    $abjad = "abcdefghijklmnopqrstuvwxyz";
    $penampung = "";
    for($i=0;$i<strlen($string); $i++)
    {
        $posisi = strrpos($abjad , $string[$i]);
        $penampung .= substr($abjad , $posisi +1 , 1);
    }

    return $penampung;
    
}

// TEST CASES
echo ubah_huruf('wow'); // xpx
echo "<br/>";
echo ubah_huruf('developer'); // efwfmpqfs
echo "<br/>";
echo ubah_huruf('laravel'); // mbsbwfm
echo "<br/>";
echo ubah_huruf('keren'); // lfsfo
echo "<br/>";
echo ubah_huruf('semangat'); // tfnbohbu
echo "<br/>";

?>