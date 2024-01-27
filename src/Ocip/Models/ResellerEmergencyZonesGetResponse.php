<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * ResellerEmergencyZonesGetResponse
 *
 * Response to ResellerEmergencyZonesGetRequest.
 *
 * @see ResellerEmergencyZonesGetRequest
 * @Groups [{"id":"993492ea5726d0f3ec8743f5cef40e23:227","type":"sequence"}]
 */
class ResellerEmergencyZonesGetResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{
    /**
     * @ElementName defaultFromAddress
     * @Type string
     * @Optional
     * @Group 993492ea5726d0f3ec8743f5cef40e23:227
     * @MinLength 1
     * @MaxLength 80
     * @var string|null
     */
    protected $defaultFromAddress = null;

    /**
     * Getter for defaultFromAddress
     *
     * @return string
     */
    public function getDefaultFromAddress()
    {
        return $this->defaultFromAddress instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->defaultFromAddress;
    }

    /**
     * Setter for defaultFromAddress
     *
     * @param string $defaultFromAddress
     * @return $this
     */
    public function setDefaultFromAddress($defaultFromAddress)
    {
        $this->defaultFromAddress = $defaultFromAddress;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetDefaultFromAddress()
    {
        $this->defaultFromAddress = null;
        return $this;
    }
}

