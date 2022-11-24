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
<h1>Tabela <i>stanowiska</i></h1>
<?php
$query = 'SELECT * FROM stanowiska';
$result = mysqli_query($conn, $query);
?>
<p>Zawiera <?=mysqli_num_rows($result)?> wierszy</p>
<table>
    <tr>
        <?php
        if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
                echo '<tr><td>'
                    . $row['Id_stanowisko'] . '</td><td>'
                    . $row['Nazwa'] . '</td><td><a href="?page=stanowiska_formularz&stanowisko='.$row['Id_stanowisko'].'">Edycja</a> </td><tr>';
            }
        }
        ?>
</table>

