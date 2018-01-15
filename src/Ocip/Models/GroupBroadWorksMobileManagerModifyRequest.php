<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupBroadWorksMobileManagerModifyRequest
 *
 * Modify the BroadWorks Mobile Manager settings.
 *         The response is either SuccessResponse or ErrorResponse.
 */
class GroupBroadWorksMobileManagerModifyRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName serviceProviderId
     * @var string|null
     */
    private $serviceProviderId = null;

    /**
     * @ElementName groupId
     * @var string|null
     */
    private $groupId = null;

    /**
     * @ElementName informationFile
     * @var string|null
     */
    private $informationFile = null;

    /**
     * @ElementName certificateFile
     * @var string|null
     */
    private $certificateFile = null;

    /**
     * @ElementName localToCarrier
     * @var bool|null
     */
    private $localToCarrier = null;

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
     * Getter for serviceProviderId
     *
     * @ElementName serviceProviderId
     * @return string|null
     */
    public function getServiceProviderId()
    {
        return $this->serviceProviderId;
    }

    /**
     * Setter for serviceProviderId
     *
     * @ElementName serviceProviderId
     * @param string|null $serviceProviderId
     * @return $this
     */
    public function setServiceProviderId($serviceProviderId)
    {
        $this->serviceProviderId = $serviceProviderId;
        return $this;
    }

    /**
     * Getter for groupId
     *
     * @ElementName groupId
     * @return string|null
     */
    public function getGroupId()
    {
        return $this->groupId;
    }

    /**
     * Setter for groupId
     *
     * @ElementName groupId
     * @param string|null $groupId
     * @return $this
     */
    public function setGroupId($groupId)
    {
        $this->groupId = $groupId;
        return $this;
    }

    /**
     * Getter for informationFile
     *
     * @ElementName informationFile
     * @return string|null
     */
    public function getInformationFile()
    {
        return $this->informationFile;
    }

    /**
     * Setter for informationFile
     *
     * @ElementName informationFile
     * @param string|null $informationFile
     * @return $this
     */
    public function setInformationFile($informationFile)
    {
        $this->informationFile = $informationFile;
        return $this;
    }

    /**
     * Getter for certificateFile
     *
     * @ElementName certificateFile
     * @return string|null
     */
    public function getCertificateFile()
    {
        return $this->certificateFile;
    }

    /**
     * Setter for certificateFile
     *
     * @ElementName certificateFile
     * @param string|null $certificateFile
     * @return $this
     */
    public function setCertificateFile($certificateFile)
    {
        $this->certificateFile = $certificateFile;
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

