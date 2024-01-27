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
 * @Groups [{"id":"1fea1222b6a78aa7b98fd5c41bdae113:2180","type":"sequence"}]
 */
class UserVoiceMessagingUserModifyVoicePortalRequest20 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{
    /**
     * @ElementName userId
     * @Type string
     * @Group 1fea1222b6a78aa7b98fd5c41bdae113:2180
     * @MinLength 1
     * @MaxLength 161
     * @var string|null
     */
    protected $userId = null;

    /**
     * @ElementName usePersonalizedName
     * @Type bool
     * @Optional
     * @Group 1fea1222b6a78aa7b98fd5c41bdae113:2180
     * @var bool|null
     */
    protected $usePersonalizedName = null;

    /**
     * @ElementName voicePortalAutoLogin
     * @Type bool
     * @Optional
     * @Group 1fea1222b6a78aa7b98fd5c41bdae113:2180
     * @var bool|null
     */
    protected $voicePortalAutoLogin = null;

    /**
     * @ElementName personalizedNameAudioFile
     * @Type \CWM\BroadWorksConnector\Ocip\Models\AnnouncementFileLevelKey
     * @Nillable
     * @Optional
     * @Group 1fea1222b6a78aa7b98fd5c41bdae113:2180
     * @var \CWM\BroadWorksConnector\Ocip\Models\AnnouncementFileLevelKey|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    protected $personalizedNameAudioFile = null;

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
     * Getter for usePersonalizedName
     *
     * @return bool
     */
    public function getUsePersonalizedName()
    {
        return $this->usePersonalizedName instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->usePersonalizedName;
    }

    /**
     * Setter for usePersonalizedName
     *
     * @param bool $usePersonalizedName
     * @return $this
     */
    public function setUsePersonalizedName($usePersonalizedName)
    {
        $this->usePersonalizedName = $usePersonalizedName;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetUsePersonalizedName()
    {
        $this->usePersonalizedName = null;
        return $this;
    }

    /**
     * Getter for voicePortalAutoLogin
     *
     * @return bool
     */
    public function getVoicePortalAutoLogin()
    {
        return $this->voicePortalAutoLogin instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->voicePortalAutoLogin;
    }

    /**
     * Setter for voicePortalAutoLogin
     *
     * @param bool $voicePortalAutoLogin
     * @return $this
     */
    public function setVoicePortalAutoLogin($voicePortalAutoLogin)
    {
        $this->voicePortalAutoLogin = $voicePortalAutoLogin;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetVoicePortalAutoLogin()
    {
        $this->voicePortalAutoLogin = null;
        return $this;
    }

    /**
     * Getter for personalizedNameAudioFile
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\AnnouncementFileLevelKey|null
     */
    public function getPersonalizedNameAudioFile()
    {
        return $this->personalizedNameAudioFile instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->personalizedNameAudioFile;
    }

    /**
     * Setter for personalizedNameAudioFile
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\AnnouncementFileLevelKey|null $personalizedNameAudioFile
     * @return $this
     */
    public function setPersonalizedNameAudioFile(\CWM\BroadWorksConnector\Ocip\Models\AnnouncementFileLevelKey $personalizedNameAudioFile = null)
    {
        if ($personalizedNameAudioFile === null) {
            $this->personalizedNameAudioFile = new \CWM\BroadWorksConnector\Ocip\Nil;
        } else {
            $this->personalizedNameAudioFile = $personalizedNameAudioFile;
        }
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetPersonalizedNameAudioFile()
    {
        $this->personalizedNameAudioFile = null;
        return $this;
    }
}

