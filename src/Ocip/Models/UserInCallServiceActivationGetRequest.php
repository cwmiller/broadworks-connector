<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserInCallServiceActivationGetRequest
 *
 * Request the user level data associated with In-Call Service Activation.
 *         The response is either a UserInCallServiceActivationGetResponse or an
 *         ErrorResponse.
 *
 * @see UserInCallServiceActivationGetResponse
 * @see ErrorResponse
 * @Groups [{"id":"ece0b65e69189d3e8b8deee895f0a7ff:141","type":"sequence"}]
 */
class UserInCallServiceActivationGetRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName userId
     * @Type string
     * @Group ece0b65e69189d3e8b8deee895f0a7ff:141
     * @MinLength 1
     * @MaxLength 161
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

