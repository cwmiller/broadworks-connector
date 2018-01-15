<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserEnhancedCallLogsGetListRequest
 *
 * Request user's call logs. It is possible to get a subset of the total list of
 * calls
 *         by specifying a starting offset and the number of calls to get.
 *         If the callLogType is not specified, all types of calls are returned.
 *         The response is either a UserEnhancedCallLogsGetListResponse or an
 * ErrorResponse.
 *         Replaced By: UserEnhancedCallLogsGetListRequest14sp4
 */
class UserEnhancedCallLogsGetListRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
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

