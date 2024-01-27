<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * ServiceProviderVisualDeviceManagementGetDeviceInfoResponse
 *
 * Response to ServiceProviderVisualDeviceManagementGetDeviceInfoRequest.
 *
 * @see ServiceProviderVisualDeviceManagementGetDeviceInfoRequest
 * @Groups [{"id":"e19a9072c2dad499e9f28837da5768db:7103","type":"sequence"}]
 */
class ServiceProviderVisualDeviceManagementGetDeviceInfoResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{
    /**
     * @ElementName deviceType
     * @Type string
     * @Group e19a9072c2dad499e9f28837da5768db:7103
     * @MinLength 1
     * @MaxLength 40
     * @var string|null
     */
    protected $deviceType = null;

    /**
     * @ElementName supportVisualDeviceManagement
     * @Type bool
     * @Group e19a9072c2dad499e9f28837da5768db:7103
     * @var bool|null
     */
    protected $supportVisualDeviceManagement = null;

    /**
     * @ElementName macAddress
     * @Type string
     * @Optional
     * @Group e19a9072c2dad499e9f28837da5768db:7103
     * @MinLength 1
     * @MaxLength 12
     * @var string|null
     */
    protected $macAddress = null;

    /**
     * @ElementName primaryUser
     * @Type \CWM\BroadWorksConnector\Ocip\Models\PrimaryUserInfo
     * @Optional
     * @Group e19a9072c2dad499e9f28837da5768db:7103
     * @var \CWM\BroadWorksConnector\Ocip\Models\PrimaryUserInfo|null
     */
    protected $primaryUser = null;

    /**
     * Getter for deviceType
     *
     * @return string
     */
    public function getDeviceType()
    {
        return $this->deviceType instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->deviceType;
    }

    /**
     * Setter for deviceType
     *
     * @param string $deviceType
     * @return $this
     */
    public function setDeviceType($deviceType)
    {
        $this->deviceType = $deviceType;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetDeviceType()
    {
        $this->deviceType = null;
        return $this;
    }

    /**
     * Getter for supportVisualDeviceManagement
     *
     * @return bool
     */
    public function getSupportVisualDeviceManagement()
    {
        return $this->supportVisualDeviceManagement instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->supportVisualDeviceManagement;
    }

    /**
     * Setter for supportVisualDeviceManagement
     *
     * @param bool $supportVisualDeviceManagement
     * @return $this
     */
    public function setSupportVisualDeviceManagement($supportVisualDeviceManagement)
    {
        $this->supportVisualDeviceManagement = $supportVisualDeviceManagement;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetSupportVisualDeviceManagement()
    {
        $this->supportVisualDeviceManagement = null;
        return $this;
    }

    /**
     * Getter for macAddress
     *
     * @return string
     */
    public function getMacAddress()
    {
        return $this->macAddress instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->macAddress;
    }

    /**
     * Setter for macAddress
     *
     * @param string $macAddress
     * @return $this
     */
    public function setMacAddress($macAddress)
    {
        $this->macAddress = $macAddress;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetMacAddress()
    {
        $this->macAddress = null;
        return $this;
    }

    /**
     * Getter for primaryUser
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\PrimaryUserInfo
     */
    public function getPrimaryUser()
    {
        return $this->primaryUser instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->primaryUser;
    }

    /**
     * Setter for primaryUser
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\PrimaryUserInfo $primaryUser
     * @return $this
     */
    public function setPrimaryUser(\CWM\BroadWorksConnector\Ocip\Models\PrimaryUserInfo $primaryUser)
    {
        $this->primaryUser = $primaryUser;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetPrimaryUser()
    {
        $this->primaryUser = null;
        return $this;
    }
}

