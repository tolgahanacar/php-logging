<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
setlocale(LC_TIME, 'tr_TR.UTF-8');
date_default_timezone_set('Europe/Istanbul');
/*echo strftime('%e %B %Y %A %H:%M:%S');*/

function TarayiciTuru()
{
    $tarayicibul = $_SERVER['HTTP_USER_AGENT'];
    if (stristr($tarayicibul, "MSIE")) {
        $tarayici = "Internet Explorer";
    }
    if (stristr($tarayicibul, "Trident")) {
        $tarayici = "Internet Explorer";
    } elseif (stristr($tarayicibul, "Opera")) {
        $tarayici = "Opera";
    } elseif (stristr($tarayicibul, "OPR")) {
        $tarayici = "Opera";
    } elseif (stristr($tarayicibul, "Firefox")) {
        $tarayici = "Mozilla Firefox";
    } elseif (stristr($tarayicibul, "YaBrowser")) {
        $tarayici = "Yandex Browser";
    } elseif (stristr($tarayicibul, "Chrome")) {
        $tarayici = "Google Chrome";
    } elseif (stristr($tarayicibul, "Safari")) {
        $tarayici = "Safari";
    } elseif (stristr($tarayicibul, "Edg")) {
        $tarayici = "Microsoft Edge";
    } else {
        $tarayici = "Tarayıcı Bulunamadı!";
    }
    return $tarayici;
}

@$tarayicituru2k = $_SERVER['HTTP_SEC_CH_UA'];
if ($tarayicituru2k == true) {
    function TarayiciTuru2()
    {
        $kontrol = $_SERVER['HTTP_SEC_CH_UA'];
        if (stristr($kontrol, "Google Chrome")) {
            $sonuc = "Google Chrome";
        } elseif (stristr($kontrol, "Mozilla Firefox")) {
            $sonuc = "Mozilla Firefox";
        } elseif (stristr($kontrol, "Microsoft Edge")) {
            $sonuc = "Microsoft Edge";
        } elseif (stristr($kontrol, "Internet Explorer")) {
            $sonuc = "Internet Explorer";
        } elseif (stristr($kontrol, "Safari")) {
            $sonuc = "Safari";
        } else {
            $sonuc = "Desteklenmeyen veya Bilinmeyen Tarayıcı!";
        }
        return $sonuc;
    }
} else {
    function TarayiciTuru2()
    {
        $sonuc = "Desteklenmeyen veya Bilinmeyen Tarayıcı!";
        return $sonuc;
    }
}

if ($tarayicituru2k == true) {
    $tarayiciversiyon = substr($_SERVER['HTTP_SEC_CH_UA'], 42, 2);
} else {
    $tarayiciversiyon = null;
}


function IsletimSistemi()
{
    $tespit = $_SERVER['HTTP_USER_AGENT'];
    if (stristr($tespit, "Windows 95")) {
        $islemsistemi = "Windows 95";
    } elseif (stristr($tespit, "Windows 98")) {
        $islemsistemi = "Windows 98";
    } elseif (stristr($tespit, "Windows NT 5.0")) {
        $islemsistemi = "Windows 2000";
    } elseif (stristr($tespit, "Windows NT 5.1")) {
        $islemsistemi = "Windows XP";
    } elseif (stristr($tespit, "Windows NT 6.0")) {
        $islemsistemi = "Windows Vista";
    } elseif (stristr($tespit, "Windows NT 6.1")) {
        $islemsistemi = "Windows 7";
    } elseif (stristr($tespit, "Windows NT 6.2")) {
        $islemsistemi = "Windows 8";
    } elseif (stristr($tespit, "Windows NT 6.3")) {
        $islemsistemi = "Windows 8.1";
    } elseif (stristr($tespit, "Windows NT 10.0")) {
        $islemsistemi = "Windows 10";
    } elseif (stristr($tespit, "Mac")) {
        $islemsistemi = "Mac";
    } elseif (stristr($tespit, "Linux")) {
        $islemsistemi = "Linux";
    } else {
        $islemsistemi = "İşletim Sistemi Bilinmiyor!";
    }
    return $islemsistemi;
}

function TarayiciDili()
{
    $denetledil = $_SERVER['HTTP_ACCEPT_LANGUAGE'];
    if (stristr($denetledil, "tr-TR")) {
        $tarayicidili = "Türkçe";
    } elseif (stristr($denetledil, "tr")) {
        $tarayicidili = "Türkçe";
    } elseif (stristr($denetledil, "en")) {
        $tarayicidili = "İngilizce";
    } elseif (stristr($denetledil, "en-EN")) {
        $tarayicidili = "İngilizce";
    } elseif (stristr($denetledil, "en-US")) {
        $tarayicidili = "Amerikan İngilizcesi";
    } elseif (stristr($denetledil, "en-CA")) {
        $tarayicidili = "Kanada İngilizcesi";
    } elseif (stristr($denetledil, "en-IN")) {
        $tarayicidili = "Hindistan İngilizcesi";
    } elseif (stristr($denetledil, "en-NZ")) {
        $tarayicidili = "Yeni Zelanda İngilizcesi";
    } elseif (stristr($denetledil, "en-AU")) {
        $tarayicidili = "Avusturalya İngilizcesi";
    } elseif (stristr($denetledil, "az-AZ")) {
        $tarayicidili = "Azerice";
    } else {
        $tarayicidili = "Tarayıcı Dili Bilinmiyor!";
    }
    return $tarayicidili;
}


$dosyayolu          =     $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI'];
$ipadresi           =     $_SERVER['REMOTE_ADDR'];
$uzakhost           =     gethostbyaddr($_SERVER['REMOTE_ADDR']);
$sunucuprotokolu    =     $_SERVER['SERVER_PROTOCOL'];
$sunucuportu        =     $_SERVER['SERVER_PORT'];
@$karakterseti      =     $_SERVER['HTTP_ACCEPT_CHARSET'];
$istekturu          =     $_SERVER['REQUEST_METHOD'];
$tarayicidili       =     TarayiciDili();
$isletimsistemi     =     IsletimSistemi();
@$gercekip          =     $_SERVER['HTTP_X_FORWARDED_FOR'];
@$cerezler          =     $_SERVER['HTTP_COOKIE'];
$uzakport           =     $_SERVER['REMOTE_PORT'];
$sikistirmaistegi   =     $_SERVER['HTTP_ACCEPT_ENCODING'];
$tarayicituru       =     TarayiciTuru();
$tarayicituru2      =     TarayiciTuru2();
$Tarih              =     date('d.m.Y');
$Saat               =     date('H:i:s');
$tarayiciversiyon;
