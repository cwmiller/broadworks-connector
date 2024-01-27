<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemDeviceManagementSwitchDeviceTypeDeviceRequest
 *
 * Switch the device type for a specified device.
 *         To switch a system level device profile, serviceProviderId and groupId should not be present.
 *         To switch a service provider level device profile, only serviceProviderId should be specified.
 *         To switch a group level device profile, serviceProviderId and groupId should specified.
 *         The response is either a SuccessResponse or an ErrorResponse.
 *
 * @see SuccessResponse
 * @see ErrorResponse
 * @Groups [{"id":"da582a1f8028404e70d260cf1f891033:8017","type":"sequence","children":[{"id":"da582a1f8028404e70d260cf1f891033:8018","type":"choice","optional":true,"children":[{"id":"da582a1f8028404e70d260cf1f891033:8020","type":"sequence"}]}]}]
 */
class SystemDeviceManagementSwitchDeviceTypeDeviceRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{
    /**
     * @ElementName serviceProviderId
     * @Type string
     * @Group da582a1f8028404e70d260cf1f891033:8018
     * @MinLength 1
     * @MaxLength 30
     * @var string|null
     */
    protected $serviceProviderId = null;

    /**
     * @ElementName svcProviderId
     * @Type string
     * @Group da582a1f8028404e70d260cf1f891033:8020
     * @MinLength 1
     * @MaxLength 30
     * @var string|null
     */
    protected $svcProviderId = null;

    /**
     * @ElementName groupId
     * @Type string
     * @Group da582a1f8028404e70d260cf1f891033:8020
     * @MinLength 1
     * @MaxLength 30
     * @var string|null
     */
    protected $groupId = null;

    /**
     * @ElementName deviceName
     * @Type string
     * @Group da582a1f8028404e70d260cf1f891033:8017
     * @MinLength 1
     * @MaxLength 40
     * @var string|null
     */
    protected $deviceName = null;

    /**
     * @ElementName toDeviceType
     * @Type string
     * @Group da582a1f8028404e70d260cf1f891033:8017
     * @MinLength 1
     * @MaxLength 40
     * @var string|null
     */
    protected $toDeviceType = null;

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
     * Getter for svcProviderId
     *
     * @return string
     */
    public function getSvcProviderId()
    {
        return $this->svcProviderId instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->svcProviderId;
    }

    /**
     * Setter for svcProviderId
     *
     * @param string $svcProviderId
     * @return $this
     */
    public function setSvcProviderId($svcProviderId)
    {
        $this->svcProviderId = $svcProviderId;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetSvcProviderId()
    {
        $this->svcProviderId = null;
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
     * Getter for deviceName
     *
     * @return string
     */
    public function getDeviceName()
    {
        return $this->deviceName instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->deviceName;
    }

    /**
     * Setter for deviceName
     *
     * @param string $deviceName
     * @return $this
     */
    public function setDeviceName($deviceName)
    {
        $this->deviceName = $deviceName;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetDeviceName()
    {
        $this->deviceName = null;
        return $this;
    }

    /**
     * Getter for toDeviceType
     *
     * @return string
     */
    public function getToDeviceType()
    {
        return $this->toDeviceType instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->toDeviceType;
    }

    /**
     * Setter for toDeviceType
     *
     * @param string $toDeviceType
     * @return $this
     */
    public function setToDeviceType($toDeviceType)
    {
        $this->toDeviceType = $toDeviceType;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetToDeviceType()
    {
        $this->toDeviceType = null;
        return $this;
    }
}

