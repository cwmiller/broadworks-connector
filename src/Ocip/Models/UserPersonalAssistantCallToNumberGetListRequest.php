<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserPersonalAssistantCallToNumberGetListRequest
 *
 * Request to get the user assigned Call to Number List information. The response
 * is either a UserPersonalAssistantCallToNumberGetListResponse or an
 * ErrorResponse.
 *
 * @see UserPersonalAssistantCallToNumberGetListResponse
 * @see ErrorResponse
 */
class UserPersonalAssistantCallToNumberGetListRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName userId
     * @var string|null
     */
    private $userId = null;

    /**
     * Getter for userId
     *
     * @ElementName userId
     * @return string|null
     */
    public function getUserId()
    {
        return $this->userId;
    }

    /**
     * Setter for userId
     *
     * @ElementName userId
     * @param string|null $userId
     * @return $this
     */
    public function setUserId($userId)
    {
        $this->userId = $userId;
        return $this;
    }


}

