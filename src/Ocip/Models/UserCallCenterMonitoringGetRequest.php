<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserCallCenterMonitoringGetRequest
 *
 * Request the user's Call Center Monitoring settings.
 *         The response is either a UserCallCenterMonitoringGetResponse or an ErrorResponse.
 *         Replaced by UserCallCenterMonitoringGetRequest23
 *
 * @see UserCallCenterMonitoringGetResponse
 * @see ErrorResponse
 * @see UserCallCenterMonitoringGetRequest23
 * @Groups [{"id":"d8f04177e438f303b41c211e518706bf:41339","type":"sequence"}]
 */
class UserCallCenterMonitoringGetRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{
    /**
     * @ElementName userId
     * @Type string
     * @Group d8f04177e438f303b41c211e518706bf:41339
     * @MinLength 1
     * @MaxLength 161
     * @var string|null
     */
    protected $userId = null;

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

