<?php

/**
 * BT ASN class
 *
 * @package BT.ASN
 */
class ASN
{

    /**
     * Stores the user inpuied ASN title
     * @var String
     */
    private $asn_title;


    /**
     * Stores a reference from Warehouse class
     * @var Integer
     */
    private $ship_to_id;


    /**
     * @var Integer
     */
    private $ship_from_id;


    /**
     * Stores the status of current ASN object, refrenced from ASNstatus class
     * @var Integer
     */
    private $status;


    /**
     * @var DateTime
     */
    private $shipment_date;

    /**
     * Creates an ASN and returns the generated ASN id
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
     * Updates an ASN and returns the generated ASN id
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