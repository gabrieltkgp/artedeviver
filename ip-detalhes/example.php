<!-- <head>
    <meta http-equiv="content-Type" content="text/html; charset=iso-8859-1" />
</head> -->
<?php
    include("class.ipdetails.php");
    //ini_set('default_charset','iso-8859-1');
    //$ip = $_SERVER['REMOTE_ADDR'];  
    $ip = "189.4.73.232";
    $ipdetails = new ipdetails(); 
    $ipdetails->scan();
    if($ipdetails->get_pluginstatus() == 200) {
    echo "<b>IP:</b>        ".$ip                        ."<br />"; 
    echo "<b>Pa�s:</b>      ".$ipdetails->get_country()  ."<br />";
    echo "<b>Estado:</b>    ".$ipdetails->get_region()   ."<br />";
    echo "<b>Cidade:</b>    ".html_entity_decode($ipdetails->get_city())     ."<br />";
    echo "<b>Latitude:</b>  ".$ipdetails->get_latitude() ."<br />";
    echo "<b>Longitude:</b> ".$ipdetails->get_longitude()."<br />";
    echo "<b>C�digo pa�s:</b> ".$ipdetails->get_countrycode()."<br />";
    echo "<b>C�digo continente:</b> ".$ipdetails->get_continentcode()."<br />";
    echo "<b>C�digo moeda:</b> ".$ipdetails->get_currencycode()."<br />";
    echo "<b>S�mbolo moeda:</b> ".htmlspecialchars_decode($ipdetails->get_currencysymbol())."<br />";
    echo "<b>Cota��o moeda (d�lar):</b> ".$ipdetails->get_currencyconverter()."<br />";    

    }
    else
    {
        echo "erro";
    }
?>