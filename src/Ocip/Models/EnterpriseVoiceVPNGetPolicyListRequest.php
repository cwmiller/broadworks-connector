<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * EnterpriseVoiceVPNGetPolicyListRequest
 *
 * Request the list of Voice VPN locations.
 *         It is possible to search by various criteria to restrict the number of rows returned.
 *         Multiple search criteria are logically ANDed together.
 *         The response is either a EnterpriseVoiceVPNGetPolicyListResponse or an ErrorResponse.
 *
 * @see EnterpriseVoiceVPNGetPolicyListResponse
 * @see ErrorResponse
 * @Groups [{"id":"405ec18fe08719ecf74e749d7e18c88f:1085","type":"sequence"}]
 */
class EnterpriseVoiceVPNGetPolicyListRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{
    /**
     * @ElementName serviceProviderId
     * @Type string
     * @Group 405ec18fe08719ecf74e749d7e18c88f:1085
     * @MinLength 1
     * @MaxLength 30
     * @var string|null
     */
    protected $serviceProviderId = null;

    /**
     * @ElementName responseSizeLimit
     * @Type int
     * @Optional
     * @Group 405ec18fe08719ecf74e749d7e18c88f:1085
     * @MinInclusive 1
     * @var int|null
     */
    protected $responseSizeLimit = null;

    /**
     * @ElementName searchCriteriaGroupLocationCode
     * @Type \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaGroupLocationCode
     * @Array
     * @Optional
     * @Group 405ec18fe08719ecf74e749d7e18c88f:1085
     * @var \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaGroupLocationCode[]
     */
    protected $searchCriteriaGroupLocationCode = [
        
    ];

    /**
     * @ElementName searchCriteriaExactPolicySelection
     * @Type \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaExactPolicySelection
     * @Optional
     * @Group 405ec18fe08719ecf74e749d7e18c88f:1085
     * @var \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaExactPolicySelection|null
     */
    protected $searchCriteriaExactPolicySelection = null;

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
     * Getter for searchCriteriaGroupLocationCode
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaGroupLocationCode[]
     */
    public function getSearchCriteriaGroupLocationCode()
    {
        return $this->searchCriteriaGroupLocationCode instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->searchCriteriaGroupLocationCode;
    }

    /**
     * Setter for searchCriteriaGroupLocationCode
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaGroupLocationCode[] $searchCriteriaGroupLocationCode
     * @return $this
     */
    public function setSearchCriteriaGroupLocationCode(array $searchCriteriaGroupLocationCode)
    {
        $this->searchCriteriaGroupLocationCode = $searchCriteriaGroupLocationCode;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetSearchCriteriaGroupLocationCode()
    {
        $this->searchCriteriaGroupLocationCode = null;
        return $this;
    }

    /**
     * Adder for searchCriteriaGroupLocationCode
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaGroupLocationCode $searchCriteriaGroupLocationCode
     * @return $this
     */
    public function addSearchCriteriaGroupLocationCode($searchCriteriaGroupLocationCode)
    {
        $this->searchCriteriaGroupLocationCode[] = $searchCriteriaGroupLocationCode;
        return $this;
    }

    /**
     * Getter for searchCriteriaExactPolicySelection
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaExactPolicySelection
     */
    public function getSearchCriteriaExactPolicySelection()
    {
        return $this->searchCriteriaExactPolicySelection instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->searchCriteriaExactPolicySelection;
    }

    /**
     * Setter for searchCriteriaExactPolicySelection
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaExactPolicySelection $searchCriteriaExactPolicySelection
     * @return $this
     */
    public function setSearchCriteriaExactPolicySelection(\CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaExactPolicySelection $searchCriteriaExactPolicySelection)
    {
        $this->searchCriteriaExactPolicySelection = $searchCriteriaExactPolicySelection;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetSearchCriteriaExactPolicySelection()
    {
        $this->searchCriteriaExactPolicySelection = null;
        return $this;
    }
}

