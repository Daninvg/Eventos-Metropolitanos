<?php

namespace App\Enums;

enum EventoEstado: string
{
    case PROXIMAMENTE = 'proximamente';
    case ACTIVO = 'activo';

    public static function values(): array
    {
        return array_column(self::cases(), 'value');
    }
}
