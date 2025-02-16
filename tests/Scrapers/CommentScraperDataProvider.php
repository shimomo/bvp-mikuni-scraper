<?php

declare(strict_types=1);

namespace BVP\MikuniScraper\Tests\Scrapers;

/**
 * @author shimomo
 */
final class CommentScraperDataProvider
{
    /**
     * @return array
     */
    public static function scrapeProvider(): array
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
}
