<?php
if (!file_exists("logs")) {
    mkdir("logs");
}

touch("logs/" . $Tarih . "-logs" . ".txt");
if (file_exists("logs/" . $Tarih . "-logs" . ".txt")) {
    $dosya = fopen("logs/" . $Tarih . "-logs" . ".txt", "a");
    fwrite(
        $dosya,
            "Tarih:" . " " . $Tarih . ", " .
            "Saat:" . " " . $Saat . ", " .
            "IP Adresi:" . " " . $ipadresi . ", " .
            "Uzak Host:" . " " . $uzakhost . ", " .
            "Sunucu Protokolü:" . " " . $sunucuprotokolu . ", " .
            "Sıkıştırma İsteği:" . " " . $sikistirmaistegi . ", " .
            "Karakter Seti:" . " " . $karakterseti . ", " .
            "İstek Türü:" . " " . $istekturu . ", " .
            "Tarayıcı Dili:" . " " . $tarayicidili . ", " .
            "Tarayıcı Türü:" . " " . $tarayicituru . ", " .
            "İşletim Sistemi:" . " " . $isletimsistemi . ", " .
            "Dosya Yolu:" . " " . $dosyayolu . "\n"


    );
    fclose($dosya);
} else {
    echo "Loglar yazılırken bir hata oluştu! Lütfen tekrar deneyiniz.";
}
