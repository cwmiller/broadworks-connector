<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserGetServiceInstanceListInServiceProviderRequest
 *
 * Request the list of Service Instances in a service provider or an enterprise.
 *         It is possible to search by various criteria to restrict the number of rows returned.
 *         Multiple search criteria are logically ANDed together. searchCriteriaExactUserDepartment criteria is only applicable for an enterprise and is ignored if set for a service provider. 
 *         The response is either a UserGetServiceInstanceListInServiceProviderResponse or an ErrorResponse.
 *
 * @see UserGetServiceInstanceListInServiceProviderResponse
 * @see ErrorResponse
 * @Groups [{"id":"fb73488c2ef4ac4400ab213b637d79a9:2229","type":"sequence"}]
 */
class UserGetServiceInstanceListInServiceProviderRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{
    /**
     * @ElementName serviceProviderId
     * @Type string
     * @Group fb73488c2ef4ac4400ab213b637d79a9:2229
     * @MinLength 1
     * @MaxLength 30
     * @var string|null
     */
    protected $serviceProviderId = null;

    /**
     * @ElementName responseSizeLimit
     * @Type int
     * @Optional
     * @Group fb73488c2ef4ac4400ab213b637d79a9:2229
     * @MinInclusive 1
     * @var int|null
     */
    protected $responseSizeLimit = null;

    /**
     * @ElementName SearchCriteriaGroupId
     * @Type \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaGroupId
     * @Array
     * @Optional
     * @Group fb73488c2ef4ac4400ab213b637d79a9:2229
     * @var \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaGroupId[]
     */
    protected $SearchCriteriaGroupId = [
        
    ];

    /**
     * @ElementName SearchCriteriaExactServiceType
     * @Type \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaExactServiceType
     * @Optional
     * @Group fb73488c2ef4ac4400ab213b637d79a9:2229
     * @var \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaExactServiceType|null
     */
    protected $SearchCriteriaExactServiceType = null;

    /**
     * @ElementName searchCriteriaUserId
     * @Type \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaUserId
     * @Array
     * @Optional
     * @Group fb73488c2ef4ac4400ab213b637d79a9:2229
     * @var \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaUserId[]
     */
    protected $searchCriteriaUserId = [
        
    ];

    /**
     * @ElementName searchCriteriaUserLastName
     * @Type \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaUserLastName
     * @Array
     * @Optional
     * @Group fb73488c2ef4ac4400ab213b637d79a9:2229
     * @var \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaUserLastName[]
     */
    protected $searchCriteriaUserLastName = [
        
    ];

    /**
     * @ElementName searchCriteriaDn
     * @Type \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaDn
     * @Array
     * @Optional
     * @Group fb73488c2ef4ac4400ab213b637d79a9:2229
     * @var \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaDn[]
     */
    protected $searchCriteriaDn = [
        
    ];

    /**
     * @ElementName searchCriteriaExtension
     * @Type \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaExtension
     * @Array
     * @Optional
     * @Group fb73488c2ef4ac4400ab213b637d79a9:2229
     * @var \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaExtension[]
     */
    protected $searchCriteriaExtension = [
        
    ];

    /**
     * @ElementName searchCriteriaExactUserDepartment
     * @Type \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaExactUserDepartment
     * @Optional
     * @Group fb73488c2ef4ac4400ab213b637d79a9:2229
     * @var \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaExactUserDepartment|null
     */
    protected $searchCriteriaExactUserDepartment = null;

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
     * Getter for SearchCriteriaGroupId
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaGroupId[]
     */
    public function getSearchCriteriaGroupId()
    {
        return $this->SearchCriteriaGroupId instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->SearchCriteriaGroupId;
    }

    /**
     * Setter for SearchCriteriaGroupId
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaGroupId[] $SearchCriteriaGroupId
     * @return $this
     */
    public function setSearchCriteriaGroupId(array $SearchCriteriaGroupId)
    {
        $this->SearchCriteriaGroupId = $SearchCriteriaGroupId;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetSearchCriteriaGroupId()
    {
        $this->SearchCriteriaGroupId = null;
        return $this;
    }

    /**
     * Adder for SearchCriteriaGroupId
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaGroupId $SearchCriteriaGroupId
     * @return $this
     */
    public function addSearchCriteriaGroupId($SearchCriteriaGroupId)
    {
        $this->SearchCriteriaGroupId[] = $SearchCriteriaGroupId;
        return $this;
    }

    /**
     * Getter for SearchCriteriaExactServiceType
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaExactServiceType
     */
    public function getSearchCriteriaExactServiceType()
    {
        return $this->SearchCriteriaExactServiceType instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->SearchCriteriaExactServiceType;
    }

    /**
     * Setter for SearchCriteriaExactServiceType
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaExactServiceType $SearchCriteriaExactServiceType
     * @return $this
     */
    public function setSearchCriteriaExactServiceType(\CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaExactServiceType $SearchCriteriaExactServiceType)
    {
        $this->SearchCriteriaExactServiceType = $SearchCriteriaExactServiceType;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetSearchCriteriaExactServiceType()
    {
        $this->SearchCriteriaExactServiceType = null;
        return $this;
    }

    /**
     * Getter for searchCriteriaUserId
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaUserId[]
     */
    public function getSearchCriteriaUserId()
    {
        return $this->searchCriteriaUserId instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->searchCriteriaUserId;
    }

    /**
     * Setter for searchCriteriaUserId
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaUserId[] $searchCriteriaUserId
     * @return $this
     */
    public function setSearchCriteriaUserId(array $searchCriteriaUserId)
    {
        $this->searchCriteriaUserId = $searchCriteriaUserId;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetSearchCriteriaUserId()
    {
        $this->searchCriteriaUserId = null;
        return $this;
    }

    /**
     * Adder for searchCriteriaUserId
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaUserId $searchCriteriaUserId
     * @return $this
     */
    public function addSearchCriteriaUserId($searchCriteriaUserId)
    {
        $this->searchCriteriaUserId[] = $searchCriteriaUserId;
        return $this;
    }

    /**
     * Getter for searchCriteriaUserLastName
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaUserLastName[]
     */
    public function getSearchCriteriaUserLastName()
    {
        return $this->searchCriteriaUserLastName instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->searchCriteriaUserLastName;
    }

    /**
     * Setter for searchCriteriaUserLastName
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaUserLastName[] $searchCriteriaUserLastName
     * @return $this
     */
    public function setSearchCriteriaUserLastName(array $searchCriteriaUserLastName)
    {
        $this->searchCriteriaUserLastName = $searchCriteriaUserLastName;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetSearchCriteriaUserLastName()
    {
        $this->searchCriteriaUserLastName = null;
        return $this;
    }

    /**
     * Adder for searchCriteriaUserLastName
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaUserLastName $searchCriteriaUserLastName
     * @return $this
     */
    public function addSearchCriteriaUserLastName($searchCriteriaUserLastName)
    {
        $this->searchCriteriaUserLastName[] = $searchCriteriaUserLastName;
        return $this;
    }

    /**
     * Getter for searchCriteriaDn
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaDn[]
     */
    public function getSearchCriteriaDn()
    {
        return $this->searchCriteriaDn instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->searchCriteriaDn;
    }

    /**
     * Setter for searchCriteriaDn
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaDn[] $searchCriteriaDn
     * @return $this
     */
    public function setSearchCriteriaDn(array $searchCriteriaDn)
    {
        $this->searchCriteriaDn = $searchCriteriaDn;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetSearchCriteriaDn()
    {
        $this->searchCriteriaDn = null;
        return $this;
    }

    /**
     * Adder for searchCriteriaDn
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaDn $searchCriteriaDn
     * @return $this
     */
    public function addSearchCriteriaDn($searchCriteriaDn)
    {
        $this->searchCriteriaDn[] = $searchCriteriaDn;
        return $this;
    }

    /**
     * Getter for searchCriteriaExtension
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaExtension[]
     */
    public function getSearchCriteriaExtension()
    {
        return $this->searchCriteriaExtension instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->searchCriteriaExtension;
    }

    /**
     * Setter for searchCriteriaExtension
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaExtension[] $searchCriteriaExtension
     * @return $this
     */
    public function setSearchCriteriaExtension(array $searchCriteriaExtension)
    {
        $this->searchCriteriaExtension = $searchCriteriaExtension;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetSearchCriteriaExtension()
    {
        $this->searchCriteriaExtension = null;
        return $this;
    }

    /**
     * Adder for searchCriteriaExtension
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaExtension $searchCriteriaExtension
     * @return $this
     */
    public function addSearchCriteriaExtension($searchCriteriaExtension)
    {
        $this->searchCriteriaExtension[] = $searchCriteriaExtension;
        return $this;
    }

    /**
     * Getter for searchCriteriaExactUserDepartment
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaExactUserDepartment
     */
    public function getSearchCriteriaExactUserDepartment()
    {
        return $this->searchCriteriaExactUserDepartment instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->searchCriteriaExactUserDepartment;
    }

    /**
     * Setter for searchCriteriaExactUserDepartment
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaExactUserDepartment $searchCriteriaExactUserDepartment
     * @return $this
     */
    public function setSearchCriteriaExactUserDepartment(\CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaExactUserDepartment $searchCriteriaExactUserDepartment)
    {
        $this->searchCriteriaExactUserDepartment = $searchCriteriaExactUserDepartment;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetSearchCriteriaExactUserDepartment()
    {
        $this->searchCriteriaExactUserDepartment = null;
        return $this;
    }
}

