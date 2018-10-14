<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserVoiceMessagingUserGetVoicePortalResponse20
 *
 * Response to UserVoiceMessagingUserGetVoicePortalRequest20.
 *
 * @see UserVoiceMessagingUserGetVoicePortalRequest20
 */
class UserVoiceMessagingUserGetVoicePortalResponse20 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

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
     * @var \CWM\BroadWorksConnector\Ocip\Models\AnnouncementFileLevelKey|null
     */
    private $personalizedNameAudioFile = null;

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
     * @return \CWM\BroadWorksConnector\Ocip\Models\AnnouncementFileLevelKey|null
     */
    public function getPersonalizedNameAudioFile()
    {
        return $this->personalizedNameAudioFile;
    }

    /**
     * Setter for personalizedNameAudioFile
     *
     * @ElementName personalizedNameAudioFile
     * @param \CWM\BroadWorksConnector\Ocip\Models\AnnouncementFileLevelKey|null $personalizedNameAudioFile
     * @return $this
     */
    public function setPersonalizedNameAudioFile(\CWM\BroadWorksConnector\Ocip\Models\AnnouncementFileLevelKey $personalizedNameAudioFile)
    {
        $this->personalizedNameAudioFile = $personalizedNameAudioFile;
        return $this;
    }


}

