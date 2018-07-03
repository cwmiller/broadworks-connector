<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupBroadWorksMobilityMobileSubscriberDirectoryNumberGetAvailableListRequest
 *
 * Request a list of available Mobile Subscriber Directory Numbers not yet assigned
 * to any user.
 * .       This command is applicable only for group in a service provider and will
 * fail for a group in an enterprise.
 *         The response is either
 * GroupBroadWorksMobilityMobileSubscriberDirectoryNumberGetAvailableListResponse
 * or ErrorResponse.
 *
 * @see
 * GroupBroadWorksMobilityMobileSubscriberDirectoryNumberGetAvailableListResponse
 * @see ErrorResponse
 */
class GroupBroadWorksMobilityMobileSubscriberDirectoryNumberGetAvailableListRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
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


}

