<?php

declare(strict_types=1);

namespace BVP\MikuniScraper;

/**
 * @author shimomo
 */
interface ScraperInterface extends ScraperContractInterface
{
    /**
     * @param  \BVP\MikuniScraper\ScraperCoreInterface
     * @return \BVP\MikuniScraper\ScraperInterface
     */
    public static function getInstance(?ScraperCoreInterface $scraperCore = null): ScraperInterface;

    /**
     * @param  \BVP\MikuniScraper\ScraperCoreInterface
     * @return \BVP\MikuniScraper\ScraperInterface
     */
    public static function createInstance(?ScraperCoreInterface $scraperCore = null): ScraperInterface;

    /**
     * @return void
     */
    public static function resetInstance(): void;
}
