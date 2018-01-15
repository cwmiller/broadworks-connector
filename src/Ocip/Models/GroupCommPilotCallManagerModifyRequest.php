<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupCommPilotCallManagerModifyRequest
 *
 * Modify the group level data associated with CommPilot Call Manager.
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class GroupCommPilotCallManagerModifyRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName serviceProviderId
     * @var string|null
     */
    private $serviceProviderId = null;

    /**
     * @ElementName groupId
     * @var string|null
     */
    private $groupId = null;

    /**
     * @ElementName groupDirectory
     * @var string|null
     */
    private $groupDirectory = null;

    /**
     * Getter for serviceProviderId
     *
     * @ElementName serviceProviderId
     * @return string|null
     */
    public function getServiceProviderId()
    {
        return $this->serviceProviderId;
    }

    /**
     * Setter for serviceProviderId
     *
     * @ElementName serviceProviderId
     * @param string|null $serviceProviderId
     * @return $this
     */
    public function setServiceProviderId($serviceProviderId)
    {
        $this->serviceProviderId = $serviceProviderId;
        return $this;
    }

    /**
     * Getter for groupId
     *
     * @ElementName groupId
     * @return string|null
     */
    public function getGroupId()
    {
        return $this->groupId;
    }

    /**
     * Setter for groupId
     *
     * @ElementName groupId
     * @param string|null $groupId
     * @return $this
     */
    public function setGroupId($groupId)
    {
        $this->groupId = $groupId;
        return $this;
    }

    /**
     * Getter for groupDirectory
     *
     * @ElementName groupDirectory
     * @return string|null
     */
    public function getGroupDirectory()
    {
        return $this->groupDirectory;
    }

    /**
     * Setter for groupDirectory
     *
     * @ElementName groupDirectory
     * @param string|null $groupDirectory
     * @return $this
     */
    public function setGroupDirectory($groupDirectory)
    {
        $this->groupDirectory = $groupDirectory;
        return $this;
    }


}

