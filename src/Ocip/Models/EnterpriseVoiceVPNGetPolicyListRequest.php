<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * EnterpriseVoiceVPNGetPolicyListRequest
 *
 * Request the list of Voice VPN locations.
 *         It is possible to search by various criteria to restrict the number of
 * rows returned.
 *         Multiple search criteria are logically ANDed together.
 *         The response is either a EnterpriseVoiceVPNGetPolicyListResponse or an
 * ErrorResponse.
 */
class EnterpriseVoiceVPNGetPolicyListRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName serviceProviderId
     * @var string|null
     */
    private $serviceProviderId = null;

    /**
     * @ElementName responseSizeLimit
     * @var int|null
     */
    private $responseSizeLimit = null;

    /**
     * @ElementName searchCriteriaGroupLocationCode
     * @var \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaGroupLocationCode[]
     */
    private $searchCriteriaGroupLocationCode = array(
        
    );

    /**
     * @ElementName searchCriteriaExactPolicySelection
     * @var \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaExactPolicySelection|null
     */
    private $searchCriteriaExactPolicySelection = null;

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
     * Getter for searchCriteriaGroupLocationCode
     *
     * @ElementName searchCriteriaGroupLocationCode
     * @return \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaGroupLocationCode[]
     */
    public function getSearchCriteriaGroupLocationCode()
    {
        return $this->searchCriteriaGroupLocationCode;
    }

    /**
     * Setter for searchCriteriaGroupLocationCode
     *
     * @ElementName searchCriteriaGroupLocationCode
     * @param \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaGroupLocationCode[] $searchCriteriaGroupLocationCode
     * @return $this
     */
    public function setSearchCriteriaGroupLocationCode($searchCriteriaGroupLocationCode)
    {
        $this->searchCriteriaGroupLocationCode = $searchCriteriaGroupLocationCode;
        return $this;
    }

    /**
     * Adder for searchCriteriaGroupLocationCode
     *
     * @ElementName searchCriteriaGroupLocationCode
     * @param \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaGroupLocationCode $searchCriteriaGroupLocationCode
     * @return $this
     */
    public function addSearchCriteriaGroupLocationCode($searchCriteriaGroupLocationCode)
    {
        $this->searchCriteriaGroupLocationCode []= $searchCriteriaGroupLocationCode;
        return $this;
    }

    /**
     * Getter for searchCriteriaExactPolicySelection
     *
     * @ElementName searchCriteriaExactPolicySelection
     * @return \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaExactPolicySelection|null
     */
    public function getSearchCriteriaExactPolicySelection()
    {
        return $this->searchCriteriaExactPolicySelection;
    }

    /**
     * Setter for searchCriteriaExactPolicySelection
     *
     * @ElementName searchCriteriaExactPolicySelection
     * @param \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaExactPolicySelection|null $searchCriteriaExactPolicySelection
     * @return $this
     */
    public function setSearchCriteriaExactPolicySelection($searchCriteriaExactPolicySelection)
    {
        $this->searchCriteriaExactPolicySelection = $searchCriteriaExactPolicySelection;
        return $this;
    }


}

