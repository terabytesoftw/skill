<?php

declare(strict_types=1);

final class EmailCases
{
    public static function invalid(): array
    {
        return [
            ['input' => '', 'reason' => 'required'],
            ['input' => 'missing-at.example', 'reason' => 'format'],
        ];
    }
}
