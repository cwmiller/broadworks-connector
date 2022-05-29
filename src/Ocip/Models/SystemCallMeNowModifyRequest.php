<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemCallMeNowModifyRequest
 *
 * Modify the system level data associated with Call me now service.
 *         The response is either a SuccessResponse or an ErrorResponse.
 *
 * @see SuccessResponse
 * @see ErrorResponse
 * @Groups [{"id":"1f0f230fee2817fe00157925859dc28e:77","type":"sequence"}]
 */
class SystemCallMeNowModifyRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName passcodeLength
     * @Type int
     * @Optional
     * @Group 1f0f230fee2817fe00157925859dc28e:77
     * @MinInclusive 2
     * @MaxInclusive 30
     * @var int|null
     */
    protected $passcodeLength = null;

    /**
     * @ElementName passcodeTimeoutSeconds
     * @Type int
     * @Optional
     * @Group 1f0f230fee2817fe00157925859dc28e:77
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

