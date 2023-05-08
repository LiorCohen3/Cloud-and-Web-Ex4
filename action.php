<?php

$in_stock_model = false;
switch($_GET['model']) {
    case '14_pro':
    case '14':
    case '13_pro':
        $in_stock_model = true;
        break;
    default:
        $in_stock_model = false;
        break;
}

$in_stock_color = false;
switch($_GET['color']) {
    case 'grey':
    case 'gold':
    case 'starlight':
        $in_stock_color = true;
        break;
    default:
        $in_stock_color = false;
        break;
}

$in_stock_storage = false;
switch($_GET['storage']) {
    case '64':
    case '128':
    case '512':
        $in_stock_storage = true;
        break;
    default:
        $in_stock_storage = false;
        break;
}



if($in_stock_model && $in_stock_color && $in_stock_storage) {
    echo '<h1>Order Confirmed!</h1>';
    echo '<p>Your selected iPhone model is in stock. Thank you for your order!</p>';
} else {
    echo '<h1>Out of Stock</h1>';
    echo '<p>We are sorry, but the selected iPhone model is currently out of stock. Please try again later.</p>';
}

?>
