<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserBroadWorksAnywhereModifyRequest
 *
 * Request to modify the user-level settings for the BroadWorks Anywhere service
 * for a specified user.
 *         The response is either SuccessResponse or ErrorResponse.
 *
 * @see SuccessResponse
 * @see ErrorResponse
 */
class UserBroadWorksAnywhereModifyRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName userId
     * @var string|null
     */
    private $userId = null;

    /**
     * @ElementName alertAllLocationsForClickToDialCalls
     * @var bool|null
     */
    private $alertAllLocationsForClickToDialCalls = null;

    /**
     * @ElementName alertAllLocationsForGroupPagingCalls
     * @var bool|null
     */
    private $alertAllLocationsForGroupPagingCalls = null;

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

    /**
     * Getter for alertAllLocationsForClickToDialCalls
     *
     * @ElementName alertAllLocationsForClickToDialCalls
     * @return bool|null
     */
    public function getAlertAllLocationsForClickToDialCalls()
    {
        return $this->alertAllLocationsForClickToDialCalls;
    }

    /**
     * Setter for alertAllLocationsForClickToDialCalls
     *
     * @ElementName alertAllLocationsForClickToDialCalls
     * @param bool|null $alertAllLocationsForClickToDialCalls
     * @return $this
     */
    public function setAlertAllLocationsForClickToDialCalls($alertAllLocationsForClickToDialCalls)
    {
        $this->alertAllLocationsForClickToDialCalls = $alertAllLocationsForClickToDialCalls;
        return $this;
    }

    /**
     * Getter for alertAllLocationsForGroupPagingCalls
     *
     * @ElementName alertAllLocationsForGroupPagingCalls
     * @return bool|null
     */
    public function getAlertAllLocationsForGroupPagingCalls()
    {
        return $this->alertAllLocationsForGroupPagingCalls;
    }

    /**
     * Setter for alertAllLocationsForGroupPagingCalls
     *
     * @ElementName alertAllLocationsForGroupPagingCalls
     * @param bool|null $alertAllLocationsForGroupPagingCalls
     * @return $this
     */
    public function setAlertAllLocationsForGroupPagingCalls($alertAllLocationsForGroupPagingCalls)
    {
        $this->alertAllLocationsForGroupPagingCalls = $alertAllLocationsForGroupPagingCalls;
        return $this;
    }


}

