<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemThirdPartyVoiceMailSupportGetDnListRequest
 *
 * Request to get a list of ThirdPartyVoiceMailSupport User DN's defined in the
 * system.
 *        The response is either a
 * SystemThirdPartyVoiceMailSupportGetDnListResponse or an ErrorResponse.
 *        The search can be done using multiple criterion.
 *
 * @see SystemThirdPartyVoiceMailSupportGetDnListResponse
 * @see ErrorResponse
 */
class SystemThirdPartyVoiceMailSupportGetDnListRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName responseSizeLimit
     * @var int|null
     */
    private $responseSizeLimit = null;

    /**
     * @ElementName searchCriteriaSystemServiceDn
     * @var \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaSystemServiceDn[]
     */
    private $searchCriteriaSystemServiceDn = array(
        
    );

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
     * Getter for searchCriteriaSystemServiceDn
     *
     * @ElementName searchCriteriaSystemServiceDn
     * @return \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaSystemServiceDn[]
     */
    public function getSearchCriteriaSystemServiceDn()
    {
        return $this->searchCriteriaSystemServiceDn;
    }

    /**
     * Setter for searchCriteriaSystemServiceDn
     *
     * @ElementName searchCriteriaSystemServiceDn
     * @param \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaSystemServiceDn[] $searchCriteriaSystemServiceDn
     * @return $this
     */
    public function setSearchCriteriaSystemServiceDn($searchCriteriaSystemServiceDn)
    {
        $this->searchCriteriaSystemServiceDn = $searchCriteriaSystemServiceDn;
        return $this;
    }

    /**
     * Adder for searchCriteriaSystemServiceDn
     *
     * @ElementName searchCriteriaSystemServiceDn
     * @param \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaSystemServiceDn $searchCriteriaSystemServiceDn
     * @return $this
     */
    public function addSearchCriteriaSystemServiceDn($searchCriteriaSystemServiceDn)
    {
        $this->searchCriteriaSystemServiceDn []= $searchCriteriaSystemServiceDn;
        return $this;
    }


}

