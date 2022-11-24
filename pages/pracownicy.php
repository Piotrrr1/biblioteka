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
<h1>Tabela <i>pracownicy</i></h1>
<?php
$query = 'SELECT * FROM pracownicy';
$result = mysqli_query($conn, $query);
?>
<p>Zawiera <?=mysqli_num_rows($result)?> wierszy</p>
<table>
    <tr>
        <?php
        if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)){
                echo '<tr><td>'
                    . $row['Id_pracownika'] . '</td><td>'
                    . $row['Nazwisko'] . '</td><td>'
                    . $row['Imie'] . '</td><td>'
                    . $row['Id_stanowisko'] . '</td><td>'
                    . $row['Miasto'] . '</td><td>'
                    . $row['Data_zatrudnienia'] . '</td><td>'
                    . $row['wynagrodzenie'] . '</td><tr>';

            }
        }
        ?>
</table>

