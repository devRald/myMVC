<?php

$route['api/customer'] = 'customer_list.php';
$route['api/customer/(:num)'] = 'customer.php?id=$1';

?>