<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $samochody = [
        ["marka" => "BMW", "model" => "320d", "rok" => 2018, "cena" => 85000, "przebieg" => 120000, "paliwo" => "diesel", "moc" => 190],
        ["marka" => "Audi", "model" => "A4", "rok" => 2020, "cena" => 110000, "przebieg" => 80000, "paliwo" => "benzyna", "moc" => 150],
        ["marka" => "Volkswagen", "model" => "Golf", "rok" => 2019, "cena" => 75000, "przebieg" => 95000, "paliwo" => "diesel", "moc" => 150],
        ["marka" => "Toyota", "model" => "Corolla", "rok" => 2022, "cena" => 105000, "przebieg" => 45000, "paliwo" => "hybryda", "moc" => 140],
        ["marka" => "Mercedes", "model" => "C220", "rok" => 2017, "cena" => 90000, "przebieg" => 140000, "paliwo" => "diesel", "moc" => 170],
        ["marka" => "Opel", "model" => "Astra", "rok" => 2015, "cena" => 35000, "przebieg" => 180000, "paliwo" => "benzyna", "moc" => 125],
        ["marka" => "Ford", "model" => "Focus", "rok" => 2021, "cena" => 80000, "przebieg" => 60000, "paliwo" => "benzyna", "moc" => 125],
        ["marka" => "Skoda", "model" => "Octavia", "rok" => 2016, "cena" => 55000, "przebieg" => 160000, "paliwo" => "diesel", "moc" => 150],
        ["marka" => "Honda", "model" => "Civic", "rok" => 2023, "cena" => 115000, "przebieg" => 25000, "paliwo" => "benzyna", "moc" => 180],
        ["marka" => "Renault", "model" => "Megane", "rok" => 2014, "cena" => 30000, "przebieg" => 190000, "paliwo" => "diesel", "moc" => 110],
        ["marka" => "Hyundai", "model" => "i30", "rok" => 2020, "cena" => 70000, "przebieg" => 85000, "paliwo" => "benzyna", "moc" => 120],
        ["marka" => "Kia", "model" => "Ceed", "rok" => 2019, "cena" => 65000, "przebieg" => 100000, "paliwo" => "benzyna", "moc" => 140],
        ["marka" => "Peugeot", "model" => "308", "rok" => 2012, "cena" => 22000, "przebieg" => 210000, "paliwo" => "diesel", "moc" => 115],
        ["marka" => "Mazda", "model" => "6", "rok" => 2018, "cena" => 78000, "przebieg" => 110000, "paliwo" => "benzyna", "moc" => 165],
        ["marka" => "Nissan", "model" => "Qashqai", "rok" => 2022, "cena" => 125000, "przebieg" => 35000, "paliwo" => "benzyna", "moc" => 160],
        ["marka" => "Fiat", "model" => "Punto", "rok" => 2008, "cena" => 12000, "przebieg" => 230000, "paliwo" => "benzyna", "moc" => 80],
        ["marka" => "Volvo", "model" => "V60", "rok" => 2021, "cena" => 135000, "przebieg" => 50000, "paliwo" => "diesel", "moc" => 190],
        ["marka" => "Dacia", "model" => "Duster", "rok" => 2016, "cena" => 42000, "przebieg" => 130000, "paliwo" => "benzyna", "moc" => 115],
        ["marka" => "Seat", "model" => "Leon", "rok" => 2024, "cena" => 120000, "przebieg" => 15000, "paliwo" => "benzyna", "moc" => 150],
        ["marka" => "BMW", "model" => "X5", "rok" => 2013, "cena" => 68000, "przebieg" => 200000, "paliwo" => "diesel", "moc" => 245]
    ];
    //funkcja obliczajaca wiek samochodu
    function obliczwiek($rokprodukcji) {
    $akutalnyrok = date("Y");
    return $akutalnyrok - $rokprodukcji;
    }
//funkcja wyszukujaca samochody
function wyszukajSamochody($samochody, $maksymalnaCena) {
$znaleziono = false;
echo "<h2>WYSZUKIWANIE SAMOCHODOW</h2>";
echo "Maksymalna cena: $maksymalnaCena zl<br><br>";
foreach ($samochody as $samochod) {
if ($samochod["cena"] <= $maksymalnaCena) {
echo $samochod["marka"] . " " . $samochod["model"];
echo " - Cena: " . $samochod["cena"] . " zl<br>";
$znaleziono = true;
}
}
if (!$znaleziono) {
echo "Nie znaleziono samochodow w podanej cenie.";
}
echo "<hr>";
}
// FUNKCJA ZNAJDUJACA NAJDROZSZY SAMOCHOD
function najdrozszySamochod($samochody) {
$najdrozszy = $samochody[0];
foreach ($samochody as $samochod) {
if ($samochod["cena"] > $najdrozszy["cena"]) {
$najdrozszy = $samochod;
}
}
return $najdrozszy;
}
// FUNKCJA ZNAJDUJACA NAJTANSZY SAMOCHOD
function najtanszySamochod($samochody) {
$najtanszy = $samochody[0];
foreach ($samochody as $samochod) {
if ($samochod["cena"] < $najtanszy["cena"]) {
$najtanszy = $samochod;
}
}
return $najtanszy;
}
// FUNKCJA OBLICZAJACA SREDNIA CENE
function obliczSredniaCene($samochody) {
$sumaCen = 0;
for ($i = 0; $i < count($samochody); $i++) {
$sumaCen += $samochody[$i]["cena"];
}
$srednia = $sumaCen / count($samochody);
return $srednia;
}

// SORTOWANIE SAMOCHODOW OD NAJTANSZEGO DO NAJDROZSZEGO
usort($samochody, function($a, $b) {
return $a["cena"] <=> $b["cena"];
});
// WYSWIETLANIE WSZYSTKICH SAMOCHODOW
echo "<h1>KOMIS SAMOCHODOWY</h1>";
echo "<hr>";
foreach ($samochody as $samochod) {
$marka = $samochod["marka"];
$model = $samochod["model"];
$rok = $samochod["rok"];
$cena = $samochod["cena"];
$przebieg = $samochod["przebieg"];
$paliwo = $samochod["paliwo"];
$moc = $samochod["moc"];
// OBLICZANIE WIEKU
$wiek = obliczWiek($rok);
// OKRESLANIE KATEGORII SAMOCHODU
if ($wiek <= 3) {
$kategoria = "samochod prawie nowy";
} elseif ($wiek <= 7) {
$kategoria = "samochod kilkuletni";
} elseif ($wiek <= 15) {
$kategoria = "samochod uzywany";
} else {
$kategoria = "samochod zabytkowy lub starszy";
}
echo "<h3>$marka $model</h3>";
echo "Rok produkcji: $rok <br>";
echo "Cena: $cena zl <br>";
echo "Przebieg: $przebieg km <br>";
echo "Paliwo: $paliwo <br>";
echo "Moc: $moc KM <br>";
echo "Wiek: $wiek lat <br>";
echo "Kategoria: $kategoria <br>";
echo "<hr>";
}
// WYSZUKIWANIE SAMOCHODOW DO 80000 ZL
wyszukajSamochody($samochody, 80000);
// OBLICZANIE STATYSTYK
$liczbaSamochodow = count($samochody);
$sredniaCena = obliczSredniaCene($samochody);
$najdrozszy = najdrozszySamochod($samochody);
$najtanszy = najtanszySamochod($samochody);
// LICZENIE SAMOCHODOW DIESEL
$liczbaDiesel = 0;
foreach ($samochody as $samochod) {
if ($samochod["paliwo"] == "diesel") {
$liczbaDiesel++;
}
}
// LICZENIE SAMOCHODOW WYPRODUKOWANYCH PO 2020 ROKU
$liczbaPo2020 = 0;
foreach ($samochody as $samochod) {
if ($samochod["rok"] > 2020) {
$liczbaPo2020++;
}
}
// LICZENIE SAMOCHODOW Z PRZEBIEGIEM PONIZEJ 100000 KM
$liczbaNiskiPrzebieg = 0;
foreach ($samochody as $samochod) {
if ($samochod["przebieg"] < 100000) {
$liczbaNiskiPrzebieg++;
}
}
// WYSWIETLANIE STATYSTYK
echo "<h1>STATYSTYKI KOMISU</h1>";
echo "Liczba wszystkich samochodow: $liczbaSamochodow <br>";
echo "Srednia cena samochodow: " . round($sredniaCena, 2) . " zl <br>";
echo "Najdrozszy samochod: " . $najdrozszy["marka"] . " " . $najdrozszy["model"] . " - " . $najdrozszy["cena"] . " zl<br>";
echo "Najtanszy samochod: " . $najtanszy["marka"] . " " . $najtanszy["model"] . " - " . $najtanszy["cena"] . " zl<br>";
echo "Samochody z silnikiem Diesla: $liczbaDiesel <br>";
echo "Samochody wyprodukowane po 2020 roku: $liczbaPo2020 <br>";
echo "Samochody z przebiegiem ponizej 100000 km: $liczbaNiskiPrzebieg <br>";
echo "<hr>";
    ?>
</body>
</html>