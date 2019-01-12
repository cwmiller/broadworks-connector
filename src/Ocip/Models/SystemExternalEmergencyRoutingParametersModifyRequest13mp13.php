<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemExternalEmergencyRoutingParametersModifyRequest13mp13
 *
 * Request to modify Call External Emergency Routing system parameters.
 *         The response is either SuccessResponse or ErrorResponse.
 *
 * @see SuccessResponse
 * @see ErrorResponse
 * @Groups [{"id":"7f663d5135470c33ca64b0eed3c3aa0c:8733","type":"sequence"}]
 */
class SystemExternalEmergencyRoutingParametersModifyRequest13mp13 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName serviceURI
     * @Type string
     * @Nillable
     * @Optional
     * @Group 7f663d5135470c33ca64b0eed3c3aa0c:8733
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $serviceURI = null;

    /**
     * @ElementName defaultEmergencyNumber
     * @Type string
     * @Nillable
     * @Optional
     * @Group 7f663d5135470c33ca64b0eed3c3aa0c:8733
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $defaultEmergencyNumber = null;

    /**
     * @ElementName isActive
     * @Type bool
     * @Optional
     * @Group 7f663d5135470c33ca64b0eed3c3aa0c:8733
     * @var bool|null
     */
    private $isActive = null;

    /**
     * @ElementName supportsDNSSRV
     * @Type bool
     * @Optional
     * @Group 7f663d5135470c33ca64b0eed3c3aa0c:8733
     * @var bool|null
     */
    private $supportsDNSSRV = null;

    /**
     * @ElementName connectionTimeoutSeconds
     * @Type int
     * @Optional
     * @Group 7f663d5135470c33ca64b0eed3c3aa0c:8733
     * @var int|null
     */
    private $connectionTimeoutSeconds = null;

    /**
     * Getter for serviceURI
     *
     * @return string|null
     */
    public function getServiceURI()
    {
        return $this->serviceURI instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->serviceURI;
    }

    /**
     * Setter for serviceURI
     *
     * @param string|null $serviceURI
     * @return $this
     */
    public function setServiceURI($serviceURI)
    {
        if ($serviceURI === null) {
            $this->serviceURI = new \CWM\BroadWorksConnector\Ocip\Nil;
        } else {
            $this->serviceURI = $serviceURI;
        }
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
     * @return string|null
     */
    public function getDefaultEmergencyNumber()
    {
        return $this->defaultEmergencyNumber instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->defaultEmergencyNumber;
    }

    /**
     * Setter for defaultEmergencyNumber
     *
     * @param string|null $defaultEmergencyNumber
     * @return $this
     */
    public function setDefaultEmergencyNumber($defaultEmergencyNumber)
    {
        if ($defaultEmergencyNumber === null) {
            $this->defaultEmergencyNumber = new \CWM\BroadWorksConnector\Ocip\Nil;
        } else {
            $this->defaultEmergencyNumber = $defaultEmergencyNumber;
        }
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

