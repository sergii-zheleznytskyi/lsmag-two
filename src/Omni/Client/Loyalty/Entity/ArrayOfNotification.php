<?php
/**
 * THIS IS AN AUTOGENERATED FILE
 * DO NOT MODIFY
 */


namespace Ls\Omni\Client\Loyalty\Entity;

use IteratorAggregate;
use ArrayIterator;

class ArrayOfNotification implements IteratorAggregate
{

    /**
     * @property Notification[] $Notification
     */
    protected $Notification = array(
        
    );

    /**
     * @param Notification[] $Notification
     * @return $this
     */
    public function setNotification($Notification)
    {
        $this->Notification = $Notification;
        return $this;
    }

    /**
     * @return Notification[]
     */
    public function getIterator()
    {
        return new ArrayIterator( $this->Notification );
    }

    /**
     * @return Notification[]
     */
    public function getNotification()
    {
        return $this->Notification;
    }


}
