<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * FindMeFollowMeAlertingGroupReplacementOutgoingDNSIPURIorUserIdList
 *
 * A list of phone numbers/sipuris or user ids that replaces a previously configured list.
 *         By convention, an element of this type may be set nill to clear the list.
 *
 * @Groups [{"id":"146ca46a7097f08aed7a73ab65f17df8:517","type":"sequence","children":[{"id":"146ca46a7097f08aed7a73ab65f17df8:518","type":"choice","optional":true}]}]
 */
class FindMeFollowMeAlertingGroupReplacementOutgoingDNSIPURIorUserIdList
{
    /**
     * @ElementName phoneNumber
     * @Type string
     * @Group 146ca46a7097f08aed7a73ab65f17df8:518
     * @MinLength 1
     * @MaxLength 161
     * @var string|null
     */
    protected $phoneNumber = null;

    /**
     * @ElementName userId
     * @Type string
     * @Group 146ca46a7097f08aed7a73ab65f17df8:518
     * @MinLength 1
     * @MaxLength 161
     * @var string|null
     */
    protected $userId = null;

    /**
     * Getter for phoneNumber
     *
     * @return string
     */
    public function getPhoneNumber()
    {
        return $this->phoneNumber instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->phoneNumber;
    }

    /**
     * Setter for phoneNumber
     *
     * @param string $phoneNumber
     * @return $this
     */
    public function setPhoneNumber($phoneNumber)
    {
        $this->phoneNumber = $phoneNumber;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetPhoneNumber()
    {
        $this->phoneNumber = null;
        return $this;
    }

    /**
     * Getter for userId
     *
     * @return string
     */
    public function getUserId()
    {
        return $this->userId instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->userId;
    }

    /**
     * Setter for userId
     *
     * @param string $userId
     * @return $this
     */
    public function setUserId($userId)
    {
        $this->userId = $userId;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetUserId()
    {
        $this->userId = null;
        return $this;
    }
}

