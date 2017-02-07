<?php

/**
 * Created by PhpStorm.
 * User: antonio
 * Date: 6/2/17
 * Time: 5:15 PM
 */
class EventApi
{
    /**
     * @SWG\Resource(
     *     resourcePath="plain",
     *     @SWG\Api(
     *         path="/plain",
     *         description="plain api structure",
     *         @SWG\Operation(
     *             method="GET",type="SimpleMember",nickname="plain"
     *         )
     *     )
     * )
     *
     * @SWG\Model(
     *     id="SimpleMember",
     *     @SWG\Property(name="id", type="integer", required=true, description="user id"),
     *     @SWG\Property(name="name", type="string", required=true, description="user name")
     * )
     */
    public function createEvent($data)
    {

        $event = new Event();
        $event->createEvent($data);
    }


}