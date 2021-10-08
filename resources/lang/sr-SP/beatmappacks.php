<?php

// Copyright (c) ppy Pty Ltd <contact@ppy.sh>. Licensed under the GNU Affero General Public License v3.0.
// See the LICENCE file in the repository root for full licence text.

return [
    'index' => [
        'description' => 'Већ спремне колекције мапа које су засноване око неке теме.',
        'nav_title' => 'листинг',
        'title' => 'Колекција мапа',

        'blurb' => [
            'important' => 'ПРОЧИТАЈТЕ ОВО ПРЕ НЕГО ШТО СКИНЕТЕ',
            'instruction' => [
                '_' => "Инсталација: Након скидања колекције, екстрактујте .rar у Ваш osu! Songs директоријум.
                     Све мапе су .zip или .osz формата, тако да osu! мора да екстрактује мапе сам следећи пут када уђете у Play мод.
                    :scary екстрактујте .zip или .osz сами,
                    или ће мапе бити приказане лоше у osu! и неће функционисати како треба.",
                'scary' => 'НЕ',
            ],
            'note' => [
                '_' => 'Такође имајте у виду да је препоручено да :scary, зато што су старије мапе много мањег квалитета у односу на већину новијих мапа.',
                'scary' => 'скинете колекције од најнових до најстаријих',
            ],
        ],
    ],

    'show' => [
        'download' => 'Скините',
        'item' => [
            'cleared' => 'очишћено',
            'not_cleared' => 'није очишћено',
        ],
        'no_diff_reduction' => [
            '_' => ':link не могу бити коришћени да би сте прешли ову колекцију.',
            'link' => 'Модови за смањивање тежине мапа',
        ],
    ],

    'mode' => [
        'artist' => 'Извођач/Албум',
        'chart' => 'Сезонске колекције',
        'standard' => 'Стандардне колекције',
        'theme' => 'Тематске колекције',
    ],

    'require_login' => [
        '_' => 'Морате бити :link да би сте скинули',
        'link_text' => 'пријављени',
    ],
];
