<?php

namespace Tests\Service;

use Otaodev\BrasilApi\Service\BrasilApi;
use PHPUnit\Framework\TestCase;

class BrasilApiTest extends TestCase
{
    private BrasilApi $sut;
    
    protected function setUp(): void
    {
        $this->sut = new BrasilApi;
    }

    /** 
     * @testdox should return a list of all banks registered in Brazil as string
     * @covers 
     * @return void
     */
    public function testShouldVerifyIfReturnOfBanksIsString()
    {
        $expected = $this->sut::getAllBanks();

        $this->assertIsString($expected);
    }
}