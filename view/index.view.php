<!DOCTYPE>
<head>
    <style>
        table,th,tr{
            border: 1px solid black;
            border-collapse: collapse;
            padding: 5px;
        }
        .i{
            background-color: #152235;
            color: white;
        }
    </style>
</head>
<body>
<?php
use ProductsApp\Student;
use ProductsApp\Render;

$vardai = ["Danielius", "Matas", "Edgaras", "Mantas", "Šarunas", "Vaidotas", "Giedrius", "Aidas", "Andrius", "Laurynas"];
$pavardes = ["Danilauskas", "Skriebys", "Karalius", "Baronas", "Petrauskas", "Vienratis", "Gaidyla", "Centralaitis",
    "Maksimumas", "Sliopaitis"];
$paz = [rand(4, 10), rand(4, 10), rand(4, 10)];
$average = array_sum($paz)/count($paz);

function averRage($a, $b, $c){
    $d = [$a, $b, $c];
    $vid = array_sum($d)/count($d);
    $vid = round($vid);
    return $vid;
}
$mokinys = new Student('5b',rand(1,9999), date('Y F jS'), strtoupper($vardai[rand(0, 9)]),
    strtoupper($pavardes[rand(0, 9)]), averRage(rand(4, 10), rand(4, 10), rand(4, 10)));
?>
        <table>
        <tr class="i">
            <th>Klase</th>
            <th>Kodas</th>
            <th>Data</th>
            <th>Vardas</th>
            <th>Pavarde</th>
            <th>Ivertinimas</th>
        </tr>
            <?php
                for ($i=0; $i<10;$i++){
                    echo '<tr>';
                    Render::Show($mokinys->showStudent());
                    $mokinys = new Student('5b',rand(1,9999), date('Y F jS'), strtoupper($vardai[rand(0, 9)]),
                        strtoupper($pavardes[rand(0, 9)]), averRage(rand(4, 10), rand(4, 10), rand(4, 10)));
                    echo '</tr>';
                }
            ?>
</table>
</body>