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
 * @Groups [{"id":"6969635204f8e96ba65121dc046a703e:153","type":"sequence"}]
 */
class UserMaliciousCallTraceGetRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName userId
     * @Type string
     * @Group 6969635204f8e96ba65121dc046a703e:153
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

