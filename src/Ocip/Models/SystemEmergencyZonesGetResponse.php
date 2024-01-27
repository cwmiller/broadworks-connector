<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemEmergencyZonesGetResponse
 *
 * Response to SystemEmergencyZonesGetRequest.
 *
 * @see SystemEmergencyZonesGetRequest
 * @Groups [{"id":"993492ea5726d0f3ec8743f5cef40e23:274","type":"sequence"}]
 */
class SystemEmergencyZonesGetResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{
    /**
     * @ElementName defaultFromAddress
     * @Type string
     * @Group 993492ea5726d0f3ec8743f5cef40e23:274
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

