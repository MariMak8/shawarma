<?php

namespace www\mariya;

interface ShawarmaMeny
{
    public function getCost(): float;
    public function getIngredients(): array;
    public function getTitle(): string;
}