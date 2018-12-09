<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserSimultaneousRingPersonalGetRequest17
 *
 * Get the user's simultaneous ring personal service setting.
 *         The response is either a UserSimultaneousRingPersonalGetResponse17 or an ErrorResponse.
 *
 * @see UserSimultaneousRingPersonalGetResponse17
 * @see ErrorResponse
 * @Groups [{"id":"40322112e72600d53590e48b9c64c76b:120","type":"sequence"}]
 */
class UserSimultaneousRingPersonalGetRequest17 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName userId
     * @Type string
     * @Group 40322112e72600d53590e48b9c64c76b:120
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

