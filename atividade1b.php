<!DOCTYPE html>
<html>
<head> <!--Criar bordar pelo CSS-->
    <style>
        table {
            border-collapse: collapse;
            width: 35%;
        }

        table, th, td {
            border: 1px solid black;
        }

        th, td {
            padding: 10px;
            text-align: center;
        }
    </style>
</head>
<body>

<?php
//Criação do array
$dados = array(
    array("Nome", "Idade", "Curso", "Média"),
    array("Pedro", 30, "ADS", 7.0)
);
?>

<!--Abrir a tabela fora do PHP-->
<table>
    <?php
    foreach ($dados as $linha) {
        echo "<tr>";
        foreach ($linha as $valor) {
            echo "<td>" . $valor . "</td>";
        }
        echo "</tr>";
        }
    ?>
</table>
</body>
</html>