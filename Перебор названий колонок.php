<?php


$sql_col = $pdo->prepare("DESC `clients_table`"); // выбираем названия колонок из таблицы
$sql_col->execute();
$result_col = $sql_col->fetchAll();

foreach ($result_col as $value_col) { 
echo '<pre>';
print_r( $value_col[0] );           // выводит массив данных по Заказчику
echo '</pre>';
}
// exit();

?>