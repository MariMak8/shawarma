<?php


$shawarma1 = new www\mariya\shawarmaMeny\ShawarmaOdessa();
$shawarma2 = new www\mariya\shawarmaMeny\ShawarmaGowaja();
$shawarma3 = new www\mariya\shawarmaMeny\ShawarmaBaraniya();

echo $shawarma1->getTitle() . '<br>Цена: ' . $shawarma1->getCost() . ' гривен' . '<br>Ингридиенты: ' . implode(', ', $shawarma1->getIngredients());
echo '<br><br>';
echo $shawarma2->getTitle() . '<br>Цена: ' . $shawarma2->getCost() . ' гривен' . '<br>Ингридиенты: ' . implode(', ', $shawarma2->getIngredients());
echo '<br><br>';
echo $shawarma3->getTitle() . '<br>Цена: ' . $shawarma3->getCost() . ' гривен' . '<br>Ингридиенты: ' . implode(', ', $shawarma3->getIngredients());
echo '<br><br><br>';

$bag = new \www\mariya\ShawarmaCalculator();
$bag->add($shawarma1);
$bag->add($shawarma2);
$bag->add($shawarma3);
echo 'Корзина:';
echo '<br><br>';
echo implode(', ', $bag->getBag());
echo '<br><br>';
echo 'Цена: ' . $bag->getCost();
echo '<br><br>';
echo 'Ингридиенты: ' . implode(', ', $bag->getIngredients());