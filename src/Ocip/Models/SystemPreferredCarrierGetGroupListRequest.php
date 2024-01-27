<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemPreferredCarrierGetGroupListRequest
 *
 * Requests a list of groups using the specified carrier.  It is possible to restrict the
 *         number of rows returned by specifying various search criteria. Multiple search criteria
 *         are logically ANDed together.
 *         The response is either a SystemPreferredCarrierGetGroupListResponse or an ErrorResponse.
 *
 * @see SystemPreferredCarrierGetGroupListResponse
 * @see ErrorResponse
 * @Groups [{"id":"31dec625cdd18e8228eb61ffb34ddc0e:359","type":"sequence"}]
 */
class SystemPreferredCarrierGetGroupListRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{
    /**
     * @ElementName carrier
     * @Type string
     * @Group 31dec625cdd18e8228eb61ffb34ddc0e:359
     * @MinLength 1
     * @MaxLength 80
     * @var string|null
     */
    protected $carrier = null;

    /**
     * @ElementName responseSizeLimit
     * @Type int
     * @Optional
     * @Group 31dec625cdd18e8228eb61ffb34ddc0e:359
     * @MinInclusive 1
     * @var int|null
     */
    protected $responseSizeLimit = null;

    /**
     * @ElementName searchCriteriaGroupId
     * @Type \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaGroupId
     * @Array
     * @Optional
     * @Group 31dec625cdd18e8228eb61ffb34ddc0e:359
     * @var \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaGroupId[]
     */
    protected $searchCriteriaGroupId = [
        
    ];

    /**
     * @ElementName searchCriteriaGroupName
     * @Type \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaGroupName
     * @Array
     * @Optional
     * @Group 31dec625cdd18e8228eb61ffb34ddc0e:359
     * @var \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaGroupName[]
     */
    protected $searchCriteriaGroupName = [
        
    ];

    /**
     * @ElementName searchCriteriaExactServiceProvider
     * @Type \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaExactServiceProvider
     * @Array
     * @Optional
     * @Group 31dec625cdd18e8228eb61ffb34ddc0e:359
     * @var \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaExactServiceProvider[]
     */
    protected $searchCriteriaExactServiceProvider = [
        
    ];

    /**
     * @ElementName searchCriteriaServiceProviderId
     * @Type \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaServiceProviderId
     * @Array
     * @Optional
     * @Group 31dec625cdd18e8228eb61ffb34ddc0e:359
     * @var \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaServiceProviderId[]
     */
    protected $searchCriteriaServiceProviderId = [
        
    ];

    /**
     * Getter for carrier
     *
     * @return string
     */
    public function getCarrier()
    {
        return $this->carrier instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->carrier;
    }

    /**
     * Setter for carrier
     *
     * @param string $carrier
     * @return $this
     */
    public function setCarrier($carrier)
    {
        $this->carrier = $carrier;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetCarrier()
    {
        $this->carrier = null;
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

    /**
     * Getter for searchCriteriaExactServiceProvider
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaExactServiceProvider[]
     */
    public function getSearchCriteriaExactServiceProvider()
    {
        return $this->searchCriteriaExactServiceProvider instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->searchCriteriaExactServiceProvider;
    }

    /**
     * Setter for searchCriteriaExactServiceProvider
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaExactServiceProvider[] $searchCriteriaExactServiceProvider
     * @return $this
     */
    public function setSearchCriteriaExactServiceProvider(array $searchCriteriaExactServiceProvider)
    {
        $this->searchCriteriaExactServiceProvider = $searchCriteriaExactServiceProvider;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetSearchCriteriaExactServiceProvider()
    {
        $this->searchCriteriaExactServiceProvider = null;
        return $this;
    }

    /**
     * Adder for searchCriteriaExactServiceProvider
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaExactServiceProvider $searchCriteriaExactServiceProvider
     * @return $this
     */
    public function addSearchCriteriaExactServiceProvider($searchCriteriaExactServiceProvider)
    {
        $this->searchCriteriaExactServiceProvider[] = $searchCriteriaExactServiceProvider;
        return $this;
    }

    /**
     * Getter for searchCriteriaServiceProviderId
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaServiceProviderId[]
     */
    public function getSearchCriteriaServiceProviderId()
    {
        return $this->searchCriteriaServiceProviderId instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->searchCriteriaServiceProviderId;
    }

    /**
     * Setter for searchCriteriaServiceProviderId
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaServiceProviderId[] $searchCriteriaServiceProviderId
     * @return $this
     */
    public function setSearchCriteriaServiceProviderId(array $searchCriteriaServiceProviderId)
    {
        $this->searchCriteriaServiceProviderId = $searchCriteriaServiceProviderId;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetSearchCriteriaServiceProviderId()
    {
        $this->searchCriteriaServiceProviderId = null;
        return $this;
    }

    /**
     * Adder for searchCriteriaServiceProviderId
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaServiceProviderId $searchCriteriaServiceProviderId
     * @return $this
     */
    public function addSearchCriteriaServiceProviderId($searchCriteriaServiceProviderId)
    {
        $this->searchCriteriaServiceProviderId[] = $searchCriteriaServiceProviderId;
        return $this;
    }
}

