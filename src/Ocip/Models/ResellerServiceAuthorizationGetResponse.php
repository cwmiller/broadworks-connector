<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * ResellerServiceAuthorizationGetResponse
 *
 * Response to the ResellerServiceAuthorizationGetRequest.
 *
 * @see ResellerServiceAuthorizationGetRequest
 * @Groups [{"id":"d45e381d6dbac771631649063122a42e:833","type":"sequence"}]
 */
class ResellerServiceAuthorizationGetResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{
    /**
     * @ElementName serviceOffering
     * @Type string
     * @Optional
     * @Group d45e381d6dbac771631649063122a42e:833
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

