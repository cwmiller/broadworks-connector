<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupNetworkClassOfServiceAssignListRequest21
 *
 * Assign a list of Network Classes of Service to a group.
 *         A default Network Class of Service must be specified unless there is already one assigned to the group.
 *         The response is either a SuccessResponse or an ErrorResponse.
 *
 * @see SuccessResponse
 * @see ErrorResponse
 * @Groups [{"id":"4b0e7857796c636464362260a2f8e5ee:6207","type":"sequence"}]
 */
class GroupNetworkClassOfServiceAssignListRequest21 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{
    /**
     * @ElementName serviceProviderId
     * @Type string
     * @Group 4b0e7857796c636464362260a2f8e5ee:6207
     * @MinLength 1
     * @MaxLength 30
     * @var string|null
     */
    protected $serviceProviderId = null;

    /**
     * @ElementName groupId
     * @Type string
     * @Group 4b0e7857796c636464362260a2f8e5ee:6207
     * @MinLength 1
     * @MaxLength 30
     * @var string|null
     */
    protected $groupId = null;

    /**
     * @ElementName networkClassOfService
     * @Type string
     * @Array
     * @Optional
     * @Group 4b0e7857796c636464362260a2f8e5ee:6207
     * @MinLength 1
     * @MaxLength 40
     * @var string[]
     */
    protected $networkClassOfService = [
        
    ];

    /**
     * @ElementName defaultNetworkClassOfService
     * @Type \CWM\BroadWorksConnector\Ocip\Models\DefaultNetworkClassOfService
     * @Group 4b0e7857796c636464362260a2f8e5ee:6207
     * @var \CWM\BroadWorksConnector\Ocip\Models\DefaultNetworkClassOfService|null
     */
    protected $defaultNetworkClassOfService = null;

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

    /**
     * Getter for networkClassOfService
     *
     * @return string[]
     */
    public function getNetworkClassOfService()
    {
        return $this->networkClassOfService instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->networkClassOfService;
    }

    /**
     * Setter for networkClassOfService
     *
     * @param string[] $networkClassOfService
     * @return $this
     */
    public function setNetworkClassOfService(array $networkClassOfService)
    {
        $this->networkClassOfService = $networkClassOfService;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetNetworkClassOfService()
    {
        $this->networkClassOfService = null;
        return $this;
    }

    /**
     * Adder for networkClassOfService
     *
     * @param string $networkClassOfService
     * @return $this
     */
    public function addNetworkClassOfService(string $networkClassOfService)
    {
        $this->networkClassOfService[] = $networkClassOfService;
        return $this;
    }

    /**
     * Getter for defaultNetworkClassOfService
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\DefaultNetworkClassOfService
     */
    public function getDefaultNetworkClassOfService()
    {
        return $this->defaultNetworkClassOfService instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->defaultNetworkClassOfService;
    }

    /**
     * Setter for defaultNetworkClassOfService
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\DefaultNetworkClassOfService $defaultNetworkClassOfService
     * @return $this
     */
    public function setDefaultNetworkClassOfService(\CWM\BroadWorksConnector\Ocip\Models\DefaultNetworkClassOfService $defaultNetworkClassOfService)
    {
        $this->defaultNetworkClassOfService = $defaultNetworkClassOfService;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetDefaultNetworkClassOfService()
    {
        $this->defaultNetworkClassOfService = null;
        return $this;
    }
}

