<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemExternalEmergencyRoutingParametersGetResponse13mp13
 *
 * Response to SystemExternalEmergencyRoutingParametersGetRequest13mp13.
 *         Contains a list of system External Emergency Routing parameters.
 *
 * @see SystemExternalEmergencyRoutingParametersGetRequest13
 */
class SystemExternalEmergencyRoutingParametersGetResponse13mp13 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName serviceURI
     * @var string|null
     */
    private $serviceURI = null;

    /**
     * @ElementName defaultEmergencyNumber
     * @var string|null
     */
    private $defaultEmergencyNumber = null;

    /**
     * @ElementName isActive
     * @var bool|null
     */
    private $isActive = null;

    /**
     * @ElementName supportsDNSSRV
     * @var bool|null
     */
    private $supportsDNSSRV = null;

    /**
     * @ElementName connectionTimeoutSeconds
     * @var int|null
     */
    private $connectionTimeoutSeconds = null;

    /**
     * Getter for serviceURI
     *
     * @ElementName serviceURI
     * @return string|null
     */
    public function getServiceURI()
    {
        return $this->serviceURI;
    }

    /**
     * Setter for serviceURI
     *
     * @ElementName serviceURI
     * @param string|null $serviceURI
     * @return $this
     */
    public function setServiceURI($serviceURI)
    {
        $this->serviceURI = $serviceURI;
        return $this;
    }

    /**
     * Getter for defaultEmergencyNumber
     *
     * @ElementName defaultEmergencyNumber
     * @return string|null
     */
    public function getDefaultEmergencyNumber()
    {
        return $this->defaultEmergencyNumber;
    }

    /**
     * Setter for defaultEmergencyNumber
     *
     * @ElementName defaultEmergencyNumber
     * @param string|null $defaultEmergencyNumber
     * @return $this
     */
    public function setDefaultEmergencyNumber($defaultEmergencyNumber)
    {
        $this->defaultEmergencyNumber = $defaultEmergencyNumber;
        return $this;
    }

    /**
     * Getter for isActive
     *
     * @ElementName isActive
     * @return bool|null
     */
    public function getIsActive()
    {
        return $this->isActive;
    }

    /**
     * Setter for isActive
     *
     * @ElementName isActive
     * @param bool|null $isActive
     * @return $this
     */
    public function setIsActive($isActive)
    {
        $this->isActive = $isActive;
        return $this;
    }

    /**
     * Getter for supportsDNSSRV
     *
     * @ElementName supportsDNSSRV
     * @return bool|null
     */
    public function getSupportsDNSSRV()
    {
        return $this->supportsDNSSRV;
    }

    /**
     * Setter for supportsDNSSRV
     *
     * @ElementName supportsDNSSRV
     * @param bool|null $supportsDNSSRV
     * @return $this
     */
    public function setSupportsDNSSRV($supportsDNSSRV)
    {
        $this->supportsDNSSRV = $supportsDNSSRV;
        return $this;
    }

    /**
     * Getter for connectionTimeoutSeconds
     *
     * @ElementName connectionTimeoutSeconds
     * @return int|null
     */
    public function getConnectionTimeoutSeconds()
    {
        return $this->connectionTimeoutSeconds;
    }

    /**
     * Setter for connectionTimeoutSeconds
     *
     * @ElementName connectionTimeoutSeconds
     * @param int|null $connectionTimeoutSeconds
     * @return $this
     */
    public function setConnectionTimeoutSeconds($connectionTimeoutSeconds)
    {
        $this->connectionTimeoutSeconds = $connectionTimeoutSeconds;
        return $this;
    }


}

