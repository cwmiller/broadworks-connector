<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * LogoutRequest
 *
 * LogoutRequest is sent when an OCI user logs out or when connection is lost.
 *         This command can be sent either to the server, or to the client from OCS.
 *         The response is either SuccessResponse or ErrorResponse.
 *
 * @see LogoutRequest
 * @see SuccessResponse
 * @see ErrorResponse
 * @Groups [{"id":"6b27fcc79475236456fc113a42b75543:341","type":"sequence"}]
 */
class LogoutRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName userId
     * @Type string
     * @Group 6b27fcc79475236456fc113a42b75543:341
     * @MinLength 1
     * @MaxLength 161
     * @var string|null
     */
    private $userId = null;

    /**
     * @ElementName reason
     * @Type \CWM\BroadWorksConnector\Ocip\Models\LogoutRequestReason
     * @Optional
     * @Group 6b27fcc79475236456fc113a42b75543:341
     * @var \CWM\BroadWorksConnector\Ocip\Models\LogoutRequestReason|null
     */
    private $reason = null;

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

