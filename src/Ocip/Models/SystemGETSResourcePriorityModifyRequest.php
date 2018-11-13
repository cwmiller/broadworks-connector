<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemGETSResourcePriorityModifyRequest
 *
 * Modify a GETS reserved Resource Priority.
 *         The response is either SuccessResponse or ErrorResponse.
 *
 * @see SuccessResponse
 * @see ErrorResponse
 */
class SystemGETSResourcePriorityModifyRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName priorityValue
     * @Type string
     * @var string|null
     */
    private $priorityValue = null;

    /**
     * @ElementName newPriorityValue
     * @Type string
     * @var string|null
     */
    private $newPriorityValue = null;

    /**
     * @ElementName priorityLevel
     * @Type int
     * @var int|null
     */
    private $priorityLevel = null;

    /**
     * @ElementName priorityClass
     * @Type \CWM\BroadWorksConnector\Ocip\Models\GETSPriorityClass
     * @var \CWM\BroadWorksConnector\Ocip\Models\GETSPriorityClass|null
     */
    private $priorityClass = null;

    /**
     * Getter for priorityValue
     *
     * @return string
     */
    public function getPriorityValue()
    {
        return $this->priorityValue instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->priorityValue;
    }

    /**
     * Setter for priorityValue
     *
     * @param string $priorityValue
     * @return $this
     */
    public function setPriorityValue($priorityValue)
    {
        $this->priorityValue = $priorityValue;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetPriorityValue()
    {
        $this->priorityValue = null;
        return $this;
    }

    /**
     * Getter for newPriorityValue
     *
     * @return string
     */
    public function getNewPriorityValue()
    {
        return $this->newPriorityValue instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->newPriorityValue;
    }

    /**
     * Setter for newPriorityValue
     *
     * @param string $newPriorityValue
     * @return $this
     */
    public function setNewPriorityValue($newPriorityValue)
    {
        $this->newPriorityValue = $newPriorityValue;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetNewPriorityValue()
    {
        $this->newPriorityValue = null;
        return $this;
    }

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
     * Getter for priorityClass
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\GETSPriorityClass
     */
    public function getPriorityClass()
    {
        return $this->priorityClass instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->priorityClass;
    }

    /**
     * Setter for priorityClass
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\GETSPriorityClass $priorityClass
     * @return $this
     */
    public function setPriorityClass(\CWM\BroadWorksConnector\Ocip\Models\GETSPriorityClass $priorityClass)
    {
        $this->priorityClass = $priorityClass;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetPriorityClass()
    {
        $this->priorityClass = null;
        return $this;
    }


}

