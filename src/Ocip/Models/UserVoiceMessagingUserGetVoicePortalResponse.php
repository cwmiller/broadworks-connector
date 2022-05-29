<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserVoiceMessagingUserGetVoicePortalResponse
 *
 * Response to UserVoiceMessagingUserGetVoicePortalRequest.
 *         Replaced By: UserVoiceMessagingUserGetVoicePortalResponse16
 *
 * @see UserVoiceMessagingUserGetVoicePortalRequest
 * @see UserVoiceMessagingUserGetVoicePortalResponse16
 * @Groups [{"id":"ab0042aa512abc10edb3c55e4b416b0b:47185","type":"sequence"}]
 */
class UserVoiceMessagingUserGetVoicePortalResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName usePersonalizedName
     * @Type bool
     * @Group ab0042aa512abc10edb3c55e4b416b0b:47185
     * @var bool|null
     */
    protected $usePersonalizedName = null;

    /**
     * @ElementName voicePortalAutoLogin
     * @Type bool
     * @Group ab0042aa512abc10edb3c55e4b416b0b:47185
     * @var bool|null
     */
    protected $voicePortalAutoLogin = null;

    /**
     * @ElementName personalizedNameAudioFileDescription
     * @Type string
     * @Optional
     * @Group ab0042aa512abc10edb3c55e4b416b0b:47185
     * @MinLength 1
     * @MaxLength 256
     * @var string|null
     */
    protected $personalizedNameAudioFileDescription = null;

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
     * Getter for personalizedNameAudioFileDescription
     *
     * @return string
     */
    public function getPersonalizedNameAudioFileDescription()
    {
        return $this->personalizedNameAudioFileDescription instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->personalizedNameAudioFileDescription;
    }

    /**
     * Setter for personalizedNameAudioFileDescription
     *
     * @param string $personalizedNameAudioFileDescription
     * @return $this
     */
    public function setPersonalizedNameAudioFileDescription($personalizedNameAudioFileDescription)
    {
        $this->personalizedNameAudioFileDescription = $personalizedNameAudioFileDescription;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetPersonalizedNameAudioFileDescription()
    {
        $this->personalizedNameAudioFileDescription = null;
        return $this;
    }


}

