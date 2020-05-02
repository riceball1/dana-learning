<?php

function my_function() {
    echo "Hello!\n";
};

$my_function = function($name) {
    echo "Helllo $name!\n";
};

$my_function_2 = $my_function;
// $my_function_2("Dana");
// my_function();

$fetch_data_real = function() {
    echo "Fetching data...\n";
};

$fetch_data_fake = function() {
    return print_r([
        'name' => 'Jane Doe',
        'age' => 35,
    ]);
};
$environment = 'dev';
$fetch_data = ($environment === 'dev') ? $fetch_data_fake : $fetch_data_real;
$fetch_data();
?>