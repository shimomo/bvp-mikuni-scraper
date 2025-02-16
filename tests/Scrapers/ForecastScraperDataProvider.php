<?php

declare(strict_types=1);

namespace BVP\MikuniScraper\Tests\Scrapers;

/**
 * @author shimomo
 */
final class ForecastScraperDataProvider
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
}
