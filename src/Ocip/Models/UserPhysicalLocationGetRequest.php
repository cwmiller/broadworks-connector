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
 * @Groups [{"id":"4a26e5fa0592a0fd3b4e60e9432f8588:89","type":"sequence"}]
 */
class UserPhysicalLocationGetRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName userId
     * @Type string
     * @Group 4a26e5fa0592a0fd3b4e60e9432f8588:89
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

