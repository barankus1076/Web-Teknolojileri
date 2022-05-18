<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- Html yorum satırı -->

    <?php
    /* Açılama satırı bloğu
    (çoklu satır kullanılabilir.) kısayol: shift + alt + a
    */
    // tek satır açıklama için kullanılır.
    // php notları kaynak kodunda gözükmez.

    /* Kullanılan komut:
       echo:Ekrana yazdırma işlemi yapar. Komut içerisinde hmtl etiketleri kullanılabilir.
       Çift veya tek tırnak kullanılabilir. Çift ile kullanıldıgında içerisindeki değişkenlerin
       içeriğini ekrana yazar.
       Nokta operatörü ile birleştirme işlemi yapılabilir.
       Ters slash (\)kaçiş ifadesidir. Özel ifadelerden önce kullanılır.
    
    
    */
    echo "<h3>Adnan Menderes Üniversitesi</h3>";
    echo "<h4>Aydın Meslek Yüksekokulu</h4>";
    echo "Bilgisayar Mühendisliği " . "Aymes";
    echo "<br>Bilgisayar Mühendisliği " . "Aymes";
    echo "<hr><h4> Değişken Tanımlama </h4>";
    echo "<ol>
           <li>Değişken isimleri $ ile başlar. </li>
           <li>Değişken isimleri sayısal ifadelerle başlayamaz. </li>
           <li>Değişken isimlerinde boşluk kullanılmaz. İki kelime 
           birinci_sinif birinciSinif gibi. </li>
           <li>Değişken isimleri küçük-büyük harfe duyarlıdır. </li>
           <li>Değişken ismi, değişkenin takışıdığı içeriği ifade etmeli.</li>
           <li>Değişken içeriğinde metinsel ifade varsa çift tırnak (\") veya tek tırnak (') kullanılabilir
           </li>
           <li>Değişken içeriğinde sayısal ifade varsa tırnak kullanmak gerekli değildir.</li>
           <li>Değişken içeriği ekrana echo komutu ile yazdırılabilir.</li>
         </ol>";
/*
         echo "<hr><h4>Değişken tanımlama örenekleri</h4>";
         $isim = "Ahmet";
         $soyisim = " Erimez";
         $gsm = "1235464556";

         echo $isim; 
         echo "<br>$isim $soyisim $gsm";
*/
         /* Uygulama;
              üniversite-myo-ad-soyad-numara değişkenlerini tanımlayınız.
              Bu değişkenlerin içerikerini tablo veya form şeklinde ekrana yazdırınız.
         */

         $isim = "Baran";
         $soyad ="Kuş";
         $myo = "Meslek Yüksekokulu";
         $uniname ="Adnan Menderes Üniversitesi";
         $gsm ="05313318801";
         
    ?>

    <form action="">
      <label for="üniversite"> Üni: </label>
      <input type="text" name"" value="<?php echo $uniname; ?>" id="üniversite"><br>

      <label for="myo"> myo: </label>
      <input type="text" name"" value="<?php echo $myo; ?>" id="üniversite"><br>

      <label for="isim"> Öğrenci adı: </label>
      <input type="text" name"" value="<?php echo $isim; ?>" id="üniversite"><br>

      <label for="soyad"> Öğrenci Soyadı: </label>
      <input type="text" name"" value="<?php echo $soyad; ?>" id="üniversite"><br>

      <label for="numara"> Öğrenci No: </label>
      <input type="text" name"" value="<?php echo $gsm; ?>" id="numara"><br>


      
<!-- Bunu tabloyla yap -->




    </form>

</body>
</html>