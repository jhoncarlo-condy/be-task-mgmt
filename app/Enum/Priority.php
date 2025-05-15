<?php

namespace App\Enum;

enum Priority: string
{
    case LOW = 'low';
    case MEDIUM = 'medium';
    case HIGH = 'high';

    public function label(): string
    {
        return match($this) {
            self::LOW    => 'Low',
            self::MEDIUM => 'edium',
            self::HIGH   => 'High'
          };
    }
}
