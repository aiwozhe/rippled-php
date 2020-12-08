<?php declare(strict_types=1);

namespace Aiwozhe\Rippled\Api\Method;

use Aiwozhe\Rippled\Api\Field;

/**
 * Random Method Class
 *
 * The random command provides a random number to be used as a source of entropy for random number generation by
 * clients.
 *
 * @link https://developers.ripple.com/random.html Random method documentation.
 */
class Random extends AbstractMethod
{
    /**
     * {@inheritDoc}
     *
     * @throws \Aiwozhe\Rippled\Exception\FieldException
     */
    public function setFields(): void
    {
        parent::setFields();

        // GENERATED CODE FROM bin/generate.php types
        // BEGIN GENERATED
        // END GENERATED
    }
}
