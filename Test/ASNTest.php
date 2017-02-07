<?php

/**
 * @covers ASN::createASN()
 */
class ASNTest extends TestCase
{
    public function testASNCreate()
    {


        $data = [
            'asn_title' => 'Something',
        ];
        $asn = new ASN();
        $id = $asn->createASN($data);

        //Get stored ASN from DB here
        $storedASN = [];

        //Checking if object values match
        $this->assertSame($data,$storedASN);

    }
}