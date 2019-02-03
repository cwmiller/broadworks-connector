<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * TutorialFlagGetRequest
 *
 * Get the tutorial flag setting for a user or admin.
 *         The response is either a TutorialFlagGetResponse or an ErrorResponse.
 *
 * @see TutorialFlagGetResponse
 * @see ErrorResponse
 * @Groups [{"id":"6b27fcc79475236456fc113a42b75543:600","type":"sequence"}]
 */
class TutorialFlagGetRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName userId
     * @Type string
     * @Group 6b27fcc79475236456fc113a42b75543:600
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

