<?php declare(strict_types=1);

namespace XRPHP\FunctionalTests\Api\Method;

use XRPHP\Api\Transaction;
use XRPHP\FunctionalTests\FunctionalTestCase;

class PaymentTest extends FunctionalTestCase
{
    public function testPaymentWithLocalSign()
    {
        $balances = [
            [
                'pre' => $this->getBalance($this->getAcct1Id())
            ],
            [
                'pre' =>  $this->getBalance($this->getAcct2Id())
            ]
        ];

        $trans = new Transaction($this->getTx(), $this->client);
        $trans->submit($this->getAcct1Secret());

        $balances[0]['post'] = $this->getBalance($this->getAcct1Id());
        $balances[1]['post'] = $this->getBalance($this->getAcct2Id());

        $this->assertLessThan($balances[0]['pre'], $balances[0]['post']);
        $this->assertGreaterThan($balances[1]['pre'], $balances[1]['post']);
    }

    public function testPaymentWithRemoteSign()
    {
        $balances = [
            [
                'pre' => $this->getBalance($this->getAcct1Id())
            ],
            [
                'pre' =>  $this->getBalance($this->getAcct2Id())
            ]
        ];

        $trans = new Transaction($this->getTx(), $this->client);
        $trans->submit($this->getAcct1Secret(), false);

        $balances[0]['post'] = $this->getBalance($this->getAcct1Id());
        $balances[1]['post'] = $this->getBalance($this->getAcct2Id());

        $this->assertLessThan($balances[0]['pre'], $balances[0]['post']);
        $this->assertGreaterThan($balances[1]['pre'], $balances[1]['post']);
    }

    private function getTx()
    {
        return [
            'TransactionType' => 'Payment',
            'Account' => $this->getAcct1Id(),
            'Destination' => $this->getAcct2Id(),
            'Amount' => '1000000',
            'Fee' => '12'
        ];
    }

}