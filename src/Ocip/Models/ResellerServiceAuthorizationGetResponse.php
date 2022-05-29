<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * ResellerServiceAuthorizationGetResponse
 *
 * Response to the ResellerServiceAuthorizationGetRequest.
 *
 * @see ResellerServiceAuthorizationGetRequest
 * @Groups [{"id":"b009175f2a2a9d38115e319a6ad64d7f:828","type":"sequence"}]
 */
class ResellerServiceAuthorizationGetResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName serviceOffering
     * @Type string
     * @Optional
     * @Group b009175f2a2a9d38115e319a6ad64d7f:828
     * @var string|null
     */
    protected $serviceOffering = null;

    /**
     * Getter for serviceOffering
     *
     * @return string
     */
    public function getServiceOffering()
    {
        return $this->serviceOffering instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->serviceOffering;
    }

    /**
     * Setter for serviceOffering
     *
     * @param string $serviceOffering
     * @return $this
     */
    public function setServiceOffering($serviceOffering)
    {
        $this->serviceOffering = $serviceOffering;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetServiceOffering()
    {
        $this->serviceOffering = null;
        return $this;
    }


}

