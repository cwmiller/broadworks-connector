<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * ServiceProviderXsiPolicyProfileGetAssignedGroupListRequest
 *
 * Get a list of group within a service provider that have a given
 *         group Xsi policy profile assigned.
 *         The response is either a ServiceProviderXsiPolicyProfileGetAssignedGroupListResponse 
 *         or an ErrorResponse.
 *
 * @see ServiceProviderXsiPolicyProfileGetAssignedGroupListResponse
 * @see ErrorResponse
 * @Groups [{"id":"e19a9072c2dad499e9f28837da5768db:7144","type":"sequence"}]
 */
class ServiceProviderXsiPolicyProfileGetAssignedGroupListRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{
    /**
     * @ElementName serviceProviderId
     * @Type string
     * @Group e19a9072c2dad499e9f28837da5768db:7144
     * @MinLength 1
     * @MaxLength 30
     * @var string|null
     */
    protected $serviceProviderId = null;

    /**
     * @ElementName xsiPolicyProfile
     * @Type \CWM\BroadWorksConnector\Ocip\Models\XsiPolicyProfileKey
     * @Group e19a9072c2dad499e9f28837da5768db:7144
     * @var \CWM\BroadWorksConnector\Ocip\Models\XsiPolicyProfileKey|null
     */
    protected $xsiPolicyProfile = null;

    /**
     * @ElementName responseSizeLimit
     * @Type int
     * @Optional
     * @Group e19a9072c2dad499e9f28837da5768db:7144
     * @MinInclusive 1
     * @var int|null
     */
    protected $responseSizeLimit = null;

    /**
     * @ElementName searchCriteriaGroupId
     * @Type \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaGroupId
     * @Array
     * @Optional
     * @Group e19a9072c2dad499e9f28837da5768db:7144
     * @var \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaGroupId[]
     */
    protected $searchCriteriaGroupId = [
        
    ];

    /**
     * @ElementName searchCriteriaGroupName
     * @Type \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaGroupName
     * @Array
     * @Optional
     * @Group e19a9072c2dad499e9f28837da5768db:7144
     * @var \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaGroupName[]
     */
    protected $searchCriteriaGroupName = [
        
    ];

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
     * Getter for xsiPolicyProfile
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\XsiPolicyProfileKey
     */
    public function getXsiPolicyProfile()
    {
        return $this->xsiPolicyProfile instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->xsiPolicyProfile;
    }

    /**
     * Setter for xsiPolicyProfile
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\XsiPolicyProfileKey $xsiPolicyProfile
     * @return $this
     */
    public function setXsiPolicyProfile(\CWM\BroadWorksConnector\Ocip\Models\XsiPolicyProfileKey $xsiPolicyProfile)
    {
        $this->xsiPolicyProfile = $xsiPolicyProfile;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetXsiPolicyProfile()
    {
        $this->xsiPolicyProfile = null;
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
     * Getter for searchCriteriaGroupId
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaGroupId[]
     */
    public function getSearchCriteriaGroupId()
    {
        return $this->searchCriteriaGroupId instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->searchCriteriaGroupId;
    }

    /**
     * Setter for searchCriteriaGroupId
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaGroupId[] $searchCriteriaGroupId
     * @return $this
     */
    public function setSearchCriteriaGroupId(array $searchCriteriaGroupId)
    {
        $this->searchCriteriaGroupId = $searchCriteriaGroupId;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetSearchCriteriaGroupId()
    {
        $this->searchCriteriaGroupId = null;
        return $this;
    }

    /**
     * Adder for searchCriteriaGroupId
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaGroupId $searchCriteriaGroupId
     * @return $this
     */
    public function addSearchCriteriaGroupId($searchCriteriaGroupId)
    {
        $this->searchCriteriaGroupId[] = $searchCriteriaGroupId;
        return $this;
    }

    /**
     * Getter for searchCriteriaGroupName
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaGroupName[]
     */
    public function getSearchCriteriaGroupName()
    {
        return $this->searchCriteriaGroupName instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->searchCriteriaGroupName;
    }

    /**
     * Setter for searchCriteriaGroupName
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaGroupName[] $searchCriteriaGroupName
     * @return $this
     */
    public function setSearchCriteriaGroupName(array $searchCriteriaGroupName)
    {
        $this->searchCriteriaGroupName = $searchCriteriaGroupName;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetSearchCriteriaGroupName()
    {
        $this->searchCriteriaGroupName = null;
        return $this;
    }

    /**
     * Adder for searchCriteriaGroupName
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaGroupName $searchCriteriaGroupName
     * @return $this
     */
    public function addSearchCriteriaGroupName($searchCriteriaGroupName)
    {
        $this->searchCriteriaGroupName[] = $searchCriteriaGroupName;
        return $this;
    }
}

