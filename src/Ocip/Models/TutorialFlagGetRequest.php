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
 * @Groups [{"id":"21fd3c6abc11c44e52803121f7739a76:489","type":"sequence"}]
 */
class TutorialFlagGetRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName userId
     * @Type string
     * @Group 21fd3c6abc11c44e52803121f7739a76:489
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

