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
     * @Type int
     * @var int|null
     */
    private $responseSizeLimit = null;

    /**
     * @ElementName searchCriteriaSystemServiceDn
     * @Type \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaSystemServiceDn
     * @Array
     * @var \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaSystemServiceDn[]
     */
    private $searchCriteriaSystemServiceDn = array(
        
    );

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
     * Getter for searchCriteriaSystemServiceDn
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaSystemServiceDn[]
     */
    public function getSearchCriteriaSystemServiceDn()
    {
        return $this->searchCriteriaSystemServiceDn instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->searchCriteriaSystemServiceDn;
    }

    /**
     * Setter for searchCriteriaSystemServiceDn
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaSystemServiceDn[] $searchCriteriaSystemServiceDn
     * @return $this
     */
    public function setSearchCriteriaSystemServiceDn(array $searchCriteriaSystemServiceDn)
    {
        $this->searchCriteriaSystemServiceDn = $searchCriteriaSystemServiceDn;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetSearchCriteriaSystemServiceDn()
    {
        $this->searchCriteriaSystemServiceDn = null;
        return $this;
    }

    /**
     * Adder for searchCriteriaSystemServiceDn
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaSystemServiceDn $searchCriteriaSystemServiceDn
     * @return $this
     */
    public function addSearchCriteriaSystemServiceDn($searchCriteriaSystemServiceDn)
    {
        $this->searchCriteriaSystemServiceDn[] = $searchCriteriaSystemServiceDn;
        return $this;
    }


}

