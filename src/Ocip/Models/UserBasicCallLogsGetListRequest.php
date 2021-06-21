<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserBasicCallLogsGetListRequest
 *
 * Request user's call logs.
 *         If the callLogType is not specified, all types of calls are returned.
 *         The response is either a UserBasicCallLogsGetListResponse or an ErrorResponse.
 *         Replaced By: UserBasicCallLogsGetListRequest14sp4
 *
 * @see UserBasicCallLogsGetListResponse
 * @see ErrorResponse
 * @see UserBasicCallLogsGetListRequest14sp4
 * @Groups [{"id":"ab0042aa512abc10edb3c55e4b416b0b:39532","type":"sequence"}]
 */
class UserBasicCallLogsGetListRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName userId
     * @Type string
     * @Group ab0042aa512abc10edb3c55e4b416b0b:39532
     * @MinLength 1
     * @MaxLength 161
     * @var string|null
     */
    private $userId = null;

    /**
     * @ElementName callLogType
     * @Type \CWM\BroadWorksConnector\Ocip\Models\BasicCallLogsType
     * @Optional
     * @Group ab0042aa512abc10edb3c55e4b416b0b:39532
     * @var \CWM\BroadWorksConnector\Ocip\Models\BasicCallLogsType|null
     */
    private $callLogType = null;

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
     * Getter for callLogType
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\BasicCallLogsType
     */
    public function getCallLogType()
    {
        return $this->callLogType instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->callLogType;
    }

    /**
     * Setter for callLogType
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\BasicCallLogsType $callLogType
     * @return $this
     */
    public function setCallLogType(\CWM\BroadWorksConnector\Ocip\Models\BasicCallLogsType $callLogType)
    {
        $this->callLogType = $callLogType;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetCallLogType()
    {
        $this->callLogType = null;
        return $this;
    }


}

