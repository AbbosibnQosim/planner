<?php

namespace App\Constants;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User;

class Colors
{
    const GREEN_COLOR='#008000';
    const YELLOW_COLOR='#FFFF00';
    const BLUE_COLOR='#0000FF';
    const BLACK_COLOR='#000000';
    const RED_COLOR='#FF0000';
    const PINK_COLOR='#FF69B4';
    const GRAY_COLOR='#808080';
    const INDIGO_COLOR='#4B0082';
    const DOG_COLOR='#556B2F';
    const GOLD_COLOR='#FFD700';
    const TOMATO_COLOR='#FF6347';
    const SKYBLUE_COLOR='#87CEEB';
public static function getList()
{
    return [
        self::GREEN_COLOR,
        self::YELLOW_COLOR,
        self::BLUE_COLOR,
        self::BLACK_COLOR,
        self::RED_COLOR,
        self::PINK_COLOR,
        self::GRAY_COLOR,
        self::INDIGO_COLOR,
        self::DOG_COLOR,
        self::GOLD_COLOR,
        self::TOMATO_COLOR,
        self::SKYBLUE_COLOR,
    ];
}


}
