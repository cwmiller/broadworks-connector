<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * FindMeFollowMeAlertingGroupReplacementOutgoingDNSIPURIorUserIdList
 *
 * A list of phone numbers/sipuris or user ids that replaces a previously configured list.
 *         By convention, an element of this type may be set nill to clear the list.
 *
 * @Groups [{"id":"79f226053ee345f2ff4c37c37c8e9114:518","type":"sequence","children":[{"id":"79f226053ee345f2ff4c37c37c8e9114:519","type":"choice","optional":true}]}]
 */
class FindMeFollowMeAlertingGroupReplacementOutgoingDNSIPURIorUserIdList
{

    /**
     * @ElementName phoneNumber
     * @Type string
     * @Group 79f226053ee345f2ff4c37c37c8e9114:519
     * @MinLength 1
     * @MaxLength 161
     * @var string|null
     */
    private $phoneNumber = null;

    /**
     * @ElementName userId
     * @Type string
     * @Group 79f226053ee345f2ff4c37c37c8e9114:519
     * @MinLength 1
     * @MaxLength 161
     * @var string|null
     */
    private $userId = null;

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

