<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupGroupPagingTargetsCapacityGetRequest
 *
 * Request the maximum number of target users per paging group configured for a group.
 *         The response is either a GroupGroupPagingTargetsCapacityGetResponse
 *         or an ErrorResponse.
 *         
 *         Replaced by: GroupGroupPagingTargetsCapacityGetRequest22 in AS data mode.
 *
 * @see GroupGroupPagingTargetsCapacityGetResponse
 * @see ErrorResponse
 * @see GroupGroupPagingTargetsCapacityGetRequest22
 * @Groups [{"id":"de4d76f01f337fe4694212ec9f771753:2640","type":"sequence"}]
 */
class GroupGroupPagingTargetsCapacityGetRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName serviceProviderId
     * @Type string
     * @Group de4d76f01f337fe4694212ec9f771753:2640
     * @MinLength 1
     * @MaxLength 30
     * @var string|null
     */
    private $serviceProviderId = null;

    /**
     * @ElementName groupId
     * @Type string
     * @Group de4d76f01f337fe4694212ec9f771753:2640
     * @MinLength 1
     * @MaxLength 30
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

