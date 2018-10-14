<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemCallProcessingPolicyProfileGetResponse
 *
 * Response to a SystemCallProcessingPolicyProfileGetRequest.
 *
 * @see SystemCallProcessingPolicyProfileGetRequest
 */
class SystemCallProcessingPolicyProfileGetResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName description
     * @var string|null
     */
    private $description = null;

    /**
     * @ElementName assignedSubscriberType
     * @var \CWM\BroadWorksConnector\Ocip\Models\CallProcessingPolicyProfileSubscriberType[]
     */
    private $assignedSubscriberType = array(
        
    );

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
     * @return \CWM\BroadWorksConnector\Ocip\Models\CallProcessingPolicyProfileSubscriberType[]
     */
    public function getAssignedSubscriberType()
    {
        return $this->assignedSubscriberType;
    }

    /**
     * Setter for assignedSubscriberType
     *
     * @ElementName assignedSubscriberType
     * @param \CWM\BroadWorksConnector\Ocip\Models\CallProcessingPolicyProfileSubscriberType[] $assignedSubscriberType
     * @return $this
     */
    public function setAssignedSubscriberType(array $assignedSubscriberType)
    {
        $this->assignedSubscriberType = $assignedSubscriberType;
        return $this;
    }

    /**
     * Adder for assignedSubscriberType
     *
     * @ElementName assignedSubscriberType
     * @param \CWM\BroadWorksConnector\Ocip\Models\CallProcessingPolicyProfileSubscriberType $assignedSubscriberType
     * @return $this
     */
    public function addAssignedSubscriberType($assignedSubscriberType)
    {
        $this->assignedSubscriberType []= $assignedSubscriberType;
        return $this;
    }


}

