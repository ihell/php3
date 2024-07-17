<?php
// time
// UNIX timestamp / EPOCH time
// detik yang sudah berlalu sejak 1 januari 1970
echo date("d M Y", time()+60*60*24*100) . "<br>";

// mktime
// membuat detik sendiri
// mktime(0, 0, 0, 0, 0, 0)
// jam, menit, detik, bulan, tanngal, tahun
echo date("l", mktime(0,0,0,10,2,2005) ) . "<br>";

// strtotime
echo date("l", strtotime("2 oct 2005") ) . "<br>";


?>