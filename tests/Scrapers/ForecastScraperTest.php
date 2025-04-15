<?php

declare(strict_types=1);

namespace BVP\MikuniScraper\Tests\Scrapers;

use BVP\MikuniScraper\Scrapers\ForecastScraper;
use PHPUnit\Framework\Attributes\DataProviderExternal;
use PHPUnit\Framework\TestCase;

/**
 * @author shimomo
 */
final class ForecastScraperTest extends TestCase
{
    /**
     * @var \BVP\MikuniScraper\Scrapers\ForecastScraper
     */
    protected ForecastScraper $scraper;

    /**
     * @return void
     */
    protected function setUp(): void
    {
        $this->scraper = new ForecastScraper();
    }

    /**
     * @param  array  $arguments
     * @param  array  $expected
     * @return void
     */
    #[DataProviderExternal(ForecastScraperDataProvider::class, 'scrapeProvider')]
    public function testScrape(array $arguments, array $expected): void
    {
        $this->assertSame($expected, $this->scraper->scrape(...$arguments));
    }

    /**
     * @return void
     */
    public function testThrowsExceptionWhenKeyNotFound(): void
    {
        $this->expectException(\RuntimeException::class);
        $this->expectExceptionMessage(
            "BVP\MikuniScraper\Scrapers\ForecastScraper::scrape() - " .
            "The specified key '.z_focus > .focus_list > li' is not found in the content of the URL: " .
            "'https://www.boatrace-mikuni.jp/modules/yosou/group-syussou.php?day=20240122&race=1'."
        );

        $this->scraper->scrape(1, '2024-01-22');
    }

    /**
     * @return void
     */
    public function testThrowsExceptionWhenMethodDoesNotExist(): void
    {
        $this->expectException(\BadMethodCallException::class);
        $this->expectExceptionMessage(
            "BVP\MikuniScraper\Scrapers\BaseScraper::__call() - " .
            "Call to undefined method 'BVP\MikuniScraper\Scrapers\BaseScraper::invalid()'."
        );

        $this->scraper->invalid(1, '2024-01-22');
    }
}
