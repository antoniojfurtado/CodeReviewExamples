<?php

/**
 * Created by PhpStorm.
 * User: antonio
 * Date: 6/2/17
 * Time: 5:15 PM
 */
class ASN
{

    /**
     * @var String
     */
    private $asn_title;


    /**
     * @var Integer
     */
    private $ship_to_id;


    /**
     * @var Integer
     */
    private $ship_from_id;


    /**
     * @var Integer
     */
    private $status;


    /**
     * @var DateTime
     */
    private $shipment_date;

    /**
     * Creates an ASN and retuens the generated ASN id
     * @param array $data containing field1,field2,field3
     * @return Integer|null
     */

    public function createASN($data)
    {

        $success = true;        //
        if($success == true){
            return 11;
        } else {
            return NULL;
        }
    }

    /**
     * Creates an ASN and retuens the generated ASN id
     * @param Integer $id containing only updated fields
     * @param array $data containing only updated fields
     * @return Integer|null
     */
    public function updateASN($id,$data)
    {

        $success = true;        //
        if($success == true){
            return 11;
        } else {
            return NULL;
        }
    }



}