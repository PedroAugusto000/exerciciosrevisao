<?php
//Era isso ai memo, não precisa de alteração
$dados[0] = array(0 => "A", 1 => "B");
$dados[1] = array(0 => "C", 1 => "D");
$dados[2] = array(0 => "E", 1 => "F");

echo '<table border="1">';
foreach ($dados as $linha) {
    echo '<tr>';
    foreach ($linha as $v) {
        echo "<td>$v</td>";
    }
    echo '</tr>';
}
echo '</table>';
?>
