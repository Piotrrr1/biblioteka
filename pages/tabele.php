<h1>Lista tabel w bazie danych <i><?= $database ?></i></h1>
<?php
$query = 'Show tables';
$result = mysqli_query($conn, $query);
if (mysqli_num_rows($result) > 0) {
    echo '<ul style="list-style-type: square">';
    while ($row = mysqli_fetch_assoc($result)) {
        echo '<li>';
        foreach ($row as $key => $value) {
            if ($key == 'Nr_czytelnika') {
                echo 'Numer: ' . $value . ' ';
            }
            if ($key != 'Nr_czytelnika') {
                echo ' ' . $value;
            }
        }
        echo '</li>';
    }
    echo '</ul>';
}
