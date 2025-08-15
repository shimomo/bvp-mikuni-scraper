# BVP Mikuni Scraper

[![tests](https://github.com/shimomo/bvp-mikuni-scraper/actions/workflows/tests.yml/badge.svg)](https://github.com/shimomo/bvp-mikuni-scraper/actions/workflows/tests.yml)
[![codecov](https://codecov.io/gh/shimomo/bvp-mikuni-scraper/graph/badge.svg?token=ND29H7ZHTA)](https://codecov.io/gh/shimomo/bvp-mikuni-scraper)
[![php](https://poser.pugx.org/bvp/mikuni-scraper/require/php)](https://packagist.org/packages/bvp/mikuni-scraper)
[![stable](https://poser.pugx.org/bvp/mikuni-scraper/v/stable)](https://packagist.org/packages/bvp/mikuni-scraper)
[![unstable](https://poser.pugx.org/bvp/mikuni-scraper/v/unstable)](https://packagist.org/packages/bvp/mikuni-scraper#5.x-dev)
[![license](https://poser.pugx.org/bvp/mikuni-scraper/license)](https://packagist.org/packages/bvp/mikuni-scraper)

## Installation
```bash
composer require bvp/mikuni-scraper
```

## Usage
```php
<?php

require __DIR__ . '/vendor/autoload.php';

use BVP\MikuniScraper\Scraper;

// ------------------------------
// 基本的な使い方
// ------------------------------

// scrapeComments($raceNumber, $raceDate = null)
// scrapeForecasts($raceNumber, $raceDate = null)
// scrapeTimes($raceNumber, $raceDate = null)
//
// $raceNumber : レース番号 (1〜12)
// $raceDate   : レース開催日（省略時は当日）
//               - 文字列の場合: Carbon::parse() が解釈できる任意の形式（例: '2025-01-01', '2025/01/01', 'yesterday'）
//               - Carbonインスタンスも可

// 例: ボートレース三国の公式サイトから2024年01月18日の1レースの選手コメントを取得
$comments = Scraper::scrapeComments(1, '2024-01-18');

// 取得結果を表示
print_r($comments);

/*
Array
(
    [boat_number_1_racer_name] => 大上卓人
    [boat_number_1_racer_yesterday_comment_label] => 前日コメント
    [boat_number_1_racer_yesterday_comment] => 足悪くなさそうでまずはこのまま
    [boat_number_2_racer_name] => 齋藤達希
    [boat_number_2_racer_yesterday_comment_label] => 前日コメント
    [boat_number_2_racer_yesterday_comment] => ペラ叩いて一瞬の出足は良かった
    [boat_number_3_racer_name] => 本吉正樹
    [boat_number_3_racer_yesterday_comment_label] => 前日コメント
    [boat_number_3_racer_yesterday_comment] => そのまま乗って回る感じ悪くない
    [boat_number_4_racer_name] => 竹田吉行
    [boat_number_4_racer_yesterday_comment_label] => 前日コメント
    [boat_number_4_racer_yesterday_comment] => モーターは良さそうだしペラから
    [boat_number_5_racer_name] => 松下誉士
    [boat_number_5_racer_yesterday_comment_label] => 前日コメント
    [boat_number_5_racer_yesterday_comment] => 伸びる感じなくターン合ってない
    [boat_number_6_racer_name] => 籾山佳岳
    [boat_number_6_racer_yesterday_comment_label] => 前日コメント
    [boat_number_6_racer_yesterday_comment] => 班の中で一番悪い感じがした
)
*/

// 例: ボートレース三国の公式サイトから2024年01月18日の1レースの記者予想を取得
$forecasts = Scraper::scrapeForecasts(1, '2024-01-18');

// 取得結果を表示
print_r($forecasts);

/*
Array
(
    [reporter_yesterday_focus_label] => 記者予想 前日フォーカス
    [reporter_yesterday_focus] => Array
        (
            [0] => 1=2-4
            [1] => 1=2-3
            [2] => 1=4-2
            [3] => 1=4-3
            [4] => 1=3-2
        )

    [reporter_yesterday_focus_exacta_label] => 記者予想 前日フォーカス 2連単
    [reporter_yesterday_focus_exacta] => Array
        (
        )

    [reporter_yesterday_focus_trifecta_label] => 記者予想 前日フォーカス 3連単
    [reporter_yesterday_focus_trifecta] => Array
        (
            [0] => 1=2-4
            [1] => 1=2-3
            [2] => 1=4-2
            [3] => 1=4-3
            [4] => 1=3-2
        )

    [jlc_yesterday_focus_label] => JLC予想 前日フォーカス
    [jlc_yesterday_focus] => Array
        (
            [0] => 1-4-5
            [1] => 1-5-4
            [2] => 1-4-2
            [3] => 1-5-2
            [4] => 1-2-4
        )

    [jlc_yesterday_focus_exacta_label] => JLC予想 前日フォーカス 2連単
    [jlc_yesterday_focus_exacta] => Array
        (
        )

    [jlc_yesterday_focus_trifecta_label] => JLC予想 前日フォーカス 3連単
    [jlc_yesterday_focus_trifecta] => Array
        (
            [0] => 1-4-5
            [1] => 1-5-4
            [2] => 1-4-2
            [3] => 1-5-2
            [4] => 1-2-4
        )

    [jlc_yesterday_reliability_label] => JLC予想 前日信頼度
    [jlc_yesterday_reliability] => 65%
    [reporter_today_comment_label] => 記者予想 当日コメント
    [reporter_today_comment] => 1R 初戦からチャンスの①大上がこれをしっかりものにする。②齋藤は素早くハンドル切って追従。④竹田も冷静に展開見ながら回る。
    [reporter_today_focus_label] => 記者予想 当日フォーカス
    [reporter_today_focus] => Array
        (
            [0] => 1-2-流し
            [1] => 1-4-流し
        )

    [reporter_today_focus_exacta_label] => 記者予想 当日フォーカス 2連単
    [reporter_today_focus_exacta] => Array
        (
        )

    [reporter_today_focus_trifecta_label] => 記者予想 当日フォーカス 3連単
    [reporter_today_focus_trifecta] => Array
        (
            [0] => 1-2-流し
            [1] => 1-4-流し
        )

)
*/

// 例: ボートレース三国の公式サイトから2024年01月18日の1レースのオリジナル展示タイムを取得
$times = Scraper::scrapeTimes(1, '2024-01-18');

// 取得結果を表示
print_r($times);

/*
Array
(
    [boat_number_1_racer_name] => 大上卓人
    [boat_number_1_racer_exhibition_time] => 6.55
    [boat_number_1_racer_lap_time] => 36.3
    [boat_number_1_racer_turn_time] => 5.07
    [boat_number_1_racer_straight_time] => 6.53
    [boat_number_2_racer_name] => 齋藤達希
    [boat_number_2_racer_exhibition_time] => 6.65
    [boat_number_2_racer_lap_time] => 37.2
    [boat_number_2_racer_turn_time] => 5.4
    [boat_number_2_racer_straight_time] => 6.72
    [boat_number_3_racer_name] => 本吉正樹
    [boat_number_3_racer_exhibition_time] => 6.63
    [boat_number_3_racer_lap_time] => 36.87
    [boat_number_3_racer_turn_time] => 5.43
    [boat_number_3_racer_straight_time] => 6.63
    [boat_number_4_racer_name] => 竹田吉行
    [boat_number_4_racer_exhibition_time] => 6.65
    [boat_number_4_racer_lap_time] => 37.25
    [boat_number_4_racer_turn_time] => 5.53
    [boat_number_4_racer_straight_time] => 6.67
    [boat_number_5_racer_name] => 松下誉士
    [boat_number_5_racer_exhibition_time] => 6.59
    [boat_number_5_racer_lap_time] => 37.63
    [boat_number_5_racer_turn_time] => 5.38
    [boat_number_5_racer_straight_time] => 6.62
    [boat_number_6_racer_name] => 籾山佳岳
    [boat_number_6_racer_exhibition_time] => 6.73
    [boat_number_6_racer_lap_time] => 37.07
    [boat_number_6_racer_turn_time] => 5.5
    [boat_number_6_racer_straight_time] => 6.7
)
*/
```

## License
The BVP Mikuni Scraper is open source software licensed under the [MIT license](LICENSE).
