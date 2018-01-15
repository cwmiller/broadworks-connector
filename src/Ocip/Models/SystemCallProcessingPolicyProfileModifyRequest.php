<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemCallProcessingPolicyProfileModifyRequest
 *
 * Modify a call processing policy profile in system.
 *         The response is either a SuccessResponse or an ErrorResponse.
 *         
 *         Replaced by SystemCallProcessingPolicyProfileModifyRequest20.
 */
class SystemCallProcessingPolicyProfileModifyRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName name
     * @var string|null
     */
    private $name = null;

    /**
     * @ElementName newName
     * @var string|null
     */
    private $newName = null;

    /**
     * @ElementName description
     * @var string|null
     */
    private $description = null;

    /**
     * @ElementName assignedSubscriberTypeList
     * @var \CWM\BroadWorksConnector\Ocip\Models\ReplacementCallProcessingPolicyProfileSubscriberTypeList|null
     */
    private $assignedSubscriberTypeList = null;

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
     * Getter for newName
     *
     * @ElementName newName
     * @return string|null
     */
    public function getNewName()
    {
        return $this->newName;
    }

    /**
     * Setter for newName
     *
     * @ElementName newName
     * @param string|null $newName
     * @return $this
     */
    public function setNewName($newName)
    {
        $this->newName = $newName;
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
     * Getter for assignedSubscriberTypeList
     *
     * @ElementName assignedSubscriberTypeList
     * @return \CWM\BroadWorksConnector\Ocip\Models\ReplacementCallProcessingPolicyProfileSubscriberTypeList|null
     */
    public function getAssignedSubscriberTypeList()
    {
        return $this->assignedSubscriberTypeList;
    }

    /**
     * Setter for assignedSubscriberTypeList
     *
     * @ElementName assignedSubscriberTypeList
     * @param \CWM\BroadWorksConnector\Ocip\Models\ReplacementCallProcessingPolicyProfileSubscriberTypeList|null $assignedSubscriberTypeList
     * @return $this
     */
    public function setAssignedSubscriberTypeList($assignedSubscriberTypeList)
    {
        $this->assignedSubscriberTypeList = $assignedSubscriberTypeList;
        return $this;
    }


}

