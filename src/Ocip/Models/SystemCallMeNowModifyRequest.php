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
 */
class SystemCallMeNowModifyRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName passcodeLength
     * @Type int
     * @var int|null
     */
    private $passcodeLength = null;

    /**
     * @ElementName passcodeTimeoutSeconds
     * @Type int
     * @var int|null
     */
    private $passcodeTimeoutSeconds = null;

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

