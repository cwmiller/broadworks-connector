<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupBroadWorksMobileManagerGetResponse
 *
 * Response to the GroupBroadWorksMobileManagerGetRequest
 *
 * @see GroupBroadWorksMobileManagerGetRequest
 * @Groups [{"id":"f3a93cf15de4abd7903673e44ee3e07b:2436","type":"sequence"}]
 */
class GroupBroadWorksMobileManagerGetResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName mobileManagerId
     * @Type string
     * @Group f3a93cf15de4abd7903673e44ee3e07b:2436
     * @MinLength 1
     * @MaxLength 100
     * @var string|null
     */
    protected $mobileManagerId = null;

    /**
     * @ElementName name
     * @Type string
     * @Group f3a93cf15de4abd7903673e44ee3e07b:2436
     * @MinLength 1
     * @MaxLength 45
     * @var string|null
     */
    protected $name = null;

    /**
     * @ElementName isActive
     * @Type bool
     * @Group f3a93cf15de4abd7903673e44ee3e07b:2436
     * @var bool|null
     */
    protected $isActive = null;

    /**
     * @ElementName localToCarrier
     * @Type bool
     * @Group f3a93cf15de4abd7903673e44ee3e07b:2436
     * @var bool|null
     */
    protected $localToCarrier = null;

    /**
     * @ElementName deactivationReason
     * @Type string
     * @Optional
     * @Group f3a93cf15de4abd7903673e44ee3e07b:2436
     * @MinLength 1
     * @MaxLength 100
     * @var string|null
     */
    protected $deactivationReason = null;

    /**
     * @ElementName maxTxPerSecondEnabled
     * @Type bool
     * @Group f3a93cf15de4abd7903673e44ee3e07b:2436
     * @var bool|null
     */
    protected $maxTxPerSecondEnabled = null;

    /**
     * @ElementName maxTxPerSecond
     * @Type int
     * @Optional
     * @Group f3a93cf15de4abd7903673e44ee3e07b:2436
     * @MinInclusive 1
     * @MaxInclusive 1000
     * @var int|null
     */
    protected $maxTxPerSecond = null;

    /**
     * @ElementName tldnEnabled
     * @Type bool
     * @Group f3a93cf15de4abd7903673e44ee3e07b:2436
     * @var bool|null
     */
    protected $tldnEnabled = null;

    /**
     * @ElementName genericNumberEnabled
     * @Type bool
     * @Group f3a93cf15de4abd7903673e44ee3e07b:2436
     * @var bool|null
     */
    protected $genericNumberEnabled = null;

    /**
     * @ElementName mobileStateCheckEnabled
     * @Type bool
     * @Group f3a93cf15de4abd7903673e44ee3e07b:2436
     * @var bool|null
     */
    protected $mobileStateCheckEnabled = null;

    /**
     * @ElementName locationBasedServicesEnabled
     * @Type bool
     * @Group f3a93cf15de4abd7903673e44ee3e07b:2436
     * @var bool|null
     */
    protected $locationBasedServicesEnabled = null;

    /**
     * Getter for mobileManagerId
     *
     * @return string
     */
    public function getMobileManagerId()
    {
        return $this->mobileManagerId instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->mobileManagerId;
    }

    /**
     * Setter for mobileManagerId
     *
     * @param string $mobileManagerId
     * @return $this
     */
    public function setMobileManagerId($mobileManagerId)
    {
        $this->mobileManagerId = $mobileManagerId;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetMobileManagerId()
    {
        $this->mobileManagerId = null;
        return $this;
    }

    /**
     * Getter for name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->name;
    }

    /**
     * Setter for name
     *
     * @param string $name
     * @return $this
     */
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetName()
    {
        $this->name = null;
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
     * Getter for localToCarrier
     *
     * @return bool
     */
    public function getLocalToCarrier()
    {
        return $this->localToCarrier instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->localToCarrier;
    }

    /**
     * Setter for localToCarrier
     *
     * @param bool $localToCarrier
     * @return $this
     */
    public function setLocalToCarrier($localToCarrier)
    {
        $this->localToCarrier = $localToCarrier;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetLocalToCarrier()
    {
        $this->localToCarrier = null;
        return $this;
    }

    /**
     * Getter for deactivationReason
     *
     * @return string
     */
    public function getDeactivationReason()
    {
        return $this->deactivationReason instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->deactivationReason;
    }

    /**
     * Setter for deactivationReason
     *
     * @param string $deactivationReason
     * @return $this
     */
    public function setDeactivationReason($deactivationReason)
    {
        $this->deactivationReason = $deactivationReason;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetDeactivationReason()
    {
        $this->deactivationReason = null;
        return $this;
    }

    /**
     * Getter for maxTxPerSecondEnabled
     *
     * @return bool
     */
    public function getMaxTxPerSecondEnabled()
    {
        return $this->maxTxPerSecondEnabled instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->maxTxPerSecondEnabled;
    }

    /**
     * Setter for maxTxPerSecondEnabled
     *
     * @param bool $maxTxPerSecondEnabled
     * @return $this
     */
    public function setMaxTxPerSecondEnabled($maxTxPerSecondEnabled)
    {
        $this->maxTxPerSecondEnabled = $maxTxPerSecondEnabled;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetMaxTxPerSecondEnabled()
    {
        $this->maxTxPerSecondEnabled = null;
        return $this;
    }

    /**
     * Getter for maxTxPerSecond
     *
     * @return int
     */
    public function getMaxTxPerSecond()
    {
        return $this->maxTxPerSecond instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->maxTxPerSecond;
    }

    /**
     * Setter for maxTxPerSecond
     *
     * @param int $maxTxPerSecond
     * @return $this
     */
    public function setMaxTxPerSecond($maxTxPerSecond)
    {
        $this->maxTxPerSecond = $maxTxPerSecond;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetMaxTxPerSecond()
    {
        $this->maxTxPerSecond = null;
        return $this;
    }

    /**
     * Getter for tldnEnabled
     *
     * @return bool
     */
    public function getTldnEnabled()
    {
        return $this->tldnEnabled instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->tldnEnabled;
    }

    /**
     * Setter for tldnEnabled
     *
     * @param bool $tldnEnabled
     * @return $this
     */
    public function setTldnEnabled($tldnEnabled)
    {
        $this->tldnEnabled = $tldnEnabled;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetTldnEnabled()
    {
        $this->tldnEnabled = null;
        return $this;
    }

    /**
     * Getter for genericNumberEnabled
     *
     * @return bool
     */
    public function getGenericNumberEnabled()
    {
        return $this->genericNumberEnabled instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->genericNumberEnabled;
    }

    /**
     * Setter for genericNumberEnabled
     *
     * @param bool $genericNumberEnabled
     * @return $this
     */
    public function setGenericNumberEnabled($genericNumberEnabled)
    {
        $this->genericNumberEnabled = $genericNumberEnabled;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetGenericNumberEnabled()
    {
        $this->genericNumberEnabled = null;
        return $this;
    }

    /**
     * Getter for mobileStateCheckEnabled
     *
     * @return bool
     */
    public function getMobileStateCheckEnabled()
    {
        return $this->mobileStateCheckEnabled instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->mobileStateCheckEnabled;
    }

    /**
     * Setter for mobileStateCheckEnabled
     *
     * @param bool $mobileStateCheckEnabled
     * @return $this
     */
    public function setMobileStateCheckEnabled($mobileStateCheckEnabled)
    {
        $this->mobileStateCheckEnabled = $mobileStateCheckEnabled;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetMobileStateCheckEnabled()
    {
        $this->mobileStateCheckEnabled = null;
        return $this;
    }

    /**
     * Getter for locationBasedServicesEnabled
     *
     * @return bool
     */
    public function getLocationBasedServicesEnabled()
    {
        return $this->locationBasedServicesEnabled instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->locationBasedServicesEnabled;
    }

    /**
     * Setter for locationBasedServicesEnabled
     *
     * @param bool $locationBasedServicesEnabled
     * @return $this
     */
    public function setLocationBasedServicesEnabled($locationBasedServicesEnabled)
    {
        $this->locationBasedServicesEnabled = $locationBasedServicesEnabled;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetLocationBasedServicesEnabled()
    {
        $this->locationBasedServicesEnabled = null;
        return $this;
    }


}

