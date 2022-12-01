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
<h1>Tabela <i>dzialy</i></h1>
<?php
$query = 'SELECT * FROM dzialy';
$result = mysqli_query($conn, $query);
?>
<p>Zawiera <?=mysqli_num_rows($result)?> wierszy</p>
<table>
    <tr>
        <?php
        if (mysqli_num_rows($result) > 0) {
            $dzialy = array();
            while ($row = mysqli_fetch_assoc($result)){
                    $dzialy[]=$row;
                echo '<tr><td>'
                    . $row['Id_dzial'] . '</td><td>'
                    . $row['Nazwa'] . '</td></tr>';
            }
            setcookie ("dzialy",json_encode($dzialy), time()+86400, "/");
        }
        ?>
</table>
