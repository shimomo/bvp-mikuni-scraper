<?php

declare(strict_types=1);

namespace BVP\MikuniScraper\Tests;

use BVP\MikuniScraper\Scraper;
use BVP\MikuniScraper\ScraperInterface;
use PHPUnit\Framework\Attributes\DataProviderExternal;
use PHPUnit\Framework\TestCase;

/**
 * @author shimomo
 */
final class ScraperTest extends TestCase
{
    /**
     * @param  array  $arguments
     * @param  array  $expected
     * @return void
     */
    #[DataProviderExternal(ScraperCoreDataProvider::class, 'scrapeCommentsProvider')]
    public function testScrapeComments(array $arguments, array $expected): void
    {
        $this->assertSame($expected, Scraper::scrapeComments(...$arguments));
    }

    /**
     * @param  array  $arguments
     * @param  array  $expected
     * @return void
     */
    #[DataProviderExternal(ScraperDataProvider::class, 'scrapeForecastsProvider')]
    public function testScrapeForecasts(array $arguments, array $expected): void
    {
        $this->assertSame($expected, Scraper::scrapeForecasts(...$arguments));
    }

    /**
     * @param  array  $arguments
     * @param  array  $expected
     * @return void
     */
    #[DataProviderExternal(ScraperDataProvider::class, 'scrapeTimesProvider')]
    public function testScrapeTimes(array $arguments, array $expected): void
    {
        $this->assertSame($expected, Scraper::scrapeTimes(...$arguments));
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

        Scraper::scrapeComments(1, '2024-01-22');
    }

    /**
     * @return void
     */
    public function testScrapeForecastsWithRaceCode1AndDate20240122(): void
    {
        $this->expectException(\RuntimeException::class);
        $this->expectExceptionMessage(
            "BVP\MikuniScraper\Scrapers\ForecastScraper::scrape() - " .
            "The specified key '.z_focus > .focus_list > li' is not found in the content of the URL: " .
            "'https://www.boatrace-mikuni.jp/modules/yosou/group-syussou.php?day=20240122&race=1'."
        );

        Scraper::scrapeForecasts(1, '2024-01-22');
    }

    /**
     * @return void
     */
    public function testScrapeTimesWithRaceCode1AndDate20240122(): void
    {
        $this->expectException(\RuntimeException::class);
        $this->expectExceptionMessage(
            "BVP\MikuniScraper\Scrapers\TimeScraper::scrape() - " .
            "The specified key '.com-rname' is not found in the content of the URL: " .
            "'https://www.boatrace-mikuni.jp/modules/yosou/group-cyokuzen.php?day=20240122&race=1&kind=2'."
        );

        Scraper::scrapeTimes(1, '2024-01-22');
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

        Scraper::invalid(1, '2024-01-22');
    }

    /**
     * @return void
     */
    public function testGetInstance(): void
    {
        Scraper::resetInstance();
        $this->assertInstanceOf(ScraperInterface::class, Scraper::getInstance());
    }

    /**
     * @return void
     */
    public function testCreateInstance(): void
    {
        Scraper::resetInstance();
        $this->assertInstanceOf(ScraperInterface::class, Scraper::createInstance());
    }

    /**
     * @return void
     */
    public function testResetInstance(): void
    {
        Scraper::resetInstance();
        $instance1 = Scraper::getInstance();
        Scraper::resetInstance();
        $instance2 = Scraper::getInstance();
        $this->assertNotSame($instance1, $instance2);
    }
}
