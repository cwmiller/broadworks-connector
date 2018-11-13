<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserMaliciousCallTraceGetRequest
 *
 * Request the user level data associated with Malicious Call Trace.
 *         The response is either a UserMaliciousCallTraceGetResponse or an
 *         ErrorResponse.
 *
 * @see UserMaliciousCallTraceGetResponse
 * @see ErrorResponse
 */
class UserMaliciousCallTraceGetRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName userId
     * @Type string
     * @var string|null
     */
    private $userId = null;

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

