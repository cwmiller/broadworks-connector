<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupBroadWorksMobileManagerGetResponse
 *
 * Response to the GroupBroadWorksMobileManagerGetRequest
 */
class GroupBroadWorksMobileManagerGetResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName mobileManagerId
     * @var string|null
     */
    private $mobileManagerId = null;

    /**
     * @ElementName name
     * @var string|null
     */
    private $name = null;

    /**
     * @ElementName isActive
     * @var bool|null
     */
    private $isActive = null;

    /**
     * @ElementName localToCarrier
     * @var bool|null
     */
    private $localToCarrier = null;

    /**
     * @ElementName deactivationReason
     * @var string|null
     */
    private $deactivationReason = null;

    /**
     * @ElementName maxTxPerSecondEnabled
     * @var bool|null
     */
    private $maxTxPerSecondEnabled = null;

    /**
     * @ElementName maxTxPerSecond
     * @var int|null
     */
    private $maxTxPerSecond = null;

    /**
     * @ElementName tldnEnabled
     * @var bool|null
     */
    private $tldnEnabled = null;

    /**
     * @ElementName genericNumberEnabled
     * @var bool|null
     */
    private $genericNumberEnabled = null;

    /**
     * @ElementName mobileStateCheckEnabled
     * @var bool|null
     */
    private $mobileStateCheckEnabled = null;

    /**
     * @ElementName locationBasedServicesEnabled
     * @var bool|null
     */
    private $locationBasedServicesEnabled = null;

    /**
     * Getter for mobileManagerId
     *
     * @ElementName mobileManagerId
     * @return string|null
     */
    public function getMobileManagerId()
    {
        return $this->mobileManagerId;
    }

    /**
     * Setter for mobileManagerId
     *
     * @ElementName mobileManagerId
     * @param string|null $mobileManagerId
     * @return $this
     */
    public function setMobileManagerId($mobileManagerId)
    {
        $this->mobileManagerId = $mobileManagerId;
        return $this;
    }

    /**
     * Getter for name
     *
     * @ElementName name
     * @return string|null
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Setter for name
     *
     * @ElementName name
     * @param string|null $name
     * @return $this
     */
    public function setName($name)
    {
        $this->name = $name;
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
     * Getter for localToCarrier
     *
     * @ElementName localToCarrier
     * @return bool|null
     */
    public function getLocalToCarrier()
    {
        return $this->localToCarrier;
    }

    /**
     * Setter for localToCarrier
     *
     * @ElementName localToCarrier
     * @param bool|null $localToCarrier
     * @return $this
     */
    public function setLocalToCarrier($localToCarrier)
    {
        $this->localToCarrier = $localToCarrier;
        return $this;
    }

    /**
     * Getter for deactivationReason
     *
     * @ElementName deactivationReason
     * @return string|null
     */
    public function getDeactivationReason()
    {
        return $this->deactivationReason;
    }

    /**
     * Setter for deactivationReason
     *
     * @ElementName deactivationReason
     * @param string|null $deactivationReason
     * @return $this
     */
    public function setDeactivationReason($deactivationReason)
    {
        $this->deactivationReason = $deactivationReason;
        return $this;
    }

    /**
     * Getter for maxTxPerSecondEnabled
     *
     * @ElementName maxTxPerSecondEnabled
     * @return bool|null
     */
    public function getMaxTxPerSecondEnabled()
    {
        return $this->maxTxPerSecondEnabled;
    }

    /**
     * Setter for maxTxPerSecondEnabled
     *
     * @ElementName maxTxPerSecondEnabled
     * @param bool|null $maxTxPerSecondEnabled
     * @return $this
     */
    public function setMaxTxPerSecondEnabled($maxTxPerSecondEnabled)
    {
        $this->maxTxPerSecondEnabled = $maxTxPerSecondEnabled;
        return $this;
    }

    /**
     * Getter for maxTxPerSecond
     *
     * @ElementName maxTxPerSecond
     * @return int|null
     */
    public function getMaxTxPerSecond()
    {
        return $this->maxTxPerSecond;
    }

    /**
     * Setter for maxTxPerSecond
     *
     * @ElementName maxTxPerSecond
     * @param int|null $maxTxPerSecond
     * @return $this
     */
    public function setMaxTxPerSecond($maxTxPerSecond)
    {
        $this->maxTxPerSecond = $maxTxPerSecond;
        return $this;
    }

    /**
     * Getter for tldnEnabled
     *
     * @ElementName tldnEnabled
     * @return bool|null
     */
    public function getTldnEnabled()
    {
        return $this->tldnEnabled;
    }

    /**
     * Setter for tldnEnabled
     *
     * @ElementName tldnEnabled
     * @param bool|null $tldnEnabled
     * @return $this
     */
    public function setTldnEnabled($tldnEnabled)
    {
        $this->tldnEnabled = $tldnEnabled;
        return $this;
    }

    /**
     * Getter for genericNumberEnabled
     *
     * @ElementName genericNumberEnabled
     * @return bool|null
     */
    public function getGenericNumberEnabled()
    {
        return $this->genericNumberEnabled;
    }

    /**
     * Setter for genericNumberEnabled
     *
     * @ElementName genericNumberEnabled
     * @param bool|null $genericNumberEnabled
     * @return $this
     */
    public function setGenericNumberEnabled($genericNumberEnabled)
    {
        $this->genericNumberEnabled = $genericNumberEnabled;
        return $this;
    }

    /**
     * Getter for mobileStateCheckEnabled
     *
     * @ElementName mobileStateCheckEnabled
     * @return bool|null
     */
    public function getMobileStateCheckEnabled()
    {
        return $this->mobileStateCheckEnabled;
    }

    /**
     * Setter for mobileStateCheckEnabled
     *
     * @ElementName mobileStateCheckEnabled
     * @param bool|null $mobileStateCheckEnabled
     * @return $this
     */
    public function setMobileStateCheckEnabled($mobileStateCheckEnabled)
    {
        $this->mobileStateCheckEnabled = $mobileStateCheckEnabled;
        return $this;
    }

    /**
     * Getter for locationBasedServicesEnabled
     *
     * @ElementName locationBasedServicesEnabled
     * @return bool|null
     */
    public function getLocationBasedServicesEnabled()
    {
        return $this->locationBasedServicesEnabled;
    }

    /**
     * Setter for locationBasedServicesEnabled
     *
     * @ElementName locationBasedServicesEnabled
     * @param bool|null $locationBasedServicesEnabled
     * @return $this
     */
    public function setLocationBasedServicesEnabled($locationBasedServicesEnabled)
    {
        $this->locationBasedServicesEnabled = $locationBasedServicesEnabled;
        return $this;
    }


}

