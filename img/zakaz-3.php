<?php
$name=$_POST['name'];
$adress=$_POST['adress'];
$oplata=$_POST['oplata'];
$tovar=$_POST['tovar'];
$kolvo=$_POST['kolvo'];
?>
<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <title>Результаты заказа</title>
</head>
<body>
<h2>Результаты заказа</h2>
    <?php
    define('RUPRICE', 10);
    define('KNPRICE', 100);
    define('SUVPRICE', 1000);
    define('KPPRICE', 10000);

    $dost=500;
    $nalog=18;
    echo "Товар - $tovar"."<br>";
    if ($tovar=="Ручка"){
    echo "Стоимость 1шт. - $RUPRICE p "."<br>";}
    elseif ($tovar=="Книга"){
        $b=100;
    echo "Стоимость 1шт. - $b p "."<br>";}
    elseif ($tovar=="Сувенир"){
        $b=1000;
    echo "Стоимость 1шт. - $b p "."<br>";}
    else{
        $b=10000;
    echo "Стоимость 1шт. - $b p "."<br>";}
    echo "Количество заказанных товаров - $kolvo"."<br>";
    $obsum=$kolvo*$b;
    echo "Общая стоимость заказа $obsum"."<br>";
    echo "Стоимость доставки $dost р"."<br>";
    echo "Налог с продаж  $nalog %"."<br>";
    if (($kolvo < 5) and ($b==10)) {
        $discount=5;
        echo "Ваша скидка $discount %<br>";
    }
    if ((10 < $pokr) and ($pokr < 49)) {
        $discount=5;
        echo "Ваша скидка $discount %<br>";
    }
    if ((50 < $pokr) and ($pokr < 100)) {
        $discount=10;
        echo "Ваша скидка $discount %<br>";
    }
    if (100 < $pokr) {
        $discount=15;
        echo "Ваша скидка $discount %<br>";
    }
    
    ?>
    
</body>
</html>