<?php
include('header.php');


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['add_to_cart'])) {
        if (isset($_SESSION['cart'])) {
            $myservice = array_column($_SESSION['cart'], 'Service');
            if (in_array($_POST['Service'], $myservice)) {
                echo "
        <script>
        alert('Service already added');
        window.location.href='mycart.php';
        </script>
        ";
            } else {
                $count = count($_SESSION['cart']);
                $_SESSION['cart'][$count] = array('Service' => $_POST['Service'], 'price' => $_POST['price'], 'Quantity' => 1);
                // print_r($_SESSION['cart']);
                echo "
        <script>
        window.location.href='mycart.php';
        </script>
        ";
            }
        } else {
            $_SESSION['cart'][$count] = array('Service' => $_POST['Service'], 'price' => $_POST['price'], 'Quantity' => 1);
            echo "
        <script>
        window.location.href='mycart.php';
        </script>
        ";
        }
    }

    if (isset($_POST['remove_service'])) {
        foreach ($_SESSION['cart'] as $key => $value) {
            if ($value['Service'] == $_POST['Service']) {
                unset($_SESSION['cart'][$key]);
                $_SESSION['cart'] = array_values($_SESSION['cart']);
                echo "
                <script>
                alert('service removed');
                window.location.href='mycart.php';
                </script>
                ";
            }
        }
    }
}
