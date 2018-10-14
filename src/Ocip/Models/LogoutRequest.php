<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * LogoutRequest
 *
 * LogoutRequest is sent when an OCI user logs out or when connection is lost.
 *         This command can be sent either to the server, or to the client from
 * OCS.
 *         Response is either SuccessResponse or ErrorResponse.
 *
 * @see LogoutRequest
 * @see SuccessResponse
 * @see ErrorResponse
 */
class LogoutRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName userId
     * @var string|null
     */
    private $userId = null;

    /**
     * @ElementName reason
     * @var \CWM\BroadWorksConnector\Ocip\Models\LogoutRequestReason|null
     */
    private $reason = null;

    /**
     * Getter for userId
     *
     * @ElementName userId
     * @return string|null
     */
    public function getUserId()
    {
        return $this->userId;
    }

    /**
     * Setter for userId
     *
     * @ElementName userId
     * @param string|null $userId
     * @return $this
     */
    public function setUserId($userId)
    {
        $this->userId = $userId;
        return $this;
    }

    /**
     * Getter for reason
     *
     * @ElementName reason
     * @return \CWM\BroadWorksConnector\Ocip\Models\LogoutRequestReason|null
     */
    public function getReason()
    {
        return $this->reason;
    }

    /**
     * Setter for reason
     *
     * @ElementName reason
     * @param \CWM\BroadWorksConnector\Ocip\Models\LogoutRequestReason|null $reason
     * @return $this
     */
    public function setReason(\CWM\BroadWorksConnector\Ocip\Models\LogoutRequestReason $reason)
    {
        $this->reason = $reason;
        return $this;
    }


}

