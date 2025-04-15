<?php

declare(strict_types=1);

namespace BVP\MikuniScraper\Tests\Scrapers;

use BVP\MikuniScraper\Scrapers\TimeScraper;
use PHPUnit\Framework\Attributes\DataProviderExternal;
use PHPUnit\Framework\TestCase;

/**
 * @author shimomo
 */
final class TimeScraperTest extends TestCase
{
    /**
     * @var \BVP\MikuniScraper\Scrapers\TimeScraper
     */
    protected TimeScraper $scraper;

    /**
     * @return void
     */
    protected function setUp(): void
    {
        $this->scraper = new TimeScraper();
    }

    /**
     * @param  array  $arguments
     * @param  array  $expected
     * @return void
     */
    #[DataProviderExternal(TimeScraperDataProvider::class, 'scrapeProvider')]
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
            "BVP\MikuniScraper\Scrapers\TimeScraper::scrape() - " .
            "The specified key '.com-rname' is not found in the content of the URL: " .
            "'https://www.boatrace-mikuni.jp/modules/yosou/group-cyokuzen.php?day=20240122&race=1&kind=2'."
        );

        $this->scraper->scrape(1, '2024-01-22');
    }

    /**
     * @return void
     */
    public function testInvalidWithRaceCode1AndDate20240122(): void
    {
        $this->expectException(\BadMethodCallException::class);
        $this->expectExceptionMessage(
            "BVP\MikuniScraper\Scrapers\BaseScraper::__call() - " .
            "Call to undefined method 'BVP\MikuniScraper\Scrapers\BaseScraper::invalid()'."
        );

        $this->scraper->invalid(1, '2024-01-22');
    }
}
