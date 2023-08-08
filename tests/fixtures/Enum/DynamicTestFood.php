<?php

namespace Symfonycasts\DynamicForms\Tests\fixtures\Enum;

enum DynamicTestFood: string
{
    case Eggs = 'eggs';
    case Bacon = 'bacon';
    case Strawberries = 'strawberries';
    case Croissant = 'croissant';
    case Bagel = 'bagel';
    case Kiwi = 'kiwi';
    case Avocado = 'avocado';
    case Waffles = 'waffles';
    case Pancakes = 'pancakes';
    case Salad = 'salad';
    case Tea = 'tea️';
    case Sandwich = 'sandwich';
    case Cheese = 'cheese';
    case Sushi = 'sushi';
    case Pizza = 'pizza';
    case Pint = 'pint';
    case Pasta = 'pasta';

    public function getReadable(): string
    {
        return match ($this) {
            self::Eggs => 'Eggs 🍳',
            self::Bacon => 'Bacon 🥓',
            self::Strawberries => 'Strawberries 🍓',
            self::Croissant => 'Croissant 🥐',
            self::Bagel => 'Bagel 🥯',
            self::Kiwi => 'Kiwi 🥝',
            self::Avocado => 'Avocado 🥑',
            self::Waffles => 'Waffles 🧇',
            self::Pancakes => 'Pancakes 🥞',
            self::Salad => 'Salad 🥙',
            self::Tea => 'Tea ☕️',
            self::Sandwich => 'Sandwich 🥪',
            self::Cheese => 'Cheese 🧀',
            self::Sushi => 'Sushi 🍱',
            self::Pizza => 'Pizza 🍕',
            self::Pint => 'A Pint 🍺',
            self::Pasta => 'Pasta 🍝',
        };
    }
}
