<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemBroadWorksMobilityModifyRequest
 *
 * Modify the BroadWorks Mobility system parameters.
 *         The response is either a SuccessResponse or an ErrorResponse.
 *         
 *         Replaced by: SystemBroadWorksMobilityModifyRequest17sp4.
 */
class SystemBroadWorksMobilityModifyRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName enableLocationServices
     * @var bool|null
     */
    private $enableLocationServices = null;

    /**
     * @ElementName enableMSRNLookup
     * @var bool|null
     */
    private $enableMSRNLookup = null;

    /**
     * @ElementName enableMobileStateChecking
     * @var bool|null
     */
    private $enableMobileStateChecking = null;

    /**
     * @ElementName denyCallOriginations
     * @var bool|null
     */
    private $denyCallOriginations = null;

    /**
     * @ElementName denyCallTerminations
     * @var bool|null
     */
    private $denyCallTerminations = null;

    /**
     * @ElementName imrnTimeoutMilliseconds
     * @var int|null
     */
    private $imrnTimeoutMilliseconds = null;

    /**
     * @ElementName scfSignalingIPAddress
     * @var string|null
     */
    private $scfSignalingIPAddress = null;

    /**
     * @ElementName scfSignalingPort
     * @var int|null
     */
    private $scfSignalingPort = null;

    /**
     * Getter for enableLocationServices
     *
     * @ElementName enableLocationServices
     * @return bool|null
     */
    public function getEnableLocationServices()
    {
        return $this->enableLocationServices;
    }

    /**
     * Setter for enableLocationServices
     *
     * @ElementName enableLocationServices
     * @param bool|null $enableLocationServices
     * @return $this
     */
    public function setEnableLocationServices($enableLocationServices)
    {
        $this->enableLocationServices = $enableLocationServices;
        return $this;
    }

    /**
     * Getter for enableMSRNLookup
     *
     * @ElementName enableMSRNLookup
     * @return bool|null
     */
    public function getEnableMSRNLookup()
    {
        return $this->enableMSRNLookup;
    }

    /**
     * Setter for enableMSRNLookup
     *
     * @ElementName enableMSRNLookup
     * @param bool|null $enableMSRNLookup
     * @return $this
     */
    public function setEnableMSRNLookup($enableMSRNLookup)
    {
        $this->enableMSRNLookup = $enableMSRNLookup;
        return $this;
    }

    /**
     * Getter for enableMobileStateChecking
     *
     * @ElementName enableMobileStateChecking
     * @return bool|null
     */
    public function getEnableMobileStateChecking()
    {
        return $this->enableMobileStateChecking;
    }

    /**
     * Setter for enableMobileStateChecking
     *
     * @ElementName enableMobileStateChecking
     * @param bool|null $enableMobileStateChecking
     * @return $this
     */
    public function setEnableMobileStateChecking($enableMobileStateChecking)
    {
        $this->enableMobileStateChecking = $enableMobileStateChecking;
        return $this;
    }

    /**
     * Getter for denyCallOriginations
     *
     * @ElementName denyCallOriginations
     * @return bool|null
     */
    public function getDenyCallOriginations()
    {
        return $this->denyCallOriginations;
    }

    /**
     * Setter for denyCallOriginations
     *
     * @ElementName denyCallOriginations
     * @param bool|null $denyCallOriginations
     * @return $this
     */
    public function setDenyCallOriginations($denyCallOriginations)
    {
        $this->denyCallOriginations = $denyCallOriginations;
        return $this;
    }

    /**
     * Getter for denyCallTerminations
     *
     * @ElementName denyCallTerminations
     * @return bool|null
     */
    public function getDenyCallTerminations()
    {
        return $this->denyCallTerminations;
    }

    /**
     * Setter for denyCallTerminations
     *
     * @ElementName denyCallTerminations
     * @param bool|null $denyCallTerminations
     * @return $this
     */
    public function setDenyCallTerminations($denyCallTerminations)
    {
        $this->denyCallTerminations = $denyCallTerminations;
        return $this;
    }

    /**
     * Getter for imrnTimeoutMilliseconds
     *
     * @ElementName imrnTimeoutMilliseconds
     * @return int|null
     */
    public function getImrnTimeoutMilliseconds()
    {
        return $this->imrnTimeoutMilliseconds;
    }

    /**
     * Setter for imrnTimeoutMilliseconds
     *
     * @ElementName imrnTimeoutMilliseconds
     * @param int|null $imrnTimeoutMilliseconds
     * @return $this
     */
    public function setImrnTimeoutMilliseconds($imrnTimeoutMilliseconds)
    {
        $this->imrnTimeoutMilliseconds = $imrnTimeoutMilliseconds;
        return $this;
    }

    /**
     * Getter for scfSignalingIPAddress
     *
     * @ElementName scfSignalingIPAddress
     * @return string|null
     */
    public function getScfSignalingIPAddress()
    {
        return $this->scfSignalingIPAddress;
    }

    /**
     * Setter for scfSignalingIPAddress
     *
     * @ElementName scfSignalingIPAddress
     * @param string|null $scfSignalingIPAddress
     * @return $this
     */
    public function setScfSignalingIPAddress($scfSignalingIPAddress)
    {
        $this->scfSignalingIPAddress = $scfSignalingIPAddress;
        return $this;
    }

    /**
     * Getter for scfSignalingPort
     *
     * @ElementName scfSignalingPort
     * @return int|null
     */
    public function getScfSignalingPort()
    {
        return $this->scfSignalingPort;
    }

    /**
     * Setter for scfSignalingPort
     *
     * @ElementName scfSignalingPort
     * @param int|null $scfSignalingPort
     * @return $this
     */
    public function setScfSignalingPort($scfSignalingPort)
    {
        $this->scfSignalingPort = $scfSignalingPort;
        return $this;
    }


}

