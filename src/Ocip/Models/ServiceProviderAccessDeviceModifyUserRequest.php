<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * ServiceProviderAccessDeviceModifyUserRequest
 *
 * Request to modify attributes for line/ports assigned on the service provider
 * device profile.
 *         The response is either SuccessResponse or ErrorResponse.
 *         The following elements are only used in XS data mode and ignored in AS
 * data mode:
 *           privateIdentity
 *
 * @see SuccessResponse
 * @see ErrorResponse
 */
class ServiceProviderAccessDeviceModifyUserRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName serviceProviderId
     * @Type string
     * @var string|null
     */
    private $serviceProviderId = null;

    /**
     * @ElementName deviceName
     * @Type string
     * @var string|null
     */
    private $deviceName = null;

    /**
     * @ElementName linePort
     * @Type string
     * @var string|null
     */
    private $linePort = null;

    /**
     * @ElementName privateIdentity
     * @Type string
     * @var string|null
     */
    private $privateIdentity = null;

    /**
     * @ElementName isPrimaryLinePort
     * @Type bool
     * @var bool|null
     */
    private $isPrimaryLinePort = null;

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

