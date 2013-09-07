<?php
/**
 * @author Antoine Hedgecock <antoine@pmg.se>
 *
 * @copyright PMG Media Group AB
 */

namespace MCNElasticSearch\Service\Exception;
use Exception;

/**
 * Class ObjectMetadataMissingException
 */
class ObjectMetadataMissingException extends RuntimeException
{
    public function __construct($message = "", $code = 0, Exception $previous = null)
    {
        parent::__construct(sprintf('Could not find the object metadata for %s', $message), $code, $previous);
    }
}
