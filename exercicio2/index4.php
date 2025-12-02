<?php

class Matematica {
    const PI = 3.14;

    public static function area_circulo($raio)
    {
        return self::PI * $raio * $raio;
    }
}

echo Matematica:: area_circulo(10);
echo Matematica::PI;