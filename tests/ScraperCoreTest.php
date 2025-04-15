<?php

declare(strict_types=1);

namespace BVP\MikuniScraper\Tests;

use BVP\MikuniScraper\ScraperCore;
use PHPUnit\Framework\Attributes\DataProviderExternal;
use PHPUnit\Framework\TestCase;

/**
 * @author shimomo
 */
final class ScraperCoreTest extends TestCase
{
    /**
     * @var \BVP\MikuniScraper\ScraperCore
     */
    protected ScraperCore $scraper;

    /**
     * @return void
     */
    protected function setUp(): void
    {
        $this->scraper = new ScraperCore();
    }

    /**
     * @param  array  $arguments
     * @param  array  $expected
     * @return void
     */
    #[DataProviderExternal(ScraperCoreDataProvider::class, 'scrapeCommentsProvider')]
    public function testScrapeComments(array $arguments, array $expected): void
    {
        $this->assertSame($expected, $this->scraper->scrapeComments(...$arguments));
    }

    /**
     * @param  array  $arguments
     * @param  array  $expected
     * @return void
     */
    #[DataProviderExternal(ScraperCoreDataProvider::class, 'scrapeForecastsProvider')]
    public function testScrapeForecasts(array $arguments, array $expected): void
    {
        $this->assertSame($expected, $this->scraper->scrapeForecasts(...$arguments));
    }

    /**
     * @param  array  $arguments
     * @param  array  $expected
     * @return void
     */
    #[DataProviderExternal(ScraperCoreDataProvider::class, 'scrapeTimesProvider')]
    public function testScrapeTimes(array $arguments, array $expected): void
    {
        $this->assertSame($expected, $this->scraper->scrapeTimes(...$arguments));
    }

    /**
     * @return void
     */
    public function testThrowsExceptionWhenKeyNotFoundInComments(): void
    {
        $this->expectException(\RuntimeException::class);
        $this->expectExceptionMessage(
            "BVP\MikuniScraper\Scrapers\CommentScraper::scrape() - " .
            "The specified key '.com-rname' is not found in the content of the URL: " .
            "'https://www.boatrace-mikuni.jp/modules/yosou/group-syussou.php?day=20240122&race=1'."
        );

        $this->scraper->scrapeComments(1, '2024-01-22');
    }

    /**
     * @return void
     */
    public function testThrowsExceptionWhenKeyNotFoundInForecasts(): void
    {
        $this->expectException(\RuntimeException::class);
        $this->expectExceptionMessage(
            "BVP\MikuniScraper\Scrapers\ForecastScraper::scrape() - " .
            "The specified key '.z_focus > .focus_list > li' is not found in the content of the URL: " .
            "'https://www.boatrace-mikuni.jp/modules/yosou/group-syussou.php?day=20240122&race=1'."
        );

        $this->scraper->scrapeForecasts(1, '2024-01-22');
    }

    /**
     * @return void
     */
    public function testThrowsExceptionWhenKeyNotFoundInTimes(): void
    {
        $this->expectException(\RuntimeException::class);
        $this->expectExceptionMessage(
            "BVP\MikuniScraper\Scrapers\TimeScraper::scrape() - " .
            "The specified key '.com-rname' is not found in the content of the URL: " .
            "'https://www.boatrace-mikuni.jp/modules/yosou/group-cyokuzen.php?day=20240122&race=1&kind=2'."
        );

        $this->scraper->scrapeTimes(1, '2024-01-22');
    }

    /**
     * @return void
     */
    public function testThrowsExceptionWhenMethodDoesNotExist(): void
    {
        $this->expectException(\BadMethodCallException::class);
        $this->expectExceptionMessage(
            "BVP\MikuniScraper\ScraperCore::__call() - " .
            "Call to undefined method 'BVP\MikuniScraper\ScraperCore::invalid()'."
        );

        $this->scraper->invalid(1, '2024-01-22');
    }
}
