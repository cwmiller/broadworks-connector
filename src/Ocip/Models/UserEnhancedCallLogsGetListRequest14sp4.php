<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserEnhancedCallLogsGetListRequest14sp4
 *
 * Request user's call logs. It is possible to get a subset of the total list of
 * calls
 *             by specifying a starting offset and the number of calls to get.
 *             If the callLogType is not specified, all types of calls are
 * returned.
 *             The response is either a UserEnhancedCallLogsGetListResponse14sp4 or
 * an ErrorResponse.
 *             Replaced by: 
 *             UserEnhancedCallLogsGetListRequest16
 *
 * @see UserEnhancedCallLogsGetListResponse14sp4
 * @see ErrorResponse
 * @see UserEnhancedCallLogsGetListRequest16
 */
class UserEnhancedCallLogsGetListRequest14sp4 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
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
     * @ElementName startingOffset
     * @var int|null
     */
    private $startingOffset = null;

    /**
     * @ElementName numCalls
     * @var int|null
     */
    private $numCalls = null;

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

    /**
     * Getter for startingOffset
     *
     * @ElementName startingOffset
     * @return int|null
     */
    public function getStartingOffset()
    {
        return $this->startingOffset;
    }

    /**
     * Setter for startingOffset
     *
     * @ElementName startingOffset
     * @param int|null $startingOffset
     * @return $this
     */
    public function setStartingOffset($startingOffset)
    {
        $this->startingOffset = $startingOffset;
        return $this;
    }

    /**
     * Getter for numCalls
     *
     * @ElementName numCalls
     * @return int|null
     */
    public function getNumCalls()
    {
        return $this->numCalls;
    }

    /**
     * Setter for numCalls
     *
     * @ElementName numCalls
     * @param int|null $numCalls
     * @return $this
     */
    public function setNumCalls($numCalls)
    {
        $this->numCalls = $numCalls;
        return $this;
    }


}

