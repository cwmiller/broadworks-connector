<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupBroadWorksMobileManagerAddRequest
 *
 * Add the BroadWorks Mobile Manager.
 *         Only one BroadWorks Mobile Manager can be added per group.
 *         The response is either SuccessResponse or ErrorResponse.
 *
 * @see SuccessResponse
 * @see ErrorResponse
 * @Groups [{"id":"f3a93cf15de4abd7903673e44ee3e07b:2235","type":"sequence"}]
 */
class GroupBroadWorksMobileManagerAddRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName serviceProviderId
     * @Type string
     * @Group f3a93cf15de4abd7903673e44ee3e07b:2235
     * @MinLength 1
     * @MaxLength 30
     * @var string|null
     */
    protected $serviceProviderId = null;

    /**
     * @ElementName groupId
     * @Type string
     * @Group f3a93cf15de4abd7903673e44ee3e07b:2235
     * @MinLength 1
     * @MaxLength 30
     * @var string|null
     */
    protected $groupId = null;

    /**
     * @ElementName informationFile
     * @Type string
     * @Group f3a93cf15de4abd7903673e44ee3e07b:2235
     * @MinLength 1
     * @var string|null
     */
    protected $informationFile = null;

    /**
     * @ElementName certificateFile
     * @Type string
     * @Group f3a93cf15de4abd7903673e44ee3e07b:2235
     * @MinLength 1
     * @var string|null
     */
    protected $certificateFile = null;

    /**
     * @ElementName isActive
     * @Type bool
     * @Group f3a93cf15de4abd7903673e44ee3e07b:2235
     * @var bool|null
     */
    protected $isActive = null;

    /**
     * @ElementName localToCarrier
     * @Type bool
     * @Group f3a93cf15de4abd7903673e44ee3e07b:2235
     * @var bool|null
     */
    protected $localToCarrier = null;

    /**
     * @ElementName maxTxPerSecondEnabled
     * @Type bool
     * @Group f3a93cf15de4abd7903673e44ee3e07b:2235
     * @var bool|null
     */
    protected $maxTxPerSecondEnabled = null;

    /**
     * @ElementName maxTxPerSecond
     * @Type int
     * @Optional
     * @Group f3a93cf15de4abd7903673e44ee3e07b:2235
     * @MinInclusive 1
     * @MaxInclusive 1000
     * @var int|null
     */
    protected $maxTxPerSecond = null;

    /**
     * @ElementName tldnEnabled
     * @Type bool
     * @Group f3a93cf15de4abd7903673e44ee3e07b:2235
     * @var bool|null
     */
    protected $tldnEnabled = null;

    /**
     * @ElementName genericNumberEnabled
     * @Type bool
     * @Group f3a93cf15de4abd7903673e44ee3e07b:2235
     * @var bool|null
     */
    protected $genericNumberEnabled = null;

    /**
     * @ElementName mobileStateCheckEnabled
     * @Type bool
     * @Group f3a93cf15de4abd7903673e44ee3e07b:2235
     * @var bool|null
     */
    protected $mobileStateCheckEnabled = null;

    /**
     * @ElementName locationBasedServicesEnabled
     * @Type bool
     * @Group f3a93cf15de4abd7903673e44ee3e07b:2235
     * @var bool|null
     */
    protected $locationBasedServicesEnabled = null;

    /**
     * Getter for serviceProviderId
     *
     * @return string
     */
    public function getServiceProviderId()
    {
        return $this->serviceProviderId instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->serviceProviderId;
    }

    /**
     * Setter for serviceProviderId
     *
     * @param string $serviceProviderId
     * @return $this
     */
    public function setServiceProviderId($serviceProviderId)
    {
        $this->serviceProviderId = $serviceProviderId;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetServiceProviderId()
    {
        $this->serviceProviderId = null;
        return $this;
    }

    /**
     * Getter for groupId
     *
     * @return string
     */
    public function getGroupId()
    {
        return $this->groupId instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->groupId;
    }

    /**
     * Setter for groupId
     *
     * @param string $groupId
     * @return $this
     */
    public function setGroupId($groupId)
    {
        $this->groupId = $groupId;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetGroupId()
    {
        $this->groupId = null;
        return $this;
    }

    /**
     * Getter for informationFile
     *
     * @return string
     */
    public function getInformationFile()
    {
        return $this->informationFile instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->informationFile;
    }

    /**
     * Setter for informationFile
     *
     * @param string $informationFile
     * @return $this
     */
    public function setInformationFile($informationFile)
    {
        $this->informationFile = $informationFile;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetInformationFile()
    {
        $this->informationFile = null;
        return $this;
    }

    /**
     * Getter for certificateFile
     *
     * @return string
     */
    public function getCertificateFile()
    {
        return $this->certificateFile instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->certificateFile;
    }

    /**
     * Setter for certificateFile
     *
     * @param string $certificateFile
     * @return $this
     */
    public function setCertificateFile($certificateFile)
    {
        $this->certificateFile = $certificateFile;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetCertificateFile()
    {
        $this->certificateFile = null;
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

