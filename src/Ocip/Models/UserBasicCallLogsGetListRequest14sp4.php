<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserBasicCallLogsGetListRequest14sp4
 *
 * Request user's call logs.
 *           If the callLogType is not specified, all types of calls are returned.
 *           The response is either a UserBasicCallLogsGetListResponse14sp4 or an
 * ErrorResponse.
 *
 * @see UserBasicCallLogsGetListResponse14sp4
 * @see ErrorResponse
 */
class UserBasicCallLogsGetListRequest14sp4 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName userId
     * @var string|null
     */
    private $userId = null;

    /**
     * @ElementName callLogType
     * @var \CWM\BroadWorksConnector\Ocip\Models\CallLogsType|null
     */
    private $callLogType = null;

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
     * Getter for callLogType
     *
     * @ElementName callLogType
     * @return \CWM\BroadWorksConnector\Ocip\Models\CallLogsType|null
     */
    public function getCallLogType()
    {
        return $this->callLogType;
    }

    /**
     * Setter for callLogType
     *
     * @ElementName callLogType
     * @param \CWM\BroadWorksConnector\Ocip\Models\CallLogsType|null $callLogType
     * @return $this
     */
    public function setCallLogType(\CWM\BroadWorksConnector\Ocip\Models\CallLogsType $callLogType)
    {
        $this->callLogType = $callLogType;
        return $this;
    }


}

