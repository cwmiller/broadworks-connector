<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemCallProcessingPolicyProfileAddRequest20
 *
 * Add a call processing policy profile to system.
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class SystemCallProcessingPolicyProfileAddRequest20 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName name
     * @var string|null
     */
    private $name = null;

    /**
     * @ElementName description
     * @var string|null
     */
    private $description = null;

    /**
     * @ElementName assignedSubscriberType
     * @var string[]
     */
    private $assignedSubscriberType = array(
        
    );

    /**
     * Getter for name
     *
     * @ElementName name
     * @return string|null
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Setter for name
     *
     * @ElementName name
     * @param string|null $name
     * @return $this
     */
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }

    /**
     * Getter for description
     *
     * @ElementName description
     * @return string|null
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Setter for description
     *
     * @ElementName description
     * @param string|null $description
     * @return $this
     */
    public function setDescription($description)
    {
        $this->description = $description;
        return $this;
    }

    /**
     * Getter for assignedSubscriberType
     *
     * @ElementName assignedSubscriberType
     * @return string[]
     */
    public function getAssignedSubscriberType()
    {
        return $this->assignedSubscriberType;
    }

    /**
     * Setter for assignedSubscriberType
     *
     * @ElementName assignedSubscriberType
     * @param string[] $assignedSubscriberType
     * @return $this
     */
    public function setAssignedSubscriberType($assignedSubscriberType)
    {
        $this->assignedSubscriberType = $assignedSubscriberType;
        return $this;
    }

    /**
     * Adder for assignedSubscriberType
     *
     * @ElementName assignedSubscriberType
     * @param string $assignedSubscriberType
     * @return $this
     */
    public function addAssignedSubscriberType($assignedSubscriberType)
    {
        $this->assignedSubscriberType []= $assignedSubscriberType;
        return $this;
    }


}

