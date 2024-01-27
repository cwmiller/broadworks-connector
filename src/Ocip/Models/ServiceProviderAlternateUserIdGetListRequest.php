<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * ServiceProviderAlternateUserIdGetListRequest
 *
 * Request to get the list of alternate user ids in the service provider/enterprise.        
 *         The response is either ServiceProviderAlternateUserIdGetListResponse or ErrorResponse.
 *
 * @see ServiceProviderAlternateUserIdGetListResponse
 * @see ErrorResponse
 * @Groups [{"id":"e19a9072c2dad499e9f28837da5768db:1708","type":"sequence"}]
 */
class ServiceProviderAlternateUserIdGetListRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{
    /**
     * @ElementName serviceProviderId
     * @Type string
     * @Group e19a9072c2dad499e9f28837da5768db:1708
     * @MinLength 1
     * @MaxLength 30
     * @var string|null
     */
    protected $serviceProviderId = null;

    /**
     * @ElementName responseSizeLimit
     * @Type int
     * @Optional
     * @Group e19a9072c2dad499e9f28837da5768db:1708
     * @MinInclusive 1
     * @var int|null
     */
    protected $responseSizeLimit = null;

    /**
     * @ElementName searchCriteriaAlternateUserId
     * @Type \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaAlternateUserId
     * @Array
     * @Optional
     * @Group e19a9072c2dad499e9f28837da5768db:1708
     * @var \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaAlternateUserId[]
     */
    protected $searchCriteriaAlternateUserId = [
        
    ];

    /**
     * @ElementName searchCriteriaUserId
     * @Type \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaUserId
     * @Array
     * @Optional
     * @Group e19a9072c2dad499e9f28837da5768db:1708
     * @var \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaUserId[]
     */
    protected $searchCriteriaUserId = [
        
    ];

    /**
     * @ElementName searchCriteriaGroupId
     * @Type \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaGroupId
     * @Array
     * @Optional
     * @Group e19a9072c2dad499e9f28837da5768db:1708
     * @var \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaGroupId[]
     */
    protected $searchCriteriaGroupId = [
        
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
     * Getter for searchCriteriaAlternateUserId
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaAlternateUserId[]
     */
    public function getSearchCriteriaAlternateUserId()
    {
        return $this->searchCriteriaAlternateUserId instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->searchCriteriaAlternateUserId;
    }

    /**
     * Setter for searchCriteriaAlternateUserId
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaAlternateUserId[] $searchCriteriaAlternateUserId
     * @return $this
     */
    public function setSearchCriteriaAlternateUserId(array $searchCriteriaAlternateUserId)
    {
        $this->searchCriteriaAlternateUserId = $searchCriteriaAlternateUserId;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetSearchCriteriaAlternateUserId()
    {
        $this->searchCriteriaAlternateUserId = null;
        return $this;
    }

    /**
     * Adder for searchCriteriaAlternateUserId
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaAlternateUserId $searchCriteriaAlternateUserId
     * @return $this
     */
    public function addSearchCriteriaAlternateUserId($searchCriteriaAlternateUserId)
    {
        $this->searchCriteriaAlternateUserId[] = $searchCriteriaAlternateUserId;
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
}

