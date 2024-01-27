<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * LogoutRequest
 *
 * LogoutRequest is sent when an OCI user logs out or when connection is lost.
 *         This command can be sent either to the server, or to the client from OCS.
 *         The response is either a SuccessResponse or ErrorResponse.
 *
 * @see LogoutRequest
 * @see SuccessResponse
 * @see ErrorResponse
 * @Groups [{"id":"ef3c4f453d01f7ce750331de83ebc765:345","type":"sequence"}]
 */
class LogoutRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{
    /**
     * @ElementName userId
     * @Type string
     * @Group ef3c4f453d01f7ce750331de83ebc765:345
     * @MinLength 1
     * @MaxLength 161
     * @var string|null
     */
    protected $userId = null;

    /**
     * @ElementName reason
     * @Type \CWM\BroadWorksConnector\Ocip\Models\LogoutRequestReason
     * @Optional
     * @Group ef3c4f453d01f7ce750331de83ebc765:345
     * @var \CWM\BroadWorksConnector\Ocip\Models\LogoutRequestReason|null
     */
    protected $reason = null;

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
     * Getter for reason
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\LogoutRequestReason
     */
    public function getReason()
    {
        return $this->reason instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->reason;
    }

    /**
     * Setter for reason
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\LogoutRequestReason $reason
     * @return $this
     */
    public function setReason(\CWM\BroadWorksConnector\Ocip\Models\LogoutRequestReason $reason)
    {
        $this->reason = $reason;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetReason()
    {
        $this->reason = null;
        return $this;
    }
}

