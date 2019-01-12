<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemBroadWorksMobilityModifyRequest
 *
 * Modify the BroadWorks Mobility system parameters.
 *         The response is either a SuccessResponse or an ErrorResponse.
 *         
 *         Replaced by: SystemBroadWorksMobilityModifyRequest17sp4.
 *
 * @see SuccessResponse
 * @see ErrorResponse
 * @see SystemBroadWorksMobilityModifyRequest17sp4
 * @Groups [{"id":"ab0042aa512abc10edb3c55e4b416b0b:20410","type":"sequence"}]
 */
class SystemBroadWorksMobilityModifyRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName enableLocationServices
     * @Type bool
     * @Optional
     * @Group ab0042aa512abc10edb3c55e4b416b0b:20410
     * @var bool|null
     */
    private $enableLocationServices = null;

    /**
     * @ElementName enableMSRNLookup
     * @Type bool
     * @Optional
     * @Group ab0042aa512abc10edb3c55e4b416b0b:20410
     * @var bool|null
     */
    private $enableMSRNLookup = null;

    /**
     * @ElementName enableMobileStateChecking
     * @Type bool
     * @Optional
     * @Group ab0042aa512abc10edb3c55e4b416b0b:20410
     * @var bool|null
     */
    private $enableMobileStateChecking = null;

    /**
     * @ElementName denyCallOriginations
     * @Type bool
     * @Optional
     * @Group ab0042aa512abc10edb3c55e4b416b0b:20410
     * @var bool|null
     */
    private $denyCallOriginations = null;

    /**
     * @ElementName denyCallTerminations
     * @Type bool
     * @Optional
     * @Group ab0042aa512abc10edb3c55e4b416b0b:20410
     * @var bool|null
     */
    private $denyCallTerminations = null;

    /**
     * @ElementName imrnTimeoutMilliseconds
     * @Type int
     * @Optional
     * @Group ab0042aa512abc10edb3c55e4b416b0b:20410
     * @var int|null
     */
    private $imrnTimeoutMilliseconds = null;

    /**
     * @ElementName scfSignalingIPAddress
     * @Type string
     * @Nillable
     * @Optional
     * @Group ab0042aa512abc10edb3c55e4b416b0b:20410
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $scfSignalingIPAddress = null;

    /**
     * @ElementName scfSignalingPort
     * @Type int
     * @Nillable
     * @Optional
     * @Group ab0042aa512abc10edb3c55e4b416b0b:20410
     * @var int|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $scfSignalingPort = null;

    /**
     * Getter for enableLocationServices
     *
     * @return bool
     */
    public function getEnableLocationServices()
    {
        return $this->enableLocationServices instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->enableLocationServices;
    }

    /**
     * Setter for enableLocationServices
     *
     * @param bool $enableLocationServices
     * @return $this
     */
    public function setEnableLocationServices($enableLocationServices)
    {
        $this->enableLocationServices = $enableLocationServices;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetEnableLocationServices()
    {
        $this->enableLocationServices = null;
        return $this;
    }

    /**
     * Getter for enableMSRNLookup
     *
     * @return bool
     */
    public function getEnableMSRNLookup()
    {
        return $this->enableMSRNLookup instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->enableMSRNLookup;
    }

    /**
     * Setter for enableMSRNLookup
     *
     * @param bool $enableMSRNLookup
     * @return $this
     */
    public function setEnableMSRNLookup($enableMSRNLookup)
    {
        $this->enableMSRNLookup = $enableMSRNLookup;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetEnableMSRNLookup()
    {
        $this->enableMSRNLookup = null;
        return $this;
    }

    /**
     * Getter for enableMobileStateChecking
     *
     * @return bool
     */
    public function getEnableMobileStateChecking()
    {
        return $this->enableMobileStateChecking instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->enableMobileStateChecking;
    }

    /**
     * Setter for enableMobileStateChecking
     *
     * @param bool $enableMobileStateChecking
     * @return $this
     */
    public function setEnableMobileStateChecking($enableMobileStateChecking)
    {
        $this->enableMobileStateChecking = $enableMobileStateChecking;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetEnableMobileStateChecking()
    {
        $this->enableMobileStateChecking = null;
        return $this;
    }

    /**
     * Getter for denyCallOriginations
     *
     * @return bool
     */
    public function getDenyCallOriginations()
    {
        return $this->denyCallOriginations instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->denyCallOriginations;
    }

    /**
     * Setter for denyCallOriginations
     *
     * @param bool $denyCallOriginations
     * @return $this
     */
    public function setDenyCallOriginations($denyCallOriginations)
    {
        $this->denyCallOriginations = $denyCallOriginations;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetDenyCallOriginations()
    {
        $this->denyCallOriginations = null;
        return $this;
    }

    /**
     * Getter for denyCallTerminations
     *
     * @return bool
     */
    public function getDenyCallTerminations()
    {
        return $this->denyCallTerminations instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->denyCallTerminations;
    }

    /**
     * Setter for denyCallTerminations
     *
     * @param bool $denyCallTerminations
     * @return $this
     */
    public function setDenyCallTerminations($denyCallTerminations)
    {
        $this->denyCallTerminations = $denyCallTerminations;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetDenyCallTerminations()
    {
        $this->denyCallTerminations = null;
        return $this;
    }

    /**
     * Getter for imrnTimeoutMilliseconds
     *
     * @return int
     */
    public function getImrnTimeoutMilliseconds()
    {
        return $this->imrnTimeoutMilliseconds instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->imrnTimeoutMilliseconds;
    }

    /**
     * Setter for imrnTimeoutMilliseconds
     *
     * @param int $imrnTimeoutMilliseconds
     * @return $this
     */
    public function setImrnTimeoutMilliseconds($imrnTimeoutMilliseconds)
    {
        $this->imrnTimeoutMilliseconds = $imrnTimeoutMilliseconds;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetImrnTimeoutMilliseconds()
    {
        $this->imrnTimeoutMilliseconds = null;
        return $this;
    }

    /**
     * Getter for scfSignalingIPAddress
     *
     * @return string|null
     */
    public function getScfSignalingIPAddress()
    {
        return $this->scfSignalingIPAddress instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->scfSignalingIPAddress;
    }

    /**
     * Setter for scfSignalingIPAddress
     *
     * @param string|null $scfSignalingIPAddress
     * @return $this
     */
    public function setScfSignalingIPAddress($scfSignalingIPAddress)
    {
        if ($scfSignalingIPAddress === null) {
            $this->scfSignalingIPAddress = new \CWM\BroadWorksConnector\Ocip\Nil;
        } else {
            $this->scfSignalingIPAddress = $scfSignalingIPAddress;
        }
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetScfSignalingIPAddress()
    {
        $this->scfSignalingIPAddress = null;
        return $this;
    }

    /**
     * Getter for scfSignalingPort
     *
     * @return int|null
     */
    public function getScfSignalingPort()
    {
        return $this->scfSignalingPort instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->scfSignalingPort;
    }

    /**
     * Setter for scfSignalingPort
     *
     * @param int|null $scfSignalingPort
     * @return $this
     */
    public function setScfSignalingPort($scfSignalingPort)
    {
        if ($scfSignalingPort === null) {
            $this->scfSignalingPort = new \CWM\BroadWorksConnector\Ocip\Nil;
        } else {
            $this->scfSignalingPort = $scfSignalingPort;
        }
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetScfSignalingPort()
    {
        $this->scfSignalingPort = null;
        return $this;
    }


}

