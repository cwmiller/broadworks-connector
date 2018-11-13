<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemCallProcessingPolicyProfileAddRequest21
 *
 * Add a call processing policy profile to system.
 *         The response is either a SuccessResponse or an ErrorResponse.
 *
 * @see SuccessResponse
 * @see ErrorResponse
 */
class SystemCallProcessingPolicyProfileAddRequest21 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName name
     * @Type string
     * @var string|null
     */
    private $name = null;

    /**
     * @ElementName description
     * @Type string
     * @var string|null
     */
    private $description = null;

    /**
     * @ElementName assignedSubscriberType
     * @Type \CWM\BroadWorksConnector\Ocip\Models\CallProcessingPolicyProfileSubscriberType21
     * @Array
     * @var \CWM\BroadWorksConnector\Ocip\Models\CallProcessingPolicyProfileSubscriberType21[]
     */
    private $assignedSubscriberType = array(
        
    );

    /**
     * Getter for name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->name;
    }

    /**
     * Setter for name
     *
     * @param string $name
     * @return $this
     */
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetName()
    {
        $this->name = null;
        return $this;
    }

    /**
     * Getter for description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->description;
    }

    /**
     * Setter for description
     *
     * @param string $description
     * @return $this
     */
    public function setDescription($description)
    {
        $this->description = $description;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetDescription()
    {
        $this->description = null;
        return $this;
    }

    /**
     * Getter for assignedSubscriberType
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\CallProcessingPolicyProfileSubscriberType21[]
     */
    public function getAssignedSubscriberType()
    {
        return $this->assignedSubscriberType instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->assignedSubscriberType;
    }

    /**
     * Setter for assignedSubscriberType
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\CallProcessingPolicyProfileSubscriberType21[] $assignedSubscriberType
     * @return $this
     */
    public function setAssignedSubscriberType(array $assignedSubscriberType)
    {
        $this->assignedSubscriberType = $assignedSubscriberType;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetAssignedSubscriberType()
    {
        $this->assignedSubscriberType = null;
        return $this;
    }

    /**
     * Adder for assignedSubscriberType
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\CallProcessingPolicyProfileSubscriberType21 $assignedSubscriberType
     * @return $this
     */
    public function addAssignedSubscriberType($assignedSubscriberType)
    {
        $this->assignedSubscriberType[] = $assignedSubscriberType;
        return $this;
    }


}

