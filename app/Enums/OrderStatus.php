<?php

namespace App\Enums;

enum OrderStatus: String
{
    case PLACED = 'placed';
    case SHIPPED = 'shipped';
    case CANCELLED = 'cancelled';

    public function label(): string
    {
        return match ($this) {
            self::PLACED => 'Placed',
            self::SHIPPED => 'Shipped',
            self::CANCELLED => 'Cancelled',
        };
    }
}
