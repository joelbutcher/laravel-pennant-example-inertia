<?php

namespace App\Enums;

use App\Features\ApiTokens;
use App\Features\Teams;

enum FeatureEnum: string
{
    case ApiTokens = 'api-tokens';
    case Teams = 'teams';

    public function resolveToClass(): string
    {
        return match ($this) {
            self::ApiTokens => ApiTokens::class,
            self::Teams => Teams::class,
        };
    }
}
