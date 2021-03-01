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
$vardai = ["Danielius", "Matas", "Edgaras", "Mantas", "Šarunas", "Vaidotas", "Giedrius", "Aidas", "Andrius", "Laurynas"];
$pavardes = ["Danilauskas", "Skriebys", "Karalius", "Baronas", "Petrauskas", "Vienratis", "Gaidyla", "Centralaitis",
    "Maksimumas", "Sliopaitis"];
$mokinys = new Student('5b',rand(1,9999), date('Y F jS'), strtoupper($vardai[rand(0, 9)]),
    strtoupper($pavardes[rand(0, 9)]), [5, 4, 8]);
$student = (array)$mokinys;
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
                echo "<th>".$student['klase']."</th>";
                echo "<th>".$student['kodas']."</th>";
                echo "<th>".$student['date']."</th>";
                echo "<th>".$student['vardas']."</th>";
                echo "<th>".$student['pavarde']."</th>";
                foreach ($student['vertinimai'] as $paz){
                    $vid = $vid + $paz;
                }
                $vid = round($vid / sizeof($student['vertinimai']));
                echo "<th>".$vid."</th>";
                $mokinys = new Student('5b',rand(1,9999), date('Y F jS'), strtoupper($vardai[rand(0, 9)]),
                    strtoupper($pavardes[rand(0, 9)]), [rand(4,10), rand(4, 10), rand(4, 10)]);
                $student = (array)$mokinys;
                echo '</tr>';
                }
            ?>
</table>
</body>