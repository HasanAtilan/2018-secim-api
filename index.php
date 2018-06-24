<?php

//OLUSTURUCU HASAN ATİLAN.

$linkimiz = "http://secim2018.ntv.com.tr/election/2018/president/general.json"; //adresi
$cektir = file_get_contents($linkimiz);
$cektir=str_replace('},

]',"}

]",$cektir);
$veri = json_decode($cektir);

echo "<pre>";
print_r($veri);
echo "</pre>";
?>
