<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * TutorialFlagGetRequest
 *
 * Get the tutorial flag setting for a user or admin.
 *         The response is either a TutorialFlagGetResponse or an ErrorResponse.
 */
class TutorialFlagGetRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
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

