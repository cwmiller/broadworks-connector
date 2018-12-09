<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * EnterpriseCallCenterCurrentAndPastCallCenterGetListRequest
 *
 * Request to get all the current and past call centers for the enterprise.
 *         The searchCriteriaExactUserGroup does not apply to past call centers.
 *         The response is either EnterpriseCallCenterCurrentAndPastCallCenterGetListResponse or ErrorResponse.
 *
 * @see EnterpriseCallCenterCurrentAndPastCallCenterGetListResponse
 * @see ErrorResponse
 * @Groups [{"id":"3ac5f05d969bc771d6ba8d344d95aa72:986","type":"sequence"}]
 */
class EnterpriseCallCenterCurrentAndPastCallCenterGetListRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName serviceProviderId
     * @Type string
     * @Group 3ac5f05d969bc771d6ba8d344d95aa72:986
     * @var string|null
     */
    private $serviceProviderId = null;

    /**
     * @ElementName isPremiumOnly
     * @Type bool
     * @Optional
     * @Group 3ac5f05d969bc771d6ba8d344d95aa72:986
     * @var bool|null
     */
    private $isPremiumOnly = null;

    /**
     * @ElementName responseSizeLimit
     * @Type int
     * @Optional
     * @Group 3ac5f05d969bc771d6ba8d344d95aa72:986
     * @var int|null
     */
    private $responseSizeLimit = null;

    /**
     * @ElementName searchCriteriaExactUserGroup
     * @Type \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaExactUserGroup
     * @Optional
     * @Group 3ac5f05d969bc771d6ba8d344d95aa72:986
     * @var \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaExactUserGroup|null
     */
    private $searchCriteriaExactUserGroup = null;

    /**
     * @ElementName searchCriteriaCallCenterName
     * @Type \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaCallCenterName
     * @Optional
     * @Group 3ac5f05d969bc771d6ba8d344d95aa72:986
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
     * Getter for searchCriteriaExactUserGroup
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaExactUserGroup
     */
    public function getSearchCriteriaExactUserGroup()
    {
        return $this->searchCriteriaExactUserGroup instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->searchCriteriaExactUserGroup;
    }

    /**
     * Setter for searchCriteriaExactUserGroup
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaExactUserGroup $searchCriteriaExactUserGroup
     * @return $this
     */
    public function setSearchCriteriaExactUserGroup(\CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaExactUserGroup $searchCriteriaExactUserGroup)
    {
        $this->searchCriteriaExactUserGroup = $searchCriteriaExactUserGroup;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetSearchCriteriaExactUserGroup()
    {
        $this->searchCriteriaExactUserGroup = null;
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

