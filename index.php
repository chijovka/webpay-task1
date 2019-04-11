<?php

function sort_matrix($m) {
    //берем кол-во столбцов
    $column_count = count(reset($m));

    //достаем все значения из массива
    $array_values = call_user_func_array('array_merge', $m);

    //сортируем по возрастанию значений
    sort($array_values);

    //создаем новый массив со значениями по возрастанию
    return array_chunk($array_values, $column_count);
}

$m = [
    [4, 1, 7],
    [8, 3, 2],
    [2, 9, 5],
];

//получаем результат сортировки
$new_m = sort_matrix($m);