<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserPhysicalLocationGetRequest
 *
 * Request the user level data associated with Physical Location.
 *         The response is either a UserPhysicalLocationGetResponse or an ErrorResponse.
 *
 * @see UserPhysicalLocationGetResponse
 * @see ErrorResponse
 * @Groups [{"id":"8250786d50d10f8fe081d126ecca3847:89","type":"sequence"}]
 */
class UserPhysicalLocationGetRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{
    /**
     * @ElementName userId
     * @Type string
     * @Group 8250786d50d10f8fe081d126ecca3847:89
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

