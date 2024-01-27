<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * LongLivedTokenRevokeRequest
 *
 * Revoke all previously issued long lived tokens.   
 *         If the userId is not specified, revoke all tokens in the system. 
 *         If the userId is specified, revoke all tokens issued to the user. 
 *         The response is either a SuccessResponse or an ErrorResponse.
 *
 * @see SuccessResponse
 * @see ErrorResponse
 * @Groups [{"id":"ef3c4f453d01f7ce750331de83ebc765:364","type":"sequence"}]
 */
class LongLivedTokenRevokeRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{
    /**
     * @ElementName userId
     * @Type string
     * @Optional
     * @Group ef3c4f453d01f7ce750331de83ebc765:364
     * @MinLength 1
     * @MaxLength 161
     * @var string|null
     */
    protected $userId = null;

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
}

