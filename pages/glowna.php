<h1>Strona główna</h1>
<h3>Wszystko z supertablicy $_COOKIE</h3>
<?php
echo '<pre>';
print_r($_COOKIE);
echo '</pre>';

if (isset($_COOKIE['ciastko'])) {
    echo '<p>Dane z ciastka wyświetlane jako tablica asocjacyjna PHP: </p></pre>';
    print_r(json_decode($_COOKIE['ciastko'], true));
    echo'</pre>';

    echo '<p>Dane z ciastka wyświetlane jak tekst JSON: </p><pre>'
    . $_COOKIE['ciastko'] . '</pre>';
}
echo '<pre>';
print_r($_SESSION);
echo '</pre>';
?>

