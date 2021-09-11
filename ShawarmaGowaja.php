<?php

namespace www\mariya\ShawarmaMeny;
use www\mariya\Shawarma;

class ShawarmaGowaja extends Shawarma
{
    public function __construct()
    {
        $this->setCost(75);
        $this->setIngredients(['чесночный соус', 'говяжий окорок', 'огурцы маринованные', 'маринованный лук с барбарисом и зеленью', 'салат коул слоу', 'тандырный лаваш', 'помидоры свежие', 'хумус', 'соус тахин']);
        $this->setTitle('Шаурма из Говядины');
    }
}