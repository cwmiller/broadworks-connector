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
 * @Groups [{"id":"ef3c4f453d01f7ce750331de83ebc765:505","type":"sequence"}]
 */
class TutorialFlagModifyRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{
    /**
     * @ElementName userId
     * @Type string
     * @Group ef3c4f453d01f7ce750331de83ebc765:505
     * @MinLength 1
     * @MaxLength 161
     * @var string|null
     */
    protected $userId = null;

    /**
     * @ElementName enableTutorial
     * @Type bool
     * @Optional
     * @Group ef3c4f453d01f7ce750331de83ebc765:505
     * @var bool|null
     */
    protected $enableTutorial = null;

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

    /**
     * Getter for enableTutorial
     *
     * @return bool
     */
    public function getEnableTutorial()
    {
        return $this->enableTutorial instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->enableTutorial;
    }

    /**
     * Setter for enableTutorial
     *
     * @param bool $enableTutorial
     * @return $this
     */
    public function setEnableTutorial($enableTutorial)
    {
        $this->enableTutorial = $enableTutorial;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetEnableTutorial()
    {
        $this->enableTutorial = null;
        return $this;
    }
}

