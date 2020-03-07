<?php

use App\Sample;
use PHPUnit\Framework\TestCase;

class SampleTest extends TestCase
{
    /**
     * @var Sample
     */
    private $sample;

    protected function setUp()
    {
       $this->sample = new Sample();
    }

    /**
     * @test
     */
    public function 文字列Rを渡した時、文字列Yesを返す()
    {
        $this->assertSame('Yes',$this->sample->solve('R'));
    }

    /**
     * @test
     */
    public function 文字列Lを渡した時、文字列Noを返す()
    {
        $this->assertSame('No',$this->sample->solve('L'));
    }

    /**
     * @test
     */
    public function 文字列UULを渡した時、文字列Noを返す()
    {
        $this->assertSame('No',$this->sample->solve('UUL'));
    }
}