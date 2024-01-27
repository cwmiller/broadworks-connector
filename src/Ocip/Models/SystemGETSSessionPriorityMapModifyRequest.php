<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemGETSSessionPriorityMapModifyRequest
 *
 * Modify a GETS Session Priority Map.
 *         The response is either SuccessResponse or ErrorResponse.
 *
 * @see SuccessResponse
 * @see ErrorResponse
 * @Groups [{"id":"da582a1f8028404e70d260cf1f891033:11319","type":"sequence"}]
 */
class SystemGETSSessionPriorityMapModifyRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{
    /**
     * @ElementName priorityLevel
     * @Type int
     * @Group da582a1f8028404e70d260cf1f891033:11319
     * @MinInclusive 1
     * @MaxInclusive 5
     * @var int|null
     */
    protected $priorityLevel = null;

    /**
     * @ElementName sessionPriority
     * @Type int
     * @Optional
     * @Group da582a1f8028404e70d260cf1f891033:11319
     * @MinInclusive 0
     * @MaxInclusive 4
     * @var int|null
     */
    protected $sessionPriority = null;

    /**
     * Getter for priorityLevel
     *
     * @return int
     */
    public function getPriorityLevel()
    {
        return $this->priorityLevel instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->priorityLevel;
    }

    /**
     * Setter for priorityLevel
     *
     * @param int $priorityLevel
     * @return $this
     */
    public function setPriorityLevel($priorityLevel)
    {
        $this->priorityLevel = $priorityLevel;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetPriorityLevel()
    {
        $this->priorityLevel = null;
        return $this;
    }

    /**
     * Getter for sessionPriority
     *
     * @return int
     */
    public function getSessionPriority()
    {
        return $this->sessionPriority instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->sessionPriority;
    }

    /**
     * Setter for sessionPriority
     *
     * @param int $sessionPriority
     * @return $this
     */
    public function setSessionPriority($sessionPriority)
    {
        $this->sessionPriority = $sessionPriority;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetSessionPriority()
    {
        $this->sessionPriority = null;
        return $this;
    }
}

