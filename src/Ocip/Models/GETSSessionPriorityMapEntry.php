<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GETSSessionPriorityMapEntry
 *
 * The GETS session priority map entry.
 *
 * @Groups [{"id":"7f663d5135470c33ca64b0eed3c3aa0c:18546","type":"sequence"}]
 */
class GETSSessionPriorityMapEntry
{

    /**
     * @ElementName priorityLevel
     * @Type int
     * @Group 7f663d5135470c33ca64b0eed3c3aa0c:18546
     * @MinInclusive 1
     * @MaxInclusive 5
     * @var int|null
     */
    private $priorityLevel = null;

    /**
     * @ElementName sessionPriority
     * @Type int
     * @Group 7f663d5135470c33ca64b0eed3c3aa0c:18546
     * @MinInclusive
     * @MaxInclusive 4
     * @var int|null
     */
    private $sessionPriority = null;

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

