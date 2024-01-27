<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserCallToNumberGetAvailableListRequest
 *
 * Request to get the user available Call to Number List information. The response is either a UserCallToNumberGetAvailableListResponse or an ErrorResponse.
 *
 * @see UserCallToNumberGetAvailableListResponse
 * @see ErrorResponse
 * @Groups [{"id":"6bd221784ebf8af2fe1169d36a6ac2dd:102","type":"sequence"}]
 */
class UserCallToNumberGetAvailableListRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{
    /**
     * @ElementName userId
     * @Type string
     * @Group 6bd221784ebf8af2fe1169d36a6ac2dd:102
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

