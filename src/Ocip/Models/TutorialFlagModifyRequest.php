<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * TutorialFlagModifyRequest
 *
 * Modify the tutorial flag setting for a user or admin.
 *         The response is either a SuccessResponse or an ErrorResponse.
 *
 * @see SuccessResponse
 * @see ErrorResponse
 */
class TutorialFlagModifyRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName userId
     * @var string|null
     */
    private $userId = null;

    /**
     * @ElementName enableTutorial
     * @var bool|null
     */
    private $enableTutorial = null;

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

    /**
     * Getter for enableTutorial
     *
     * @ElementName enableTutorial
     * @return bool|null
     */
    public function getEnableTutorial()
    {
        return $this->enableTutorial;
    }

    /**
     * Setter for enableTutorial
     *
     * @ElementName enableTutorial
     * @param bool|null $enableTutorial
     * @return $this
     */
    public function setEnableTutorial($enableTutorial)
    {
        $this->enableTutorial = $enableTutorial;
        return $this;
    }


}

