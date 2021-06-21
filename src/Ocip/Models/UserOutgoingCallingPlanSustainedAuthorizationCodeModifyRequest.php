<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserOutgoingCallingPlanSustainedAuthorizationCodeModifyRequest
 *
 * Modify or clear the sustained authorization code for a user.
 *         The response is either a SuccessResponse or an ErrorResponse.
 *         Engineering Note: This command is used internally by Call Processing.
 *
 * @see SuccessResponse
 * @see ErrorResponse
 * @Groups [{"id":"6f793dfca9bd3d121bb35e0f9cf1cb2e:1665","type":"sequence"}]
 */
class UserOutgoingCallingPlanSustainedAuthorizationCodeModifyRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName userId
     * @Type string
     * @Group 6f793dfca9bd3d121bb35e0f9cf1cb2e:1665
     * @MinLength 1
     * @MaxLength 161
     * @var string|null
     */
    private $userId = null;

    /**
     * @ElementName code
     * @Type string
     * @Nillable
     * @Optional
     * @Group 6f793dfca9bd3d121bb35e0f9cf1cb2e:1665
     * @MinLength 2
     * @MaxLength 14
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $code = null;

    /**
     * Getter for userId
     *
     * @return string
     */
    public function getUserId()
    {
        return $this->userId instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->userId;
    }

    /**
     * Setter for userId
     *
     * @param string $userId
     * @return $this
     */
    public function setUserId($userId)
    {
        $this->userId = $userId;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetUserId()
    {
        $this->userId = null;
        return $this;
    }

    /**
     * Getter for code
     *
     * @return string|null
     */
    public function getCode()
    {
        return $this->code instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->code;
    }

    /**
     * Setter for code
     *
     * @param string|null $code
     * @return $this
     */
    public function setCode($code = null)
    {
        if ($code === null) {
            $this->code = new \CWM\BroadWorksConnector\Ocip\Nil;
        } else {
            $this->code = $code;
        }
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetCode()
    {
        $this->code = null;
        return $this;
    }


}

