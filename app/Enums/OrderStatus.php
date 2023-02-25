<?php

namespace App\Enums;

enum OrderStatus: String
{
    case PLACED = 'placed';
    case SHIPPED = 'shipped';
    case CANCELLED = 'cancelled';
}
