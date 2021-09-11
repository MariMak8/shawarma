<?php

namespace www\mariya\ShawarmaMeny;
use www\mariya\Shawarma;
class ShawarmaBaraniya extends Shawarma
{

    public function __construct()
    {
        $this->setCost(85);
        $this->setIngredients(['острый соус', 'огурцы маринованные',' кинза', 'помидоры свежие', 'маринованный лук с барбарисом и зеленью', 'мясо баранины', 'лаваш арабский']);
        $this->setTitle('Шаурма из Баранины');
    }



}