<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupRouteListEnterpriseTrunkNumberPrefixAssignListRequest
 *
 * Assign a list of service provider number prefixes to a group.
 *         The number prefixes must have previously been added to the service
 * provider.
 *         The response is either SuccessResponse or ErrorResponse.
 */
class GroupRouteListEnterpriseTrunkNumberPrefixAssignListRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
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
     * @ElementName numberPrefix
     * @var string[]
     */
    private $numberPrefix = array(
        
    );

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
     * Getter for numberPrefix
     *
     * @ElementName numberPrefix
     * @return string[]
     */
    public function getNumberPrefix()
    {
        return $this->numberPrefix;
    }

    /**
     * Setter for numberPrefix
     *
     * @ElementName numberPrefix
     * @param string[] $numberPrefix
     * @return $this
     */
    public function setNumberPrefix($numberPrefix)
    {
        $this->numberPrefix = $numberPrefix;
        return $this;
    }

    /**
     * Adder for numberPrefix
     *
     * @ElementName numberPrefix
     * @param string $numberPrefix
     * @return $this
     */
    public function addNumberPrefix($numberPrefix)
    {
        $this->numberPrefix []= $numberPrefix;
        return $this;
    }


}
