<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserCommunicationBarringAuthorizationCodeDeleteListRequest
 *
 * Delete a list of Communication Barring Authorization codes from a user.
 *         The response is either a SuccessResponse or an ErrorResponse.
 *
 * @see SuccessResponse
 * @see ErrorResponse
 * @Groups [{"id":"fb73488c2ef4ac4400ab213b637d79a9:1164","type":"sequence"}]
 */
class UserCommunicationBarringAuthorizationCodeDeleteListRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{
    /**
     * @ElementName userId
     * @Type string
     * @Group fb73488c2ef4ac4400ab213b637d79a9:1164
     * @MinLength 1
     * @MaxLength 161
     * @var string|null
     */
    protected $userId = null;

    /**
     * @ElementName code
     * @Type string
     * @Array
     * @Group fb73488c2ef4ac4400ab213b637d79a9:1164
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

