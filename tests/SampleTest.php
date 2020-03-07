<?php

use App\Sample;
use PHPUnit\Framework\TestCase;

class SampleTest extends TestCase
{
    /**
     * @test
     */
    public function 文字列Rを渡した時、文字列Yesを返す()
    {
        $sample = new Sample();
        $this->assertSame('Yes',$sample->solve('R'));
    }


    /**
     * @test
     */
    public function 文字列Lを渡した時、文字列Noを返す()
    {
        $sample = new Sample();
        $this->assertSame('No',$sample->solve('L'));
    }
}