<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * FindMeFollowMeAlertingGroupReplacementOutgoingDNSIPURIorUserIdList
 *
 * A list of phone numbers/sipuris or user ids that replaces a previously
 * configured list.
 *         By convention, an element of this type may be set nill to clear the
 * list.
 */
class FindMeFollowMeAlertingGroupReplacementOutgoingDNSIPURIorUserIdList
{

    /**
     * @ElementName phoneNumber
     * @var string|null
     */
    private $phoneNumber = null;

    /**
     * @ElementName userId
     * @var string|null
     */
    private $userId = null;

    /**
     * Getter for phoneNumber
     *
     * @ElementName phoneNumber
     * @return string|null
     */
    public function getPhoneNumber()
    {
        return $this->phoneNumber;
    }

    /**
     * Setter for phoneNumber
     *
     * @ElementName phoneNumber
     * @param string|null $phoneNumber
     * @return $this
     */
    public function setPhoneNumber($phoneNumber)
    {
        $this->phoneNumber = $phoneNumber;
        return $this;
    }

    /**
     * Getter for userId
     *
     * @ElementName userId
     * @return string|null
     */
    public function getUserId()
    {
        return $this->userId;
    }

    /**
     * Setter for userId
     *
     * @ElementName userId
     * @param string|null $userId
     * @return $this
     */
    public function setUserId($userId)
    {
        $this->userId = $userId;
        return $this;
    }


}

