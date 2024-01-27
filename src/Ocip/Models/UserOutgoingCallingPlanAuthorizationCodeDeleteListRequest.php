<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserOutgoingCallingPlanAuthorizationCodeDeleteListRequest
 *
 * Delete a list of authorization codes from a user.
 *         The response is either a SuccessResponse or an ErrorResponse.
 *
 * @see SuccessResponse
 * @see ErrorResponse
 * @Groups [{"id":"a63afa661ee5c74f4700e562e88c66d0:1035","type":"sequence"}]
 */
class UserOutgoingCallingPlanAuthorizationCodeDeleteListRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{
    /**
     * @ElementName userId
     * @Type string
     * @Group a63afa661ee5c74f4700e562e88c66d0:1035
     * @MinLength 1
     * @MaxLength 161
     * @var string|null
     */
    protected $userId = null;

    /**
     * @ElementName code
     * @Type string
     * @Array
     * @Group a63afa661ee5c74f4700e562e88c66d0:1035
     * @MinLength 2
     * @MaxLength 14
     * @var string[]
     */
    protected $code = [
        
    ];

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
     * @return string[]
     */
    public function getCode()
    {
        return $this->code instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->code;
    }

    /**
     * Setter for code
     *
     * @param string[] $code
     * @return $this
     */
    public function setCode(array $code)
    {
        $this->code = $code;
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

    /**
     * Adder for code
     *
     * @param string $code
     * @return $this
     */
    public function addCode(string $code)
    {
        $this->code[] = $code;
        return $this;
    }
}

