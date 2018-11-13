<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemDialPlanPolicyGetAccessCodeRequest
 *
 * Request access code data associated with system level Dial Plan Policy access
 * codes.
 *         The response is either a SystemDialPlanPolicyGetAccessCodeResponse or an
 * ErrorResponse.
 *
 * @see SystemDialPlanPolicyGetAccessCodeResponse
 * @see ErrorResponse
 */
class SystemDialPlanPolicyGetAccessCodeRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName accessCode
     * @Type string
     * @var string|null
     */
    private $accessCode = null;

    /**
     * Getter for accessCode
     *
     * @return string
     */
    public function getAccessCode()
    {
        return $this->accessCode instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->accessCode;
    }

    /**
     * Setter for accessCode
     *
     * @param string $accessCode
     * @return $this
     */
    public function setAccessCode($accessCode)
    {
        $this->accessCode = $accessCode;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetAccessCode()
    {
        $this->accessCode = null;
        return $this;
    }


}

