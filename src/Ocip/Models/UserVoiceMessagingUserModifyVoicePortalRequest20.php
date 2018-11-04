<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserVoiceMessagingUserModifyVoicePortalRequest20
 *
 * Modify the user's voice messaging voice portal settings.
 *         The response is either a SuccessResponse or an ErrorResponse.
 *         Engineering Note: This command is used internally by Call Processing.
 *
 * @see SuccessResponse
 * @see ErrorResponse
 */
class UserVoiceMessagingUserModifyVoicePortalRequest20 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName userId
     * @var string|null
     */
    private $userId = null;

    /**
     * @ElementName usePersonalizedName
     * @var bool|null
     */
    private $usePersonalizedName = null;

    /**
     * @ElementName voicePortalAutoLogin
     * @var bool|null
     */
    private $voicePortalAutoLogin = null;

    /**
     * @ElementName personalizedNameAudioFile
     * @Nillable
     * @var \CWM\BroadWorksConnector\Ocip\Models\AnnouncementFileLevelKey|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $personalizedNameAudioFile = null;

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
     * Getter for usePersonalizedName
     *
     * @ElementName usePersonalizedName
     * @return bool|null
     */
    public function getUsePersonalizedName()
    {
        return $this->usePersonalizedName;
    }

    /**
     * Setter for usePersonalizedName
     *
     * @ElementName usePersonalizedName
     * @param bool|null $usePersonalizedName
     * @return $this
     */
    public function setUsePersonalizedName($usePersonalizedName)
    {
        $this->usePersonalizedName = $usePersonalizedName;
        return $this;
    }

    /**
     * Getter for voicePortalAutoLogin
     *
     * @ElementName voicePortalAutoLogin
     * @return bool|null
     */
    public function getVoicePortalAutoLogin()
    {
        return $this->voicePortalAutoLogin;
    }

    /**
     * Setter for voicePortalAutoLogin
     *
     * @ElementName voicePortalAutoLogin
     * @param bool|null $voicePortalAutoLogin
     * @return $this
     */
    public function setVoicePortalAutoLogin($voicePortalAutoLogin)
    {
        $this->voicePortalAutoLogin = $voicePortalAutoLogin;
        return $this;
    }

    /**
     * Getter for personalizedNameAudioFile
     *
     * @ElementName personalizedNameAudioFile
     * @Nillable
     * @return \CWM\BroadWorksConnector\Ocip\Models\AnnouncementFileLevelKey|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    public function getPersonalizedNameAudioFile()
    {
        return $this->personalizedNameAudioFile;
    }

    /**
     * Setter for personalizedNameAudioFile
     *
     * @ElementName personalizedNameAudioFile
     * @Nillable
     * @param \CWM\BroadWorksConnector\Ocip\Models\AnnouncementFileLevelKey|null|\CWM\BroadWorksConnector\Ocip\Nil $personalizedNameAudioFile
     * @return $this
     */
    public function setPersonalizedNameAudioFile($personalizedNameAudioFile)
    {
        $this->personalizedNameAudioFile = $personalizedNameAudioFile;
        return $this;
    }


}

