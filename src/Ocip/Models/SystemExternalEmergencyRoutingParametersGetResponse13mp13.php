<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemExternalEmergencyRoutingParametersGetResponse13mp13
 *
 * Response to SystemExternalEmergencyRoutingParametersGetRequest13mp13.
 *         Contains a list of system External Emergency Routing parameters.
 *
 * @see SystemExternalEmergencyRoutingParametersGetRequest13mp13
 * @Groups [{"id":"7f663d5135470c33ca64b0eed3c3aa0c:10122","type":"sequence"}]
 */
class SystemExternalEmergencyRoutingParametersGetResponse13mp13 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName serviceURI
     * @Type string
     * @Optional
     * @Group 7f663d5135470c33ca64b0eed3c3aa0c:10122
     * @MinLength 1
     * @MaxLength 80
     * @var string|null
     */
    protected $serviceURI = null;

    /**
     * @ElementName defaultEmergencyNumber
     * @Type string
     * @Optional
     * @Group 7f663d5135470c33ca64b0eed3c3aa0c:10122
     * @MinLength 1
     * @MaxLength 30
     * @var string|null
     */
    protected $defaultEmergencyNumber = null;

    /**
     * @ElementName isActive
     * @Type bool
     * @Group 7f663d5135470c33ca64b0eed3c3aa0c:10122
     * @var bool|null
     */
    protected $isActive = null;

    /**
     * @ElementName supportsDNSSRV
     * @Type bool
     * @Group 7f663d5135470c33ca64b0eed3c3aa0c:10122
     * @var bool|null
     */
    protected $supportsDNSSRV = null;

    /**
     * @ElementName connectionTimeoutSeconds
     * @Type int
     * @Group 7f663d5135470c33ca64b0eed3c3aa0c:10122
     * @MinInclusive 1
     * @MaxInclusive 10
     * @var int|null
     */
    protected $connectionTimeoutSeconds = null;

    /**
     * Getter for serviceURI
     *
     * @return string
     */
    public function getServiceURI()
    {
        return $this->serviceURI instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->serviceURI;
    }

    /**
     * Setter for serviceURI
     *
     * @param string $serviceURI
     * @return $this
     */
    public function setServiceURI($serviceURI)
    {
        $this->serviceURI = $serviceURI;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetServiceURI()
    {
        $this->serviceURI = null;
        return $this;
    }

    /**
     * Getter for defaultEmergencyNumber
     *
     * @return string
     */
    public function getDefaultEmergencyNumber()
    {
        return $this->defaultEmergencyNumber instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->defaultEmergencyNumber;
    }

    /**
     * Setter for defaultEmergencyNumber
     *
     * @param string $defaultEmergencyNumber
     * @return $this
     */
    public function setDefaultEmergencyNumber($defaultEmergencyNumber)
    {
        $this->defaultEmergencyNumber = $defaultEmergencyNumber;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetDefaultEmergencyNumber()
    {
        $this->defaultEmergencyNumber = null;
        return $this;
    }

    /**
     * Getter for isActive
     *
     * @return bool
     */
    public function getIsActive()
    {
        return $this->isActive instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->isActive;
    }

    /**
     * Setter for isActive
     *
     * @param bool $isActive
     * @return $this
     */
    public function setIsActive($isActive)
    {
        $this->isActive = $isActive;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetIsActive()
    {
        $this->isActive = null;
        return $this;
    }

    /**
     * Getter for supportsDNSSRV
     *
     * @return bool
     */
    public function getSupportsDNSSRV()
    {
        return $this->supportsDNSSRV instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->supportsDNSSRV;
    }

    /**
     * Setter for supportsDNSSRV
     *
     * @param bool $supportsDNSSRV
     * @return $this
     */
    public function setSupportsDNSSRV($supportsDNSSRV)
    {
        $this->supportsDNSSRV = $supportsDNSSRV;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetSupportsDNSSRV()
    {
        $this->supportsDNSSRV = null;
        return $this;
    }

    /**
     * Getter for connectionTimeoutSeconds
     *
     * @return int
     */
    public function getConnectionTimeoutSeconds()
    {
        return $this->connectionTimeoutSeconds instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->connectionTimeoutSeconds;
    }

    /**
     * Setter for connectionTimeoutSeconds
     *
     * @param int $connectionTimeoutSeconds
     * @return $this
     */
    public function setConnectionTimeoutSeconds($connectionTimeoutSeconds)
    {
        $this->connectionTimeoutSeconds = $connectionTimeoutSeconds;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetConnectionTimeoutSeconds()
    {
        $this->connectionTimeoutSeconds = null;
        return $this;
    }


}

