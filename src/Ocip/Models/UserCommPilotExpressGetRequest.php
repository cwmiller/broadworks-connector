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
 * @Groups [{"id":"cc98d71eafb1a94fd4bd31d597159369:41","type":"sequence"}]
 */
class UserCommPilotExpressGetRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName userId
     * @Type string
     * @Group cc98d71eafb1a94fd4bd31d597159369:41
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

