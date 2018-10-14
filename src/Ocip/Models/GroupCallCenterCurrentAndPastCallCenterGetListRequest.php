<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupCallCenterCurrentAndPastCallCenterGetListRequest
 *
 * Request to get all the current and past call centers for the group.
 *         The response is either
 * GroupCallCenterCurrentAndPastCallCenterGetListResponse or ErrorResponse.
 *
 * @see GroupCallCenterCurrentAndPastCallCenterGetListResponse
 * @see ErrorResponse
 */
class GroupCallCenterCurrentAndPastCallCenterGetListRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName serviceProviderId
     * @var string|null
     */
    private $serviceProviderId = null;

    /**
     * @ElementName isPremiumOnly
     * @var bool|null
     */
    private $isPremiumOnly = null;

    /**
     * @ElementName groupId
     * @var string|null
     */
    private $groupId = null;

    /**
     * @ElementName responseSizeLimit
     * @var int|null
     */
    private $responseSizeLimit = null;

    /**
     * @ElementName searchCriteriaCallCenterName
     * @var \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaCallCenterName|null
     */
    private $searchCriteriaCallCenterName = null;

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
     * Getter for isPremiumOnly
     *
     * @ElementName isPremiumOnly
     * @return bool|null
     */
    public function getIsPremiumOnly()
    {
        return $this->isPremiumOnly;
    }

    /**
     * Setter for isPremiumOnly
     *
     * @ElementName isPremiumOnly
     * @param bool|null $isPremiumOnly
     * @return $this
     */
    public function setIsPremiumOnly($isPremiumOnly)
    {
        $this->isPremiumOnly = $isPremiumOnly;
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
     * Getter for responseSizeLimit
     *
     * @ElementName responseSizeLimit
     * @return int|null
     */
    public function getResponseSizeLimit()
    {
        return $this->responseSizeLimit;
    }

    /**
     * Setter for responseSizeLimit
     *
     * @ElementName responseSizeLimit
     * @param int|null $responseSizeLimit
     * @return $this
     */
    public function setResponseSizeLimit($responseSizeLimit)
    {
        $this->responseSizeLimit = $responseSizeLimit;
        return $this;
    }

    /**
     * Getter for searchCriteriaCallCenterName
     *
     * @ElementName searchCriteriaCallCenterName
     * @return \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaCallCenterName|null
     */
    public function getSearchCriteriaCallCenterName()
    {
        return $this->searchCriteriaCallCenterName;
    }

    /**
     * Setter for searchCriteriaCallCenterName
     *
     * @ElementName searchCriteriaCallCenterName
     * @param \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaCallCenterName|null $searchCriteriaCallCenterName
     * @return $this
     */
    public function setSearchCriteriaCallCenterName(\CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaCallCenterName $searchCriteriaCallCenterName)
    {
        $this->searchCriteriaCallCenterName = $searchCriteriaCallCenterName;
        return $this;
    }


}

