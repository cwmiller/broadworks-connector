<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemDialPlanPolicyDeleteAccessCodeRequest
 *
 * Request to delete a system-level Dial Plan Access Code and its all attribues.
 *         The response is either SuccessResponse or ErrorResponse.
 *
 * @see SuccessResponse
 * @see ErrorResponse
 * @Groups [{"id":"da582a1f8028404e70d260cf1f891033:9181","type":"sequence"}]
 */
class SystemDialPlanPolicyDeleteAccessCodeRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{
    /**
     * @ElementName accessCode
     * @Type string
     * @Group da582a1f8028404e70d260cf1f891033:9181
     * @MinLength 1
     * @MaxLength 5
     * @var string|null
     */
    protected $accessCode = null;

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

