<?php

namespace Aiwozhe\Rippled\Tests\Api\Method;

use Aiwozhe\Rippled\Tests\Api\MethodTestCase;

class ServerInfoTest extends MethodTestCase
{
    public function testServerInfo()
    {
        $this->setResponse($this->getJsonFromFile('server_info_success'));
        $response = $this->client->send('server_info');

        $result = $response->getResult();
        $this->assertEquals('success', $result['status']);
    }
}
