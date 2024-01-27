<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserVoiceMessagingUserGetVoicePortalResponse20
 *
 * Response to UserVoiceMessagingUserGetVoicePortalRequest20.
 *
 * @see UserVoiceMessagingUserGetVoicePortalRequest20
 * @Groups [{"id":"1fea1222b6a78aa7b98fd5c41bdae113:1954","type":"sequence"}]
 */
class UserVoiceMessagingUserGetVoicePortalResponse20 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{
    /**
     * @ElementName usePersonalizedName
     * @Type bool
     * @Group 1fea1222b6a78aa7b98fd5c41bdae113:1954
     * @var bool|null
     */
    protected $usePersonalizedName = null;

    /**
     * @ElementName voicePortalAutoLogin
     * @Type bool
     * @Group 1fea1222b6a78aa7b98fd5c41bdae113:1954
     * @var bool|null
     */
    protected $voicePortalAutoLogin = null;

    /**
     * @ElementName personalizedNameAudioFile
     * @Type \CWM\BroadWorksConnector\Ocip\Models\AnnouncementFileLevelKey
     * @Optional
     * @Group 1fea1222b6a78aa7b98fd5c41bdae113:1954
     * @var \CWM\BroadWorksConnector\Ocip\Models\AnnouncementFileLevelKey|null
     */
    protected $personalizedNameAudioFile = null;

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
     * @return \CWM\BroadWorksConnector\Ocip\Models\AnnouncementFileLevelKey
     */
    public function getPersonalizedNameAudioFile()
    {
        return $this->personalizedNameAudioFile instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->personalizedNameAudioFile;
    }

    /**
     * Setter for personalizedNameAudioFile
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\AnnouncementFileLevelKey $personalizedNameAudioFile
     * @return $this
     */
    public function setPersonalizedNameAudioFile(\CWM\BroadWorksConnector\Ocip\Models\AnnouncementFileLevelKey $personalizedNameAudioFile)
    {
        $this->personalizedNameAudioFile = $personalizedNameAudioFile;
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

