<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemCallMeNowGetResponse
 *
 * Response to SystemCallMeNowGetRequest.
 */
class SystemCallMeNowGetResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName passcodeLength
     * @var int|null
     */
    private $passcodeLength = null;

    /**
     * @ElementName passcodeTimeoutSeconds
     * @var int|null
     */
    private $passcodeTimeoutSeconds = null;

    /**
     * Getter for passcodeLength
     *
     * @ElementName passcodeLength
     * @return int|null
     */
    public function getPasscodeLength()
    {
        return $this->passcodeLength;
    }

    /**
     * Setter for passcodeLength
     *
     * @ElementName passcodeLength
     * @param int|null $passcodeLength
     * @return $this
     */
    public function setPasscodeLength($passcodeLength)
    {
        $this->passcodeLength = $passcodeLength;
        return $this;
    }

    /**
     * Getter for passcodeTimeoutSeconds
     *
     * @ElementName passcodeTimeoutSeconds
     * @return int|null
     */
    public function getPasscodeTimeoutSeconds()
    {
        return $this->passcodeTimeoutSeconds;
    }

    /**
     * Setter for passcodeTimeoutSeconds
     *
     * @ElementName passcodeTimeoutSeconds
     * @param int|null $passcodeTimeoutSeconds
     * @return $this
     */
    public function setPasscodeTimeoutSeconds($passcodeTimeoutSeconds)
    {
        $this->passcodeTimeoutSeconds = $passcodeTimeoutSeconds;
        return $this;
    }


}

