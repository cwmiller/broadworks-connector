<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupAccessDeviceModifyUserRequest
 *
 * Request to modify attributes for line/ports assigned on the group device profile.
 *         The response is either SuccessResponse or ErrorResponse.
 *         The following elements are only used in XS data mode and ignored in AS data mode:
 *           privateIdentity
 *
 * @see SuccessResponse
 * @see ErrorResponse
 * @Groups [{"id":"4b0e7857796c636464362260a2f8e5ee:1300","type":"sequence"}]
 */
class GroupAccessDeviceModifyUserRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{
    /**
     * @ElementName serviceProviderId
     * @Type string
     * @Group 4b0e7857796c636464362260a2f8e5ee:1300
     * @MinLength 1
     * @MaxLength 30
     * @var string|null
     */
    protected $serviceProviderId = null;

    /**
     * @ElementName groupId
     * @Type string
     * @Group 4b0e7857796c636464362260a2f8e5ee:1300
     * @MinLength 1
     * @MaxLength 30
     * @var string|null
     */
    protected $groupId = null;

    /**
     * @ElementName deviceName
     * @Type string
     * @Group 4b0e7857796c636464362260a2f8e5ee:1300
     * @MinLength 1
     * @MaxLength 40
     * @var string|null
     */
    protected $deviceName = null;

    /**
     * @ElementName linePort
     * @Type string
     * @Group 4b0e7857796c636464362260a2f8e5ee:1300
     * @MinLength 1
     * @MaxLength 161
     * @var string|null
     */
    protected $linePort = null;

    /**
     * @ElementName privateIdentity
     * @Type string
     * @Optional
     * @Group 4b0e7857796c636464362260a2f8e5ee:1300
     * @MinLength 1
     * @MaxLength 161
     * @var string|null
     */
    protected $privateIdentity = null;

    /**
     * @ElementName isPrimaryLinePort
     * @Type bool
     * @Optional
     * @Group 4b0e7857796c636464362260a2f8e5ee:1300
     * @var bool|null
     */
    protected $isPrimaryLinePort = null;

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
     * Getter for linePort
     *
     * @return string
     */
    public function getLinePort()
    {
        return $this->linePort instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->linePort;
    }

    /**
     * Setter for linePort
     *
     * @param string $linePort
     * @return $this
     */
    public function setLinePort($linePort)
    {
        $this->linePort = $linePort;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetLinePort()
    {
        $this->linePort = null;
        return $this;
    }

    /**
     * Getter for privateIdentity
     *
     * @return string
     */
    public function getPrivateIdentity()
    {
        return $this->privateIdentity instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->privateIdentity;
    }

    /**
     * Setter for privateIdentity
     *
     * @param string $privateIdentity
     * @return $this
     */
    public function setPrivateIdentity($privateIdentity)
    {
        $this->privateIdentity = $privateIdentity;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetPrivateIdentity()
    {
        $this->privateIdentity = null;
        return $this;
    }

    /**
     * Getter for isPrimaryLinePort
     *
     * @return bool
     */
    public function getIsPrimaryLinePort()
    {
        return $this->isPrimaryLinePort instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->isPrimaryLinePort;
    }

    /**
     * Setter for isPrimaryLinePort
     *
     * @param bool $isPrimaryLinePort
     * @return $this
     */
    public function setIsPrimaryLinePort($isPrimaryLinePort)
    {
        $this->isPrimaryLinePort = $isPrimaryLinePort;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetIsPrimaryLinePort()
    {
        $this->isPrimaryLinePort = null;
        return $this;
    }
}

