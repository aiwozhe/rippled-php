<?php declare(strict_types=1);

namespace Aiwozhe\Rippled\Api\Method;

use Aiwozhe\Rippled\Api\Field;

/**
 * ChannelAuthorize Method Class
 *
 * The channel_authorize method creates a signature that can be used to redeem a specific amount of XRP from a payment
 * channel.
 *
 * @link https://developers.ripple.com/channel_authorize.html ChannelAuthorize method documentation.
 */
class ChannelAuthorize extends AbstractMethod
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
        $this->addField(new Field([
            'name' => 'channel_id',
            'required' => true
        ]));

        $this->addField(new Field([
            'name' => 'secret',
            'required' => true
        ]));

        $this->addField(new Field([
            'name' => 'amount',
            'required' => true
        ]));

        // END GENERATED
    }
}
