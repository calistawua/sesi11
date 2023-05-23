<?php
    $dta["nama"] = "Komang Adi";
    $dta["alamat"] = "Jl.Utama 5 Blok A17";
    $dta["tgl-lahir"] = "2011-11-28";

    $dta[1]["nama"] = "Calista";
    $dta[1]["alamat"] = "Jl.Tukad Pancoran 10b";
    $dta[1]["tgl-lahir"] = "2003-03-07";

    $dta[2]["nama"] = "Jesika";
    $dta[2]["alamat"] = "Jl.Pancoran 28";
    $dta[2]["tgl-lahir"] = "2004-05-24";


    header("Content-type: application/json; charset=utf-8");
    echo json_encode($dta);
