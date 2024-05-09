<?php

namespace RiteChoiceInnovations\TabUi\Theme\Base;

class Rounded
{
    public static function rounded(): array
    {
        return [
            'none' => self::roundedNone(),
            'sm' => self::roundedSm(),
            'md' => self::roundedMd(),
            'lg' => self::roundedLg(),
            'xl' => self::roundedXl(),
            '2xl' => self::rounded2Xl(),
            '3xl' => self::rounded3Xl(),
            'full' => self::roundedFull(),
        ];
    }

    /**
     * @return string
     */
    public static function roundedNone(): string
    {
        return 'rounded-none';
    }

    /**
     * @return string
     */
    public static function roundedSm(): string
    {
        return 'rounded-sm';
    }

    /**
     * @return string
     */
    public static function roundedMd(): string
    {
        return 'rounded-md';
    }

    /**
     * @return string
     */
    public static function roundedLg(): string
    {
        return 'rounded-lg';
    }

    /**
     * @return string
     */
    public static function roundedXl(): string
    {
        return 'rounded-xl';
    }

    /**
     * @return string
     */
    public static function rounded2Xl(): string
    {
        return 'rounded-2xl';
    }

    /**
     * @return string
     */
    public static function rounded3Xl(): string
    {
        return 'rounded-3xl';
    }

    /**
     * @return string
     */
    public static function roundedFull(): string
    {
        return 'rounded-full';
    }
}