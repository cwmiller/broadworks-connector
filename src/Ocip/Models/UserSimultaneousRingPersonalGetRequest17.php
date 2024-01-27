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
 * @Groups [{"id":"d6190622c16e29d798f0976799563da5:120","type":"sequence"}]
 */
class UserSimultaneousRingPersonalGetRequest17 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{
    /**
     * @ElementName userId
     * @Type string
     * @Group d6190622c16e29d798f0976799563da5:120
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

