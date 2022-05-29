<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemAccessDeviceDeviceActivationGetResponse
 *
 * Response to SystemAccessDeviceDeviceActivationGetRequest.
 *         The response contains the activation code (if available), the expiry time (if available) and the activation state.
 *         The expiryTime is represented as a timestamp, i.e. the number of milliseconds
 *         since January 1, 1970, 00:00:00 GMT.
 *
 * @see SystemAccessDeviceDeviceActivationGetRequest
 * @Groups [{"id":"7f663d5135470c33ca64b0eed3c3aa0c:906","type":"sequence"}]
 */
class SystemAccessDeviceDeviceActivationGetResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName activationCode
     * @Type string
     * @Optional
     * @Group 7f663d5135470c33ca64b0eed3c3aa0c:906
     * @MinLength 16
     * @MaxLength 16
     * @var string|null
     */
    protected $activationCode = null;

    /**
     * @ElementName expiryTime
     * @Type string
     * @Optional
     * @Group 7f663d5135470c33ca64b0eed3c3aa0c:906
     * @var string|null
     */
    protected $expiryTime = null;

    /**
     * @ElementName activationState
     * @Type \CWM\BroadWorksConnector\Ocip\Models\DeviceActivationState
     * @Group 7f663d5135470c33ca64b0eed3c3aa0c:906
     * @var \CWM\BroadWorksConnector\Ocip\Models\DeviceActivationState|null
     */
    protected $activationState = null;

    /**
     * Getter for activationCode
     *
     * @return string
     */
    public function getActivationCode()
    {
        return $this->activationCode instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->activationCode;
    }

    /**
     * Setter for activationCode
     *
     * @param string $activationCode
     * @return $this
     */
    public function setActivationCode($activationCode)
    {
        $this->activationCode = $activationCode;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetActivationCode()
    {
        $this->activationCode = null;
        return $this;
    }

    /**
     * Getter for expiryTime
     *
     * @return string
     */
    public function getExpiryTime()
    {
        return $this->expiryTime instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->expiryTime;
    }

    /**
     * Setter for expiryTime
     *
     * @param string $expiryTime
     * @return $this
     */
    public function setExpiryTime($expiryTime)
    {
        $this->expiryTime = $expiryTime;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetExpiryTime()
    {
        $this->expiryTime = null;
        return $this;
    }

    /**
     * Getter for activationState
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\DeviceActivationState
     */
    public function getActivationState()
    {
        return $this->activationState instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->activationState;
    }

    /**
     * Setter for activationState
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\DeviceActivationState $activationState
     * @return $this
     */
    public function setActivationState(\CWM\BroadWorksConnector\Ocip\Models\DeviceActivationState $activationState)
    {
        $this->activationState = $activationState;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetActivationState()
    {
        $this->activationState = null;
        return $this;
    }


}

