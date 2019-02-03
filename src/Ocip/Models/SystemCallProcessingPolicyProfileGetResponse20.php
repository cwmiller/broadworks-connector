<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemCallProcessingPolicyProfileGetResponse20
 *
 * Response to a SystemCallProcessingPolicyProfileGetRequest20.
 *
 * @see SystemCallProcessingPolicyProfileGetRequest20
 * @Groups [{"id":"ab0042aa512abc10edb3c55e4b416b0b:34404","type":"sequence"}]
 */
class SystemCallProcessingPolicyProfileGetResponse20 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName description
     * @Type string
     * @Optional
     * @Group ab0042aa512abc10edb3c55e4b416b0b:34404
     * @var string|null
     */
    private $description = null;

    /**
     * @ElementName assignedSubscriberType
     * @Type \CWM\BroadWorksConnector\Ocip\Models\CallProcessingPolicyProfileSubscriberType20
     * @Array
     * @Optional
     * @Group ab0042aa512abc10edb3c55e4b416b0b:34404
     * @var \CWM\BroadWorksConnector\Ocip\Models\CallProcessingPolicyProfileSubscriberType20[]
     */
    private $assignedSubscriberType = array(
        
    );

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
     * @return \CWM\BroadWorksConnector\Ocip\Models\CallProcessingPolicyProfileSubscriberType20[]
     */
    public function getAssignedSubscriberType()
    {
        return $this->assignedSubscriberType instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->assignedSubscriberType;
    }

    /**
     * Setter for assignedSubscriberType
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\CallProcessingPolicyProfileSubscriberType20[] $assignedSubscriberType
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
     * @param \CWM\BroadWorksConnector\Ocip\Models\CallProcessingPolicyProfileSubscriberType20 $assignedSubscriberType
     * @return $this
     */
    public function addAssignedSubscriberType($assignedSubscriberType)
    {
        $this->assignedSubscriberType[] = $assignedSubscriberType;
        return $this;
    }


}

