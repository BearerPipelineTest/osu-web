<?php

// Copyright (c) ppy Pty Ltd <contact@ppy.sh>. Licensed under the GNU Affero General Public License v3.0.
// See the LICENCE file in the repository root for full licence text.

declare(strict_types=1);

namespace App\Models\Solo;

use Illuminate\Contracts\Support\Arrayable;
use JsonSerializable;

class ScoreDataStatistics implements Arrayable, JsonSerializable
{
    public int $good;
    public int $great;
    public int $ignoreHit;
    public int $ignoreMiss;
    public int $largeTickHit;
    public int $largeTickMiss;
    public int $meh;
    public int $miss;
    public int $ok;
    public int $perfect;
    public int $smallTickHit;
    public int $smallTickMiss;

    public function __construct($inputData)
    {
        $inputData = get_arr($inputData) ?? [];

        foreach (static::fields() as $field => $map) {
            $this->$field = get_int($inputData[$map['json']] ?? $inputData[$map['json_old']] ?? 0) ?? 0;
        }
    }

    private static function fields(): array
    {
        static $map;

        if (!isset($map)) {
            $map = [];
            $fields = [
                'good',
                'great',
                'ignoreHit',
                'ignoreMiss',
                'largeTickHit',
                'largeTickMiss',
                'meh',
                'miss',
                'ok',
                'perfect',
                'smallTickHit',
                'smallTickMiss',
            ];

            foreach ($fields as $field) {
                $map[$field] = [
                    'json' => snake_case($field),
                    'json_old' => studly_case($field),
                ];
            }
        }

        return $map;
    }

    public function isEmpty(): bool
    {
        foreach (static::fields() as $field => $_map) {
            if ($this->$field !== 0) {
                return false;
            }
        }

        return true;
    }

    public function jsonSerialize(): array
    {
        $ret = [];

        foreach (static::fields() as $field => $map) {
            $ret[$map['json']] = $this->$field;
        }

        return $ret;
    }

    public function toArray(): array
    {
        return $this->jsonSerialize();
    }
}
