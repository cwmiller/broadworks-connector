<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemThirdPartyEmergencyCallingModifyRequest
 *
 * Modify the third-party emergency call service settings for the system.
 *         The response is either a SuccessResponse or an ErrorResponse.
 *
 * @see SuccessResponse
 * @see ErrorResponse
 * @Groups [{"id":"7f663d5135470c33ca64b0eed3c3aa0c:18562","type":"sequence"}]
 */
class SystemThirdPartyEmergencyCallingModifyRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName primaryHELDServerURL
     * @Type string
     * @Nillable
     * @Optional
     * @Group 7f663d5135470c33ca64b0eed3c3aa0c:18562
     * @MinLength 1
     * @MaxLength 256
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $primaryHELDServerURL = null;

    /**
     * @ElementName secondaryHELDServerURL
     * @Type string
     * @Nillable
     * @Optional
     * @Group 7f663d5135470c33ca64b0eed3c3aa0c:18562
     * @MinLength 1
     * @MaxLength 256
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $secondaryHELDServerURL = null;

    /**
     * @ElementName emergencyRouteNetAddress
     * @Type string
     * @Nillable
     * @Optional
     * @Group 7f663d5135470c33ca64b0eed3c3aa0c:18562
     * @MinLength 1
     * @MaxLength 80
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $emergencyRouteNetAddress = null;

    /**
     * @ElementName emergencyRoutePort
     * @Type int
     * @Nillable
     * @Optional
     * @Group 7f663d5135470c33ca64b0eed3c3aa0c:18562
     * @MinInclusive 1025
     * @MaxInclusive 65535
     * @var int|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $emergencyRoutePort = null;

    /**
     * @ElementName emergencyRouteTransport
     * @Type \CWM\BroadWorksConnector\Ocip\Models\ExtendedTransportProtocol
     * @Nillable
     * @Optional
     * @Group 7f663d5135470c33ca64b0eed3c3aa0c:18562
     * @var \CWM\BroadWorksConnector\Ocip\Models\ExtendedTransportProtocol|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $emergencyRouteTransport = null;

    /**
     * Getter for primaryHELDServerURL
     *
     * @return string|null
     */
    public function getPrimaryHELDServerURL()
    {
        return $this->primaryHELDServerURL instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->primaryHELDServerURL;
    }

    /**
     * Setter for primaryHELDServerURL
     *
     * @param string|null $primaryHELDServerURL
     * @return $this
     */
    public function setPrimaryHELDServerURL($primaryHELDServerURL = null)
    {
        if ($primaryHELDServerURL === null) {
            $this->primaryHELDServerURL = new \CWM\BroadWorksConnector\Ocip\Nil;
        } else {
            $this->primaryHELDServerURL = $primaryHELDServerURL;
        }
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetPrimaryHELDServerURL()
    {
        $this->primaryHELDServerURL = null;
        return $this;
    }

    /**
     * Getter for secondaryHELDServerURL
     *
     * @return string|null
     */
    public function getSecondaryHELDServerURL()
    {
        return $this->secondaryHELDServerURL instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->secondaryHELDServerURL;
    }

    /**
     * Setter for secondaryHELDServerURL
     *
     * @param string|null $secondaryHELDServerURL
     * @return $this
     */
    public function setSecondaryHELDServerURL($secondaryHELDServerURL = null)
    {
        if ($secondaryHELDServerURL === null) {
            $this->secondaryHELDServerURL = new \CWM\BroadWorksConnector\Ocip\Nil;
        } else {
            $this->secondaryHELDServerURL = $secondaryHELDServerURL;
        }
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetSecondaryHELDServerURL()
    {
        $this->secondaryHELDServerURL = null;
        return $this;
    }

    /**
     * Getter for emergencyRouteNetAddress
     *
     * @return string|null
     */
    public function getEmergencyRouteNetAddress()
    {
        return $this->emergencyRouteNetAddress instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->emergencyRouteNetAddress;
    }

    /**
     * Setter for emergencyRouteNetAddress
     *
     * @param string|null $emergencyRouteNetAddress
     * @return $this
     */
    public function setEmergencyRouteNetAddress($emergencyRouteNetAddress = null)
    {
        if ($emergencyRouteNetAddress === null) {
            $this->emergencyRouteNetAddress = new \CWM\BroadWorksConnector\Ocip\Nil;
        } else {
            $this->emergencyRouteNetAddress = $emergencyRouteNetAddress;
        }
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetEmergencyRouteNetAddress()
    {
        $this->emergencyRouteNetAddress = null;
        return $this;
    }

    /**
     * Getter for emergencyRoutePort
     *
     * @return int|null
     */
    public function getEmergencyRoutePort()
    {
        return $this->emergencyRoutePort instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->emergencyRoutePort;
    }

    /**
     * Setter for emergencyRoutePort
     *
     * @param int|null $emergencyRoutePort
     * @return $this
     */
    public function setEmergencyRoutePort($emergencyRoutePort = null)
    {
        if ($emergencyRoutePort === null) {
            $this->emergencyRoutePort = new \CWM\BroadWorksConnector\Ocip\Nil;
        } else {
            $this->emergencyRoutePort = $emergencyRoutePort;
        }
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetEmergencyRoutePort()
    {
        $this->emergencyRoutePort = null;
        return $this;
    }

    /**
     * Getter for emergencyRouteTransport
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\ExtendedTransportProtocol|null
     */
    public function getEmergencyRouteTransport()
    {
        return $this->emergencyRouteTransport instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->emergencyRouteTransport;
    }

    /**
     * Setter for emergencyRouteTransport
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\ExtendedTransportProtocol|null $emergencyRouteTransport
     * @return $this
     */
    public function setEmergencyRouteTransport(\CWM\BroadWorksConnector\Ocip\Models\ExtendedTransportProtocol $emergencyRouteTransport = null)
    {
        if ($emergencyRouteTransport === null) {
            $this->emergencyRouteTransport = new \CWM\BroadWorksConnector\Ocip\Nil;
        } else {
            $this->emergencyRouteTransport = $emergencyRouteTransport;
        }
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetEmergencyRouteTransport()
    {
        $this->emergencyRouteTransport = null;
        return $this;
    }


}

