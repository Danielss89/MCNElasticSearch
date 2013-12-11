<?php
/**
 * @author Antoine Hedgecock <antoine@pmg.se>
 *
 * @copyright PMG Media Group AB
 */

namespace MCNElasticSearch\Service\Search\PaginatorAdapter\Doctrine;

use Doctrine\Common\Collections\Collection;
use Doctrine\Common\Persistence\ObjectRepository;
use MCNElasticSearch\Options\MetadataOptions;

/**
 * Interface LoaderStrategyInterface
 */
interface LoaderStrategyInterface
{
    /**
     * Load a bunch of items from the object repository
     *
     * @param array                 $items
     * @param ObjectRepository      $repository
     * @param MetadataOptions $objectMetadata
     *
     * @return Collection
     */
    public function load(array $items, ObjectRepository $repository, MetadataOptions $objectMetadata);
}
