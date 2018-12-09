<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemDeviceManagementSwitchDeviceTypeRequest
 *
 * Switch the device type for all devices at the specified scope for a device type.
 *         To switch all the device type's device profiles for the system, neither the serviceProviderId and groupId should be present.
 *         To switch all the device type's device profiles for a service provider, only serviceProviderId should be specified.
 *         To switch all the device type's device profiles for a group, serviceProviderId and groupId should specified.
 *         The response is either a SuccessResponse or an ErrorResponse.
 *
 * @see SuccessResponse
 * @see ErrorResponse
 * @Groups [{"id":"b5f5416d9e71f8e4246cda16c4723744:6806","type":"sequence","children":[{"id":"b5f5416d9e71f8e4246cda16c4723744:6807","type":"choice","optional":true,"children":[{"id":"b5f5416d9e71f8e4246cda16c4723744:6809","type":"sequence"}]}]}]
 */
class SystemDeviceManagementSwitchDeviceTypeRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName serviceProviderId
     * @Type string
     * @Group b5f5416d9e71f8e4246cda16c4723744:6807
     * @var string|null
     */
    private $serviceProviderId = null;

    /**
     * @ElementName svcProviderId
     * @Type string
     * @Group b5f5416d9e71f8e4246cda16c4723744:6809
     * @var string|null
     */
    private $svcProviderId = null;

    /**
     * @ElementName groupId
     * @Type string
     * @Group b5f5416d9e71f8e4246cda16c4723744:6809
     * @var string|null
     */
    private $groupId = null;

    /**
     * @ElementName fromDeviceType
     * @Type string
     * @Group b5f5416d9e71f8e4246cda16c4723744:6806
     * @var string|null
     */
    private $fromDeviceType = null;

    /**
     * @ElementName toDeviceType
     * @Type string
     * @Group b5f5416d9e71f8e4246cda16c4723744:6806
     * @var string|null
     */
    private $toDeviceType = null;

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
     * Getter for fromDeviceType
     *
     * @return string
     */
    public function getFromDeviceType()
    {
        return $this->fromDeviceType instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->fromDeviceType;
    }

    /**
     * Setter for fromDeviceType
     *
     * @param string $fromDeviceType
     * @return $this
     */
    public function setFromDeviceType($fromDeviceType)
    {
        $this->fromDeviceType = $fromDeviceType;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetFromDeviceType()
    {
        $this->fromDeviceType = null;
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

