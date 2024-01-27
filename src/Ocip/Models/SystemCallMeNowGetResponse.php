<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemCallMeNowGetResponse
 *
 * Response to SystemCallMeNowGetRequest.
 *
 * @see SystemCallMeNowGetRequest
 * @Groups [{"id":"adf9583170c1dc9ec6c152ba1238437a:60","type":"sequence"}]
 */
class SystemCallMeNowGetResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{
    /**
     * @ElementName passcodeLength
     * @Type int
     * @Group adf9583170c1dc9ec6c152ba1238437a:60
     * @MinInclusive 2
     * @MaxInclusive 30
     * @var int|null
     */
    protected $passcodeLength = null;

    /**
     * @ElementName passcodeTimeoutSeconds
     * @Type int
     * @Group adf9583170c1dc9ec6c152ba1238437a:60
     * @MinInclusive 30
     * @MaxInclusive 180
     * @var int|null
     */
    protected $passcodeTimeoutSeconds = null;

    /**
     * Getter for passcodeLength
     *
     * @return int
     */
    public function getPasscodeLength()
    {
        return $this->passcodeLength instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->passcodeLength;
    }

    /**
     * Setter for passcodeLength
     *
     * @param int $passcodeLength
     * @return $this
     */
    public function setPasscodeLength($passcodeLength)
    {
        $this->passcodeLength = $passcodeLength;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetPasscodeLength()
    {
        $this->passcodeLength = null;
        return $this;
    }

    /**
     * Getter for passcodeTimeoutSeconds
     *
     * @return int
     */
    public function getPasscodeTimeoutSeconds()
    {
        return $this->passcodeTimeoutSeconds instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->passcodeTimeoutSeconds;
    }

    /**
     * Setter for passcodeTimeoutSeconds
     *
     * @param int $passcodeTimeoutSeconds
     * @return $this
     */
    public function setPasscodeTimeoutSeconds($passcodeTimeoutSeconds)
    {
        $this->passcodeTimeoutSeconds = $passcodeTimeoutSeconds;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetPasscodeTimeoutSeconds()
    {
        $this->passcodeTimeoutSeconds = null;
        return $this;
    }
}

