<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemGETSSessionPriorityMapAddRequest
 *
 * Add a GETS Session Priority map.  It maps a priority level with a session
 * priority AVP value.
 *         The response is either SuccessResponse or ErrorResponse.
 *
 * @see SuccessResponse
 * @see ErrorResponse
 */
class SystemGETSSessionPriorityMapAddRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName priorityLevel
     * @var int|null
     */
    private $priorityLevel = null;

    /**
     * @ElementName sessionPriority
     * @var int|null
     */
    private $sessionPriority = null;

    /**
     * Getter for priorityLevel
     *
     * @ElementName priorityLevel
     * @return int|null
     */
    public function getPriorityLevel()
    {
        return $this->priorityLevel;
    }

    /**
     * Setter for priorityLevel
     *
     * @ElementName priorityLevel
     * @param int|null $priorityLevel
     * @return $this
     */
    public function setPriorityLevel($priorityLevel)
    {
        $this->priorityLevel = $priorityLevel;
        return $this;
    }

    /**
     * Getter for sessionPriority
     *
     * @ElementName sessionPriority
     * @return int|null
     */
    public function getSessionPriority()
    {
        return $this->sessionPriority;
    }

    /**
     * Setter for sessionPriority
     *
     * @ElementName sessionPriority
     * @param int|null $sessionPriority
     * @return $this
     */
    public function setSessionPriority($sessionPriority)
    {
        $this->sessionPriority = $sessionPriority;
        return $this;
    }


}

