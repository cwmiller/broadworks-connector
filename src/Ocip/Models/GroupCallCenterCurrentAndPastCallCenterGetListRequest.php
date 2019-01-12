<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupCallCenterCurrentAndPastCallCenterGetListRequest
 *
 * Request to get all the current and past call centers for the group.
 *         The response is either GroupCallCenterCurrentAndPastCallCenterGetListResponse or ErrorResponse.
 *
 * @see GroupCallCenterCurrentAndPastCallCenterGetListResponse
 * @see ErrorResponse
 * @Groups [{"id":"e2c537e3e39483b96620673a7012ffdd:3080","type":"sequence"}]
 */
class GroupCallCenterCurrentAndPastCallCenterGetListRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName serviceProviderId
     * @Type string
     * @Group e2c537e3e39483b96620673a7012ffdd:3080
     * @var string|null
     */
    private $serviceProviderId = null;

    /**
     * @ElementName isPremiumOnly
     * @Type bool
     * @Optional
     * @Group e2c537e3e39483b96620673a7012ffdd:3080
     * @var bool|null
     */
    private $isPremiumOnly = null;

    /**
     * @ElementName groupId
     * @Type string
     * @Group e2c537e3e39483b96620673a7012ffdd:3080
     * @var string|null
     */
    private $groupId = null;

    /**
     * @ElementName responseSizeLimit
     * @Type int
     * @Optional
     * @Group e2c537e3e39483b96620673a7012ffdd:3080
     * @var int|null
     */
    private $responseSizeLimit = null;

    /**
     * @ElementName searchCriteriaCallCenterName
     * @Type \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaCallCenterName
     * @Optional
     * @Group e2c537e3e39483b96620673a7012ffdd:3080
     * @var \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaCallCenterName|null
     */
    private $searchCriteriaCallCenterName = null;

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
     * Getter for isPremiumOnly
     *
     * @return bool
     */
    public function getIsPremiumOnly()
    {
        return $this->isPremiumOnly instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->isPremiumOnly;
    }

    /**
     * Setter for isPremiumOnly
     *
     * @param bool $isPremiumOnly
     * @return $this
     */
    public function setIsPremiumOnly($isPremiumOnly)
    {
        $this->isPremiumOnly = $isPremiumOnly;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetIsPremiumOnly()
    {
        $this->isPremiumOnly = null;
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
     * Getter for responseSizeLimit
     *
     * @return int
     */
    public function getResponseSizeLimit()
    {
        return $this->responseSizeLimit instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->responseSizeLimit;
    }

    /**
     * Setter for responseSizeLimit
     *
     * @param int $responseSizeLimit
     * @return $this
     */
    public function setResponseSizeLimit($responseSizeLimit)
    {
        $this->responseSizeLimit = $responseSizeLimit;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetResponseSizeLimit()
    {
        $this->responseSizeLimit = null;
        return $this;
    }

    /**
     * Getter for searchCriteriaCallCenterName
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaCallCenterName
     */
    public function getSearchCriteriaCallCenterName()
    {
        return $this->searchCriteriaCallCenterName instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->searchCriteriaCallCenterName;
    }

    /**
     * Setter for searchCriteriaCallCenterName
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaCallCenterName $searchCriteriaCallCenterName
     * @return $this
     */
    public function setSearchCriteriaCallCenterName(\CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaCallCenterName $searchCriteriaCallCenterName)
    {
        $this->searchCriteriaCallCenterName = $searchCriteriaCallCenterName;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetSearchCriteriaCallCenterName()
    {
        $this->searchCriteriaCallCenterName = null;
        return $this;
    }


}

