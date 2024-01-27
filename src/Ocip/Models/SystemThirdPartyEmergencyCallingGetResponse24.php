<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemThirdPartyEmergencyCallingGetResponse24
 *
 * Response to the SystemThirdPartyEmergencyCallingGetRequest24.
 *         The response contains the third-party emergency call service settings for the system.
 *
 * @see SystemThirdPartyEmergencyCallingGetRequest24
 * @Groups [{"id":"da582a1f8028404e70d260cf1f891033:18776","type":"sequence"}]
 */
class SystemThirdPartyEmergencyCallingGetResponse24 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{
    /**
     * @ElementName primaryHELDServerURL
     * @Type string
     * @Optional
     * @Group da582a1f8028404e70d260cf1f891033:18776
     * @MinLength 1
     * @MaxLength 256
     * @var string|null
     */
    protected $primaryHELDServerURL = null;

    /**
     * @ElementName secondaryHELDServerURL
     * @Type string
     * @Optional
     * @Group da582a1f8028404e70d260cf1f891033:18776
     * @MinLength 1
     * @MaxLength 256
     * @var string|null
     */
    protected $secondaryHELDServerURL = null;

    /**
     * @ElementName emergencyRouteNetAddress
     * @Type string
     * @Optional
     * @Group da582a1f8028404e70d260cf1f891033:18776
     * @MinLength 1
     * @MaxLength 80
     * @var string|null
     */
    protected $emergencyRouteNetAddress = null;

    /**
     * @ElementName emergencyRoutePort
     * @Type int
     * @Optional
     * @Group da582a1f8028404e70d260cf1f891033:18776
     * @MinInclusive 1025
     * @MaxInclusive 65535
     * @var int|null
     */
    protected $emergencyRoutePort = null;

    /**
     * @ElementName emergencyRouteTransport
     * @Type \CWM\BroadWorksConnector\Ocip\Models\ExtendedTransportProtocol
     * @Optional
     * @Group da582a1f8028404e70d260cf1f891033:18776
     * @var \CWM\BroadWorksConnector\Ocip\Models\ExtendedTransportProtocol|null
     */
    protected $emergencyRouteTransport = null;

    /**
     * Getter for primaryHELDServerURL
     *
     * @return string
     */
    public function getPrimaryHELDServerURL()
    {
        return $this->primaryHELDServerURL instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->primaryHELDServerURL;
    }

    /**
     * Setter for primaryHELDServerURL
     *
     * @param string $primaryHELDServerURL
     * @return $this
     */
    public function setPrimaryHELDServerURL($primaryHELDServerURL)
    {
        $this->primaryHELDServerURL = $primaryHELDServerURL;
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
     * @return string
     */
    public function getSecondaryHELDServerURL()
    {
        return $this->secondaryHELDServerURL instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->secondaryHELDServerURL;
    }

    /**
     * Setter for secondaryHELDServerURL
     *
     * @param string $secondaryHELDServerURL
     * @return $this
     */
    public function setSecondaryHELDServerURL($secondaryHELDServerURL)
    {
        $this->secondaryHELDServerURL = $secondaryHELDServerURL;
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
     * @return string
     */
    public function getEmergencyRouteNetAddress()
    {
        return $this->emergencyRouteNetAddress instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->emergencyRouteNetAddress;
    }

    /**
     * Setter for emergencyRouteNetAddress
     *
     * @param string $emergencyRouteNetAddress
     * @return $this
     */
    public function setEmergencyRouteNetAddress($emergencyRouteNetAddress)
    {
        $this->emergencyRouteNetAddress = $emergencyRouteNetAddress;
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
     * @return int
     */
    public function getEmergencyRoutePort()
    {
        return $this->emergencyRoutePort instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->emergencyRoutePort;
    }

    /**
     * Setter for emergencyRoutePort
     *
     * @param int $emergencyRoutePort
     * @return $this
     */
    public function setEmergencyRoutePort($emergencyRoutePort)
    {
        $this->emergencyRoutePort = $emergencyRoutePort;
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
     * @return \CWM\BroadWorksConnector\Ocip\Models\ExtendedTransportProtocol
     */
    public function getEmergencyRouteTransport()
    {
        return $this->emergencyRouteTransport instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->emergencyRouteTransport;
    }

    /**
     * Setter for emergencyRouteTransport
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\ExtendedTransportProtocol $emergencyRouteTransport
     * @return $this
     */
    public function setEmergencyRouteTransport(\CWM\BroadWorksConnector\Ocip\Models\ExtendedTransportProtocol $emergencyRouteTransport)
    {
        $this->emergencyRouteTransport = $emergencyRouteTransport;
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

