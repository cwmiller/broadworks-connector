<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserBroadWorksAnywhereModifyRequest
 *
 * Request to modify the user-level settings for the BroadWorks Anywhere service for a specified user.
 *         The response is either SuccessResponse or ErrorResponse.
 *
 * @see SuccessResponse
 * @see ErrorResponse
 * @Groups [{"id":"72f634ecc58842ce9d362ca629a47ea9:570","type":"sequence"}]
 */
class UserBroadWorksAnywhereModifyRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName userId
     * @Type string
     * @Group 72f634ecc58842ce9d362ca629a47ea9:570
     * @MinLength 1
     * @MaxLength 161
     * @var string|null
     */
    private $userId = null;

    /**
     * @ElementName alertAllLocationsForClickToDialCalls
     * @Type bool
     * @Optional
     * @Group 72f634ecc58842ce9d362ca629a47ea9:570
     * @var bool|null
     */
    private $alertAllLocationsForClickToDialCalls = null;

    /**
     * @ElementName alertAllLocationsForGroupPagingCalls
     * @Type bool
     * @Optional
     * @Group 72f634ecc58842ce9d362ca629a47ea9:570
     * @var bool|null
     */
    private $alertAllLocationsForGroupPagingCalls = null;

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

    /**
     * Getter for alertAllLocationsForClickToDialCalls
     *
     * @return bool
     */
    public function getAlertAllLocationsForClickToDialCalls()
    {
        return $this->alertAllLocationsForClickToDialCalls instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->alertAllLocationsForClickToDialCalls;
    }

    /**
     * Setter for alertAllLocationsForClickToDialCalls
     *
     * @param bool $alertAllLocationsForClickToDialCalls
     * @return $this
     */
    public function setAlertAllLocationsForClickToDialCalls($alertAllLocationsForClickToDialCalls)
    {
        $this->alertAllLocationsForClickToDialCalls = $alertAllLocationsForClickToDialCalls;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetAlertAllLocationsForClickToDialCalls()
    {
        $this->alertAllLocationsForClickToDialCalls = null;
        return $this;
    }

    /**
     * Getter for alertAllLocationsForGroupPagingCalls
     *
     * @return bool
     */
    public function getAlertAllLocationsForGroupPagingCalls()
    {
        return $this->alertAllLocationsForGroupPagingCalls instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->alertAllLocationsForGroupPagingCalls;
    }

    /**
     * Setter for alertAllLocationsForGroupPagingCalls
     *
     * @param bool $alertAllLocationsForGroupPagingCalls
     * @return $this
     */
    public function setAlertAllLocationsForGroupPagingCalls($alertAllLocationsForGroupPagingCalls)
    {
        $this->alertAllLocationsForGroupPagingCalls = $alertAllLocationsForGroupPagingCalls;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetAlertAllLocationsForGroupPagingCalls()
    {
        $this->alertAllLocationsForGroupPagingCalls = null;
        return $this;
    }


}

