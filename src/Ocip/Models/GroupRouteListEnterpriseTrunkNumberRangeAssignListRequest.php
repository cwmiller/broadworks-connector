<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupRouteListEnterpriseTrunkNumberRangeAssignListRequest
 *
 * Assign a list of service provider number ranges to a group.
 *         The number ranges must have previously been added to the service
 * provider.
 *         The response is either SuccessResponse or ErrorResponse.
 *
 * @see SuccessResponse
 * @see ErrorResponse
 */
class GroupRouteListEnterpriseTrunkNumberRangeAssignListRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
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
     * @ElementName numberRangeStart
     * @var string[]
     */
    private $numberRangeStart = array(
        
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
     * Getter for numberRangeStart
     *
     * @ElementName numberRangeStart
     * @return string[]
     */
    public function getNumberRangeStart()
    {
        return $this->numberRangeStart;
    }

    /**
     * Setter for numberRangeStart
     *
     * @ElementName numberRangeStart
     * @param string[] $numberRangeStart
     * @return $this
     */
    public function setNumberRangeStart($numberRangeStart)
    {
        $this->numberRangeStart = $numberRangeStart;
        return $this;
    }

    /**
     * Adder for numberRangeStart
     *
     * @ElementName numberRangeStart
     * @param string $numberRangeStart
     * @return $this
     */
    public function addNumberRangeStart($numberRangeStart)
    {
        $this->numberRangeStart []= $numberRangeStart;
        return $this;
    }


}

