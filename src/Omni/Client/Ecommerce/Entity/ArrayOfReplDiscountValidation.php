<?php
/**
 * THIS IS AN AUTOGENERATED FILE
 * DO NOT MODIFY
 * @codingStandardsIgnoreFile
 */


namespace Ls\Omni\Client\Ecommerce\Entity;

use IteratorAggregate;
use ArrayIterator;

class ArrayOfReplDiscountValidation implements IteratorAggregate
{

    /**
     * @property ReplDiscountValidation[] $ReplDiscountValidation
     */
    protected $ReplDiscountValidation = array(
        
    );

    /**
     * @param ReplDiscountValidation[] $ReplDiscountValidation
     * @return $this
     */
    public function setReplDiscountValidation($ReplDiscountValidation)
    {
        $this->ReplDiscountValidation = $ReplDiscountValidation;
        return $this;
    }

    /**
     * @return ReplDiscountValidation[]
     */
    public function getIterator()
    {
        return new ArrayIterator( $this->ReplDiscountValidation );
    }

    /**
     * @return ReplDiscountValidation[]
     */
    public function getReplDiscountValidation()
    {
        return $this->ReplDiscountValidation;
    }


}

