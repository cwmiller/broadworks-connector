<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserCommPilotExpressGetRequest
 *
 * Get the user's commPilot express service setting.
 *         The response is either a UserCommPilotExpressGetResponse or an ErrorResponse.
 *
 * @see UserCommPilotExpressGetResponse
 * @see ErrorResponse
 * @Groups [{"id":"de7795e1833d459a7eb89116d772fd78:41","type":"sequence"}]
 */
class UserCommPilotExpressGetRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{
    /**
     * @ElementName userId
     * @Type string
     * @Group de7795e1833d459a7eb89116d772fd78:41
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

