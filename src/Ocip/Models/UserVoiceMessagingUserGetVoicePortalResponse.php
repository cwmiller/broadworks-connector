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
 * @Groups [{"id":"d8f04177e438f303b41c211e518706bf:48071","type":"sequence"}]
 */
class UserVoiceMessagingUserGetVoicePortalResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{
    /**
     * @ElementName usePersonalizedName
     * @Type bool
     * @Group d8f04177e438f303b41c211e518706bf:48071
     * @var bool|null
     */
    protected $usePersonalizedName = null;

    /**
     * @ElementName voicePortalAutoLogin
     * @Type bool
     * @Group d8f04177e438f303b41c211e518706bf:48071
     * @var bool|null
     */
    protected $voicePortalAutoLogin = null;

    /**
     * @ElementName personalizedNameAudioFileDescription
     * @Type string
     * @Optional
     * @Group d8f04177e438f303b41c211e518706bf:48071
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

