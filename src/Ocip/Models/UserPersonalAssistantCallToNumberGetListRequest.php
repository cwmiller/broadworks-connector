<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserPersonalAssistantCallToNumberGetListRequest
 *
 * Request to get the user assigned Call to Number List information. The response is either a UserPersonalAssistantCallToNumberGetListResponse or an ErrorResponse.
 *
 * @see UserPersonalAssistantCallToNumberGetListResponse
 * @see ErrorResponse
 * @Groups [{"id":"6bd221784ebf8af2fe1169d36a6ac2dd:164","type":"sequence"}]
 */
class UserPersonalAssistantCallToNumberGetListRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{
    /**
     * @ElementName userId
     * @Type string
     * @Group 6bd221784ebf8af2fe1169d36a6ac2dd:164
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

