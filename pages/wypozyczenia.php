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
<h1>Tabela <i>wypozyczenia</i></h1>
<?php
$query = 'SELECT * FROM wypozyczenia';
$result = mysqli_query($conn, $query);
?>
<p>Zawiera <?=mysqli_num_rows($result)?> wierszy</p>
<table>
    <tr>
        <?php
        if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)){
                echo '<tr><td>'
                    . $row['Nr_transakcji'] . '</td><td>'
                    . $row['Sygnatura'] . '</td><td>'
                    . $row['Id_pracownika'] . '</td><td>'
                    . $row['Nr_czytelnika'] . '</td><td>'
                    . $row['Data_wypozyczenia'] . '</td><td>'
                    . $row['Data_zwrotu'] . '</td><tr>';

            }
        }
        ?>
</table>

