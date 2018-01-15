<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserEnhancedCallLogsGetListRequest16
 *
 * Request user's call logs.
 *         If the callLogType is not specified, all types of calls logs (placed,
 * received, missed) are returned.
 *         It is possible to restrict the number of rows returned using
 * responsePagingControl.
 *         The response is either a UserEnhancedCallLogsGetListResponse16 or an
 * ErrorResponse.
 *         
 *         Replaced by UserEnhancedCallLogsGetListRequest17sp4
 */
class UserEnhancedCallLogsGetListRequest16 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName userId
     * @var string|null
     */
    private $userId = null;

    /**
     * @ElementName callLogType
     * @var string|null
     */
    private $callLogType = null;

    /**
     * @ElementName responsePagingControl
     * @var \CWM\BroadWorksConnector\Ocip\Models\ResponsePagingControl|null
     */
    private $responsePagingControl = null;

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
     * @return string|null
     */
    public function getCallLogType()
    {
        return $this->callLogType;
    }

    /**
     * Setter for callLogType
     *
     * @ElementName callLogType
     * @param string|null $callLogType
     * @return $this
     */
    public function setCallLogType($callLogType)
    {
        $this->callLogType = $callLogType;
        return $this;
    }

    /**
     * Getter for responsePagingControl
     *
     * @ElementName responsePagingControl
     * @return \CWM\BroadWorksConnector\Ocip\Models\ResponsePagingControl|null
     */
    public function getResponsePagingControl()
    {
        return $this->responsePagingControl;
    }

    /**
     * Setter for responsePagingControl
     *
     * @ElementName responsePagingControl
     * @param \CWM\BroadWorksConnector\Ocip\Models\ResponsePagingControl|null $responsePagingControl
     * @return $this
     */
    public function setResponsePagingControl($responsePagingControl)
    {
        $this->responsePagingControl = $responsePagingControl;
        return $this;
    }


}

