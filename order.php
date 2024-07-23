<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        @font-face {
            font-family: 'TT Norms Light';
            src: url('styles/fonts/tt-norms-pro-serif/TTNormsProSerif-Light.ttf') format('truetype');
        }
        
        @font-face {
            font-family: 'TT Norms Regular';
            src: url('fonts/tt-norms-pro-serif/TTNormsProSerif-Regular.ttf') format('truetype');
        }

        body {
            color: #182C44;
            margin: 0;
            font-size: 42px;
            font-family: 'TT Norms Light';
            min-height: 100vb;
            align-items: center;
            display: flex;
            justify-content: center;
            background-color: #f7f7e8;
            flex-direction:column;
        }

        .button {
            color: #f7f7e8;
            margin: 2vb;
            border: rgb(126, 119, 110) solid 1px;
            border-radius: 10px;
            background-color: rgb(126, 119, 110);
            font-size: 24px;
            padding: 1vb 2vb;
            transition: 0.3s
        }

        .button:hover {
            color: #182C44;
            background-color: rgba(126, 119, 110, 0.05);
            transition: 0.3s
        }
        
        a {
            text-decoration:none;
        }

    </style>
</head>
<body>
    <?php

    require_once("bd.php");
    
    $name = $_POST['name'];
    $email = $_POST['email'];
    $itemName = $_POST['item-name'];
    $itemPrice = $_POST['item-price'];

    // Подготовка и выполнение SQL-запроса
    $sql = "INSERT INTO `new` (name, email, itemName, itemPrice) VALUES ('$name', '$email', '$itemName', '$itemPrice')";

    if ($conn->query($sql) === TRUE) {
        echo "Спасибо за заказ!";
    } else {
        echo $conn->error;
    }
    ?>

    <a href="index.html">
        <div class="button">
            <div>Вернуться в магазин</div>
        </div>
    </a>
</body>
</html>




