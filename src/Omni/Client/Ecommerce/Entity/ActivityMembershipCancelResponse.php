<?php
/**
 * THIS IS AN AUTOGENERATED FILE
 * DO NOT MODIFY
 * @codingStandardsIgnoreFile
 */


namespace Ls\Omni\Client\Ecommerce\Entity;

use Ls\Omni\Client\ResponseInterface;

class ActivityMembershipCancelResponse implements ResponseInterface
{

    /**
     * @property boolean $ActivityMembershipCancelResult
     */
    protected $ActivityMembershipCancelResult = null;

    /**
     * @param boolean $ActivityMembershipCancelResult
     * @return $this
     */
    public function setActivityMembershipCancelResult($ActivityMembershipCancelResult)
    {
        $this->ActivityMembershipCancelResult = $ActivityMembershipCancelResult;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getActivityMembershipCancelResult()
    {
        return $this->ActivityMembershipCancelResult;
    }

    /**
     * @return boolean
     */
    public function getResult()
    {
        return $this->ActivityMembershipCancelResult;
    }


}
