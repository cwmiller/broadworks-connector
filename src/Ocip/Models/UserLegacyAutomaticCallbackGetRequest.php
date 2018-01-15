<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserLegacyAutomaticCallbackGetRequest
 *
 * Request the user level data associated with Legacy Automatic Callback.
 *         The response is either a UserLegacyAutomaticCallbackGetResponse or an
 *         ErrorResponse.
 */
class UserLegacyAutomaticCallbackGetRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
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

