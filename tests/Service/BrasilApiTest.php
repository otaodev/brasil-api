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

    /**
     * @testdox Summary of should verify if object exists in string
     * @covers
     * 
     * @return void
     */
    public function testShouldVerifyIfObjectExistsInString()
    {
        $expected = json_decode($this->sut::getAllBanks());

        $this->assertIsArray($expected);
    }
}