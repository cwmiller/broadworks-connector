<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemCallProcessingPolicyProfileModifyRequest20
 *
 * Modify a call processing policy profile in system.
 *         The response is either a SuccessResponse or an ErrorResponse.
 *
 * @see SuccessResponse
 * @see ErrorResponse
 */
class SystemCallProcessingPolicyProfileModifyRequest20 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
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
     * @Nillable
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $description = null;

    /**
     * @ElementName assignedSubscriberTypeList
     * @Nillable
     * @var \CWM\BroadWorksConnector\Ocip\Models\ReplacementCallProcessingPolicyProfileSubscriberTypeList20|null|\CWM\BroadWorksConnector\Ocip\Nil
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
     * @Nillable
     * @return string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Setter for description
     *
     * @ElementName description
     * @Nillable
     * @param string|null|\CWM\BroadWorksConnector\Ocip\Nil $description
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
     * @Nillable
     * @return \CWM\BroadWorksConnector\Ocip\Models\ReplacementCallProcessingPolicyProfileSubscriberTypeList20|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    public function getAssignedSubscriberTypeList()
    {
        return $this->assignedSubscriberTypeList;
    }

    /**
     * Setter for assignedSubscriberTypeList
     *
     * @ElementName assignedSubscriberTypeList
     * @Nillable
     * @param \CWM\BroadWorksConnector\Ocip\Models\ReplacementCallProcessingPolicyProfileSubscriberTypeList20|null|\CWM\BroadWorksConnector\Ocip\Nil $assignedSubscriberTypeList
     * @return $this
     */
    public function setAssignedSubscriberTypeList($assignedSubscriberTypeList)
    {
        $this->assignedSubscriberTypeList = $assignedSubscriberTypeList;
        return $this;
    }


}

