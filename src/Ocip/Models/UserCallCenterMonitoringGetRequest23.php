<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserCallCenterMonitoringGetRequest23
 *
 * Request the user's Call Center Monitoring settings.
 *         The response is either a UserCallCenterMonitoringGetResponse23 or an ErrorResponse.
 *
 * @see UserCallCenterMonitoringGetResponse23
 * @see ErrorResponse
 * @Groups [{"id":"b5e86c5d60603bdb61de308d278500d9:149","type":"sequence"}]
 */
class UserCallCenterMonitoringGetRequest23 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{
    /**
     * @ElementName userId
     * @Type string
     * @Group b5e86c5d60603bdb61de308d278500d9:149
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

