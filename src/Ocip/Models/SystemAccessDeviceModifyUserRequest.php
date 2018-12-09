<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemAccessDeviceModifyUserRequest
 *
 * Request to modify attributes for line/ports assigned on the system device profile.
 *         The response is either SuccessResponse or ErrorResponse.
 *         The following elements are only used in XS data mode and ignored in AS data mode:
 *           privateIdentity
 *
 * @see SuccessResponse
 * @see ErrorResponse
 * @Groups [{"id":"b5f5416d9e71f8e4246cda16c4723744:1108","type":"sequence"}]
 */
class SystemAccessDeviceModifyUserRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName deviceName
     * @Type string
     * @Group b5f5416d9e71f8e4246cda16c4723744:1108
     * @var string|null
     */
    private $deviceName = null;

    /**
     * @ElementName linePort
     * @Type string
     * @Group b5f5416d9e71f8e4246cda16c4723744:1108
     * @var string|null
     */
    private $linePort = null;

    /**
     * @ElementName privateIdentity
     * @Type string
     * @Optional
     * @Group b5f5416d9e71f8e4246cda16c4723744:1108
     * @var string|null
     */
    private $privateIdentity = null;

    /**
     * @ElementName isPrimaryLinePort
     * @Type bool
     * @Optional
     * @Group b5f5416d9e71f8e4246cda16c4723744:1108
     * @var bool|null
     */
    private $isPrimaryLinePort = null;

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

