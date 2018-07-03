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
     * @var string|null
     */
    private $priorityValue = null;

    /**
     * @ElementName newPriorityValue
     * @var string|null
     */
    private $newPriorityValue = null;

    /**
     * @ElementName priorityLevel
     * @var int|null
     */
    private $priorityLevel = null;

    /**
     * @ElementName priorityClass
     * @var string|null
     */
    private $priorityClass = null;

    /**
     * Getter for priorityValue
     *
     * @ElementName priorityValue
     * @return string|null
     */
    public function getPriorityValue()
    {
        return $this->priorityValue;
    }

    /**
     * Setter for priorityValue
     *
     * @ElementName priorityValue
     * @param string|null $priorityValue
     * @return $this
     */
    public function setPriorityValue($priorityValue)
    {
        $this->priorityValue = $priorityValue;
        return $this;
    }

    /**
     * Getter for newPriorityValue
     *
     * @ElementName newPriorityValue
     * @return string|null
     */
    public function getNewPriorityValue()
    {
        return $this->newPriorityValue;
    }

    /**
     * Setter for newPriorityValue
     *
     * @ElementName newPriorityValue
     * @param string|null $newPriorityValue
     * @return $this
     */
    public function setNewPriorityValue($newPriorityValue)
    {
        $this->newPriorityValue = $newPriorityValue;
        return $this;
    }

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
     * Getter for priorityClass
     *
     * @ElementName priorityClass
     * @return string|null
     */
    public function getPriorityClass()
    {
        return $this->priorityClass;
    }

    /**
     * Setter for priorityClass
     *
     * @ElementName priorityClass
     * @param string|null $priorityClass
     * @return $this
     */
    public function setPriorityClass($priorityClass)
    {
        $this->priorityClass = $priorityClass;
        return $this;
    }


}

