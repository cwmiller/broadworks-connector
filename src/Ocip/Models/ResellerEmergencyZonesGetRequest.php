<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * ResellerEmergencyZonesGetRequest
 *
 * Request the reseller level data associated with Emergency Zones.
 *         The response is either a ResellerEmergencyZonesGetResponse or an
 *         ErrorResponse.
 *
 * @see ResellerEmergencyZonesGetResponse
 * @see ErrorResponse
 * @Groups [{"id":"993492ea5726d0f3ec8743f5cef40e23:212","type":"sequence"}]
 */
class ResellerEmergencyZonesGetRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{
    /**
     * @ElementName resellerId
     * @Type string
     * @Group 993492ea5726d0f3ec8743f5cef40e23:212
     * @MinLength 1
     * @MaxLength 36
     * @var string|null
     */
    protected $resellerId = null;

    /**
     * Getter for resellerId
     *
     * @return string
     */
    public function getResellerId()
    {
        return $this->resellerId instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->resellerId;
    }

    /**
     * Setter for resellerId
     *
     * @param string $resellerId
     * @return $this
     */
    public function setResellerId($resellerId)
    {
        $this->resellerId = $resellerId;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetResellerId()
    {
        $this->resellerId = null;
        return $this;
    }
}

