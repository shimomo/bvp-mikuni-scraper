<?php

declare(strict_types=1);

namespace BVP\MikuniScraper\Tests;

/**
 * @author shimomo
 */
final class ScraperCoreDataProvider
{
    /**
     * @return array
     */
    public static function scrapeCommentsProvider(): array
    {
        return [
            [
                'arguments' => [1, '2024-01-18'],
                'expected' => [
                    'boat_number_1_racer_name' => '大上卓人',
                    'boat_number_1_racer_yesterday_comment_label' => '前日コメント',
                    'boat_number_1_racer_yesterday_comment' => '足悪くなさそうでまずはこのまま',
                    'boat_number_2_racer_name' => '齋藤達希',
                    'boat_number_2_racer_yesterday_comment_label' => '前日コメント',
                    'boat_number_2_racer_yesterday_comment' => 'ペラ叩いて一瞬の出足は良かった',
                    'boat_number_3_racer_name' => '本吉正樹',
                    'boat_number_3_racer_yesterday_comment_label' => '前日コメント',
                    'boat_number_3_racer_yesterday_comment' => 'そのまま乗って回る感じ悪くない',
                    'boat_number_4_racer_name' => '竹田吉行',
                    'boat_number_4_racer_yesterday_comment_label' => '前日コメント',
                    'boat_number_4_racer_yesterday_comment' => 'モーターは良さそうだしペラから',
                    'boat_number_5_racer_name' => '松下誉士',
                    'boat_number_5_racer_yesterday_comment_label' => '前日コメント',
                    'boat_number_5_racer_yesterday_comment' => '伸びる感じなくターン合ってない',
                    'boat_number_6_racer_name' => '籾山佳岳',
                    'boat_number_6_racer_yesterday_comment_label' => '前日コメント',
                    'boat_number_6_racer_yesterday_comment' => '班の中で一番悪い感じがした',
                ],
            ],
            [
                'arguments' => [6, '2024-01-18'],
                'expected' => [
                    'boat_number_1_racer_name' => '松山裕基',
                    'boat_number_1_racer_yesterday_comment_label' => '前日コメント',
                    'boat_number_1_racer_yesterday_comment' => '弱くはないけど普通くらいかな',
                    'boat_number_2_racer_name' => '松本庸平',
                    'boat_number_2_racer_yesterday_comment_label' => '前日コメント',
                    'boat_number_2_racer_yesterday_comment' => '悪い感じなかったが乗心地不安定',
                    'boat_number_3_racer_name' => '古田祐貴',
                    'boat_number_3_racer_yesterday_comment_label' => '前日コメント',
                    'boat_number_3_racer_yesterday_comment' => 'このままでも戦えそうな感じした',
                    'boat_number_4_racer_name' => '寺嶋雄',
                    'boat_number_4_racer_yesterday_comment_label' => '前日コメント',
                    'boat_number_4_racer_yesterday_comment' => '回転を合わせれば良くなりそう',
                    'boat_number_5_racer_name' => '本吉正樹',
                    'boat_number_5_racer_yesterday_comment_label' => '前日コメント',
                    'boat_number_5_racer_yesterday_comment' => 'そのまま乗って回る感じ悪くない',
                    'boat_number_6_racer_name' => '徳増秀樹',
                    'boat_number_6_racer_yesterday_comment_label' => '前日コメント',
                    'boat_number_6_racer_yesterday_comment' => 'ペラが合ってない感じ。色々やる',
                ],
            ],
        ];
    }

    /**
     * @return array
     */
    public static function scrapeForecastsProvider(): array
    {
        return [
            [
                'arguments' => [1, '2024-01-18'],
                'expected' => [
                    'reporter_yesterday_focus_label' => '記者予想 前日フォーカス',
                    'reporter_yesterday_focus' => ['1=2-4', '1=2-3', '1=4-2', '1=4-3', '1=3-2'],
                    'reporter_yesterday_focus_exacta_label' => '記者予想 前日フォーカス 2連単',
                    'reporter_yesterday_focus_exacta' => [],
                    'reporter_yesterday_focus_trifecta_label' => '記者予想 前日フォーカス 3連単',
                    'reporter_yesterday_focus_trifecta' => ['1=2-4', '1=2-3', '1=4-2', '1=4-3', '1=3-2'],
                    'jlc_yesterday_focus_label' => 'JLC予想 前日フォーカス',
                    'jlc_yesterday_focus' => ['1-4-5', '1-5-4', '1-4-2', '1-5-2', '1-2-4'],
                    'jlc_yesterday_focus_exacta_label' => 'JLC予想 前日フォーカス 2連単',
                    'jlc_yesterday_focus_exacta' => [],
                    'jlc_yesterday_focus_trifecta_label' => 'JLC予想 前日フォーカス 3連単',
                    'jlc_yesterday_focus_trifecta' => ['1-4-5', '1-5-4', '1-4-2', '1-5-2', '1-2-4'],
                    'jlc_yesterday_reliability_label' => 'JLC予想 前日信頼度',
                    'jlc_yesterday_reliability' => '65%',
                    'reporter_today_comment_label' => '記者予想 当日コメント',
                    'reporter_today_comment' => '1R 初戦からチャンスの①大上がこれをしっかりものにする。②齋藤は素早くハンドル切って追従。④竹田も冷静に展開見ながら回る。',
                    'reporter_today_focus_label' => '記者予想 当日フォーカス',
                    'reporter_today_focus' => ['1-2-流し', '1-4-流し'],
                    'reporter_today_focus_exacta_label' => '記者予想 当日フォーカス 2連単',
                    'reporter_today_focus_exacta' => [],
                    'reporter_today_focus_trifecta_label' => '記者予想 当日フォーカス 3連単',
                    'reporter_today_focus_trifecta' => ['1-2-流し', '1-4-流し'],
                ],
            ],
            [
                'arguments' => [6, '2024-01-18'],
                'expected' => [
                    'reporter_yesterday_focus_label' => '記者予想 前日フォーカス',
                    'reporter_yesterday_focus' => ['6=3-1', '6=3-2', '6=1-3', '6=1-2', '6=2-3'],
                    'reporter_yesterday_focus_exacta_label' => '記者予想 前日フォーカス 2連単',
                    'reporter_yesterday_focus_exacta' => [],
                    'reporter_yesterday_focus_trifecta_label' => '記者予想 前日フォーカス 3連単',
                    'reporter_yesterday_focus_trifecta' => ['6=3-1', '6=3-2', '6=1-3', '6=1-2', '6=2-3'],
                    'jlc_yesterday_focus_label' => 'JLC予想 前日フォーカス',
                    'jlc_yesterday_focus' => ['6-3-1', '6-3-4', '3-6-1', '3-6-4', '6-1-3'],
                    'jlc_yesterday_focus_exacta_label' => 'JLC予想 前日フォーカス 2連単',
                    'jlc_yesterday_focus_exacta' => [],
                    'jlc_yesterday_focus_trifecta_label' => 'JLC予想 前日フォーカス 3連単',
                    'jlc_yesterday_focus_trifecta' => ['6-3-1', '6-3-4', '3-6-1', '3-6-4', '6-1-3'],
                    'jlc_yesterday_reliability_label' => 'JLC予想 前日信頼度',
                    'jlc_yesterday_reliability' => '80%',
                    'reporter_today_comment_label' => '記者予想 当日コメント',
                    'reporter_today_comment' => '6R 大外枠の⑥徳増だが、コース取りも視野に巧みに捌いて外枠克服。③古田は全速ターンで迫る。①松山もインをキープして連に絡む。',
                    'reporter_today_focus_label' => '記者予想 当日フォーカス',
                    'reporter_today_focus' => ['6=3-124', '6=1-234'],
                    'reporter_today_focus_exacta_label' => '記者予想 当日フォーカス 2連単',
                    'reporter_today_focus_exacta' => [],
                    'reporter_today_focus_trifecta_label' => '記者予想 当日フォーカス 3連単',
                    'reporter_today_focus_trifecta' => ['6=3-124', '6=1-234'],
                ],
            ],
        ];
    }

    /**
     * @return array
     */
    public static function scrapeTimesProvider(): array
    {
        return [
            [
                'arguments' => [1, '2024-01-18'],
                'expected' => [
                    'boat_number_1_racer_name' => '大上卓人',
                    'boat_number_1_racer_exhibition_time' => 6.55,
                    'boat_number_1_racer_lap_time' => 36.30,
                    'boat_number_1_racer_turn_time' => 5.07,
                    'boat_number_1_racer_straight_time' => 6.53,
                    'boat_number_2_racer_name' => '齋藤達希',
                    'boat_number_2_racer_exhibition_time' => 6.65,
                    'boat_number_2_racer_lap_time' => 37.20,
                    'boat_number_2_racer_turn_time' => 5.40,
                    'boat_number_2_racer_straight_time' => 6.72,
                    'boat_number_3_racer_name' => '本吉正樹',
                    'boat_number_3_racer_exhibition_time' => 6.63,
                    'boat_number_3_racer_lap_time' => 36.87,
                    'boat_number_3_racer_turn_time' => 5.43,
                    'boat_number_3_racer_straight_time' => 6.63,
                    'boat_number_4_racer_name' => '竹田吉行',
                    'boat_number_4_racer_exhibition_time' => 6.65,
                    'boat_number_4_racer_lap_time' => 37.25,
                    'boat_number_4_racer_turn_time' => 5.53,
                    'boat_number_4_racer_straight_time' => 6.67,
                    'boat_number_5_racer_name' => '松下誉士',
                    'boat_number_5_racer_exhibition_time' => 6.59,
                    'boat_number_5_racer_lap_time' => 37.63,
                    'boat_number_5_racer_turn_time' => 5.38,
                    'boat_number_5_racer_straight_time' => 6.62,
                    'boat_number_6_racer_name' => '籾山佳岳',
                    'boat_number_6_racer_exhibition_time' => 6.73,
                    'boat_number_6_racer_lap_time' => 37.07,
                    'boat_number_6_racer_turn_time' => 5.50,
                    'boat_number_6_racer_straight_time' => 6.70,
                ],
            ],
            [
                'arguments' => [6, '2024-01-18'],
                'expected' => [
                    'boat_number_1_racer_name' => '松山裕基',
                    'boat_number_1_racer_exhibition_time' => 6.67,
                    'boat_number_1_racer_lap_time' => 36.83,
                    'boat_number_1_racer_turn_time' => 5.17,
                    'boat_number_1_racer_straight_time' => 6.63,
                    'boat_number_2_racer_name' => '松本庸平',
                    'boat_number_2_racer_exhibition_time' => 6.55,
                    'boat_number_2_racer_lap_time' => 38.25,
                    'boat_number_2_racer_turn_time' => 5.65,
                    'boat_number_2_racer_straight_time' => 6.77,
                    'boat_number_3_racer_name' => '古田祐貴',
                    'boat_number_3_racer_exhibition_time' => 6.65,
                    'boat_number_3_racer_lap_time' => 37.27,
                    'boat_number_3_racer_turn_time' => 5.70,
                    'boat_number_3_racer_straight_time' => 6.70,
                    'boat_number_4_racer_name' => '寺嶋雄',
                    'boat_number_4_racer_exhibition_time' => 6.63,
                    'boat_number_4_racer_lap_time' => 37.95,
                    'boat_number_4_racer_turn_time' => 5.70,
                    'boat_number_4_racer_straight_time' => 6.70,
                    'boat_number_5_racer_name' => '本吉正樹',
                    'boat_number_5_racer_exhibition_time' => 6.67,
                    'boat_number_5_racer_lap_time' => 37.62,
                    'boat_number_5_racer_turn_time' => 5.62,
                    'boat_number_5_racer_straight_time' => 6.70,
                    'boat_number_6_racer_name' => '徳増秀樹',
                    'boat_number_6_racer_exhibition_time' => 6.63,
                    'boat_number_6_racer_lap_time' => 37.63,
                    'boat_number_6_racer_turn_time' => 5.50,
                    'boat_number_6_racer_straight_time' => 6.58,
                ],
            ],
        ];
    }
}
