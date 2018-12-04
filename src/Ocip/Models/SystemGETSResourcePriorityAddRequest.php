<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemGETSResourcePriorityAddRequest
 *
 * Add a GETS Resource Priority.
 *         The response is either SuccessResponse or ErrorResponse.
 *
 * @see SuccessResponse
 * @see ErrorResponse
 * @Groups [{"id":"610f84d3e188f0477c3ae1a82ee036da:9392","type":"sequence"}]
 */
class SystemGETSResourcePriorityAddRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName priorityValue
     * @Type string
     * @Group 610f84d3e188f0477c3ae1a82ee036da:9392
     * @var string|null
     */
    private $priorityValue = null;

    /**
     * @ElementName priorityLevel
     * @Type int
     * @Group 610f84d3e188f0477c3ae1a82ee036da:9392
     * @var int|null
     */
    private $priorityLevel = null;

    /**
     * @ElementName priorityClass
     * @Type \CWM\BroadWorksConnector\Ocip\Models\GETSPriorityClass
     * @Group 610f84d3e188f0477c3ae1a82ee036da:9392
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

