<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserSMDIMessageDeskGetRequest
 *
 * Get the user's SMDI Message Desk service personal setting.
 *         The response is either a UserSMDIMessageDeskGetResponse or an ErrorResponse.
 *
 * @see UserSMDIMessageDeskGetResponse
 * @see ErrorResponse
 * @Groups [{"id":"aa3a240fa755015613cfb9259eccafef:260","type":"sequence"}]
 */
class UserSMDIMessageDeskGetRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{
    /**
     * @ElementName userId
     * @Type string
     * @Group aa3a240fa755015613cfb9259eccafef:260
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

