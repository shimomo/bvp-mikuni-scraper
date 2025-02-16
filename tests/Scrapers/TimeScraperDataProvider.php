<?php

declare(strict_types=1);

namespace BVP\MikuniScraper\Tests\Scrapers;

/**
 * @author shimomo
 */
final class TimeScraperDataProvider
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
