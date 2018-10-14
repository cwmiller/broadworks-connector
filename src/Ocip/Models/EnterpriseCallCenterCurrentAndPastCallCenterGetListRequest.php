<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * EnterpriseCallCenterCurrentAndPastCallCenterGetListRequest
 *
 * Request to get all the current and past call centers for the enterprise.
 *         The searchCriteriaExactUserGroup does not apply to past call centers.
 *         The response is either
 * EnterpriseCallCenterCurrentAndPastCallCenterGetListResponse or ErrorResponse.
 *
 * @see EnterpriseCallCenterCurrentAndPastCallCenterGetListResponse
 * @see ErrorResponse
 */
class EnterpriseCallCenterCurrentAndPastCallCenterGetListRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
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
     * @ElementName responseSizeLimit
     * @var int|null
     */
    private $responseSizeLimit = null;

    /**
     * @ElementName searchCriteriaExactUserGroup
     * @var \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaExactUserGroup|null
     */
    private $searchCriteriaExactUserGroup = null;

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
     * Getter for searchCriteriaExactUserGroup
     *
     * @ElementName searchCriteriaExactUserGroup
     * @return \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaExactUserGroup|null
     */
    public function getSearchCriteriaExactUserGroup()
    {
        return $this->searchCriteriaExactUserGroup;
    }

    /**
     * Setter for searchCriteriaExactUserGroup
     *
     * @ElementName searchCriteriaExactUserGroup
     * @param \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaExactUserGroup|null $searchCriteriaExactUserGroup
     * @return $this
     */
    public function setSearchCriteriaExactUserGroup(\CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaExactUserGroup $searchCriteriaExactUserGroup)
    {
        $this->searchCriteriaExactUserGroup = $searchCriteriaExactUserGroup;
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

