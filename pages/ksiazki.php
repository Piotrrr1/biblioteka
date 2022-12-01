<head>
    <style>
        table{
            border: 1px solid black;
            border-collapse: collapse;
        }
        th,td{
            border: 1px solid black;
            padding:3px
        }
    </style>
</head>
<h1>Tabela <i>ksiazki</i></h1>
<?php
$query = 'SELECT * FROM ksiazki';
$result = mysqli_query($conn, $query);
?>
<p>Zawiera <?=mysqli_num_rows($result)?> wierszy</p>
<table>
    <tr>
        <?php
        if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)){
                echo '<tr><td>'
                    . $row['Sygnatura'] . '</td><td>'
                    . $row['Tytul'] . '</td><td>'
                    . $row['Nazwisko'] . '</td><td>'
                    . $row['Imie'] . '</td><td>'
                    . $row['Wydawnictwo'] . '</td><td>'
                    . $row['Miejsce_wyd'] . '</td><td>'
                    . $row['Rok_wyd'] . '</td><td>'
                    . $row['Objetosc_ks'] . '</td><td>'
                    . $row['Cena'] . '</td><td>'
                    . $row['Id_dzial'] . '</td><tr>';
            }
            echo $_SESSION['sebix'];
        }
        ?>
</table>

