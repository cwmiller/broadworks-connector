<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemEmergencyZonesModifyRequest
 *
 * Modify the system level data associated with Emergency Zones.
 *         The response is either a SuccessResponse or an ErrorResponse.
 *
 * @see SuccessResponse
 * @see ErrorResponse
 * @Groups [{"id":"e71c2205fb31894f87810b330a85ede2:290","type":"sequence"}]
 */
class SystemEmergencyZonesModifyRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName defaultFromAddress
     * @Type string
     * @Optional
     * @Group e71c2205fb31894f87810b330a85ede2:290
     * @MinLength 1
     * @MaxLength 80
     * @var string|null
     */
    private $defaultFromAddress = null;

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

