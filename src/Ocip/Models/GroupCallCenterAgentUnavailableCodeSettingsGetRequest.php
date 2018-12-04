<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupCallCenterAgentUnavailableCodeSettingsGetRequest
 *
 * Request the group level data associated with Call Center Agents Unavailable Code Settings.
 *         The response is either an GroupCallCenterAgentUnavailableCodeSettingsGetResponse or an
 *         ErrorResponse.
 *         
 *         Replaced by GroupCallCenterAgentUnavailableCodeSettingsGetRequest17sp4.
 *
 * @see GroupCallCenterAgentUnavailableCodeSettingsGetResponse
 * @see ErrorResponse
 * @see GroupCallCenterAgentUnavailableCodeSettingsGetRequest17sp4
 * @Groups [{"id":"1a79c7896cb04feac6eff47a5321756e:3197","type":"sequence"}]
 */
class GroupCallCenterAgentUnavailableCodeSettingsGetRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName serviceProviderId
     * @Type string
     * @Group 1a79c7896cb04feac6eff47a5321756e:3197
     * @var string|null
     */
    private $serviceProviderId = null;

    /**
     * @ElementName groupId
     * @Type string
     * @Group 1a79c7896cb04feac6eff47a5321756e:3197
     * @var string|null
     */
    private $groupId = null;

    /**
     * Getter for serviceProviderId
     *
     * @return string
     */
    public function getServiceProviderId()
    {
        return $this->serviceProviderId instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->serviceProviderId;
    }

    /**
     * Setter for serviceProviderId
     *
     * @param string $serviceProviderId
     * @return $this
     */
    public function setServiceProviderId($serviceProviderId)
    {
        $this->serviceProviderId = $serviceProviderId;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetServiceProviderId()
    {
        $this->serviceProviderId = null;
        return $this;
    }

    /**
     * Getter for groupId
     *
     * @return string
     */
    public function getGroupId()
    {
        return $this->groupId instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->groupId;
    }

    /**
     * Setter for groupId
     *
     * @param string $groupId
     * @return $this
     */
    public function setGroupId($groupId)
    {
        $this->groupId = $groupId;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetGroupId()
    {
        $this->groupId = null;
        return $this;
    }


}

