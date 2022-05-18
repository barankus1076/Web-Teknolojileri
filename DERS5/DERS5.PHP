<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ders 5</title>
</head>
<body>
<h3> phpde dizilerin devamı </h3>

<?php
$isimler=array();
print_r($isimler);
$isimler[0]="Mehmet";
$isimler[0]="Kemal";
$isimler[0]="Canan";
$isimler[0]="Nur";

echo"<pre>";
print_r($isimler1);
echo"</pre>";


$isimler["isim1"]="Mehmet";
$isimler["isim2"]="Kemal";
$isimler["isim3"]="Canan";
$isimler["isim4"]="Nur";

echo"<pre>";
print_r($isimler2);
echo"</pre>";

$ogrencidetay=array(
"id"    =>1,
"adi"   =>"Havva", 
"soyadi"   =>"Yıldız", 
"bölüm"    => "Bilgisayar",
"yas"       =>20,
"dersler"    =>array(
    
     "ders1"=> "Web Programlama",
     "ders2" => "Veritabanı",
     "ders3" => "Mobil Uygulama",

),
"sınıf"=>2,
"memleket"=> "İzmir",


);

/* uygulama
Çıktı: Havva Nur isimli öğrencinin web programlama, veritabanı ve mobil uygulama dersleri vardır.
*/
echo "$ogrenciDetay[adi]$ogrenciDetay[soyadi]isimli öğrencinin "
.$ogrenciDetay["dersler"]["ders1"],
.$ogrenciDetay["dersler"]["ders2"],"dersleri vardır.";

$ogrenciDetay=array()


/*Uygulama
Yukarıdaki dizilerin her elemanı bir öğrenci detayına karşılık gekmektedir.
Bu öğrencilere ait detayları aşağıdaki şekilde satır satır bir tablo oluşturup içerisine yazdırınız.
#id    #adi    #soyadi    #bölüm        #dersler                  #sınıf
1      havva   yıldız     bilgisayar   web programlama               2          
                                        veri tabanı
                                       mobil uygulama   
*/




?>
    
</body>
</html>