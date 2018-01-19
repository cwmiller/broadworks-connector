<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserVoiceMessagingUserGetVoicePortalResponse
 *
 * Response to UserVoiceMessagingUserGetVoicePortalRequest.
 *         Replaced By: UserVoiceMessagingUserGetVoicePortalResponse16
 */
class UserVoiceMessagingUserGetVoicePortalResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
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
     * @ElementName personalizedNameAudioFileDescription
     * @var string|null
     */
    private $personalizedNameAudioFileDescription = null;

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
     * Getter for personalizedNameAudioFileDescription
     *
     * @ElementName personalizedNameAudioFileDescription
     * @return string|null
     */
    public function getPersonalizedNameAudioFileDescription()
    {
        return $this->personalizedNameAudioFileDescription;
    }

    /**
     * Setter for personalizedNameAudioFileDescription
     *
     * @ElementName personalizedNameAudioFileDescription
     * @param string|null $personalizedNameAudioFileDescription
     * @return $this
     */
    public function setPersonalizedNameAudioFileDescription($personalizedNameAudioFileDescription)
    {
        $this->personalizedNameAudioFileDescription = $personalizedNameAudioFileDescription;
        return $this;
    }


}
