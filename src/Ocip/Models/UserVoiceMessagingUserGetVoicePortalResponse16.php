<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserVoiceMessagingUserGetVoicePortalResponse16
 *
 * Response to UserVoiceMessagingUserGetVoicePortalRequest16.
 *
 * @see UserVoiceMessagingUserGetVoicePortalRequest16
 * @Groups [{"id":"a8b2edcd7d6936a8b76653949ae59623:473","type":"sequence"}]
 */
class UserVoiceMessagingUserGetVoicePortalResponse16 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName usePersonalizedName
     * @Type bool
     * @Group a8b2edcd7d6936a8b76653949ae59623:473
     * @var bool|null
     */
    private $usePersonalizedName = null;

    /**
     * @ElementName voicePortalAutoLogin
     * @Type bool
     * @Group a8b2edcd7d6936a8b76653949ae59623:473
     * @var bool|null
     */
    private $voicePortalAutoLogin = null;

    /**
     * @ElementName personalizedNameAudioFileDescription
     * @Type string
     * @Optional
     * @Group a8b2edcd7d6936a8b76653949ae59623:473
     * @var string|null
     */
    private $personalizedNameAudioFileDescription = null;

    /**
     * @ElementName personalizedNameMediaType
     * @Type \CWM\BroadWorksConnector\Ocip\Models\MediaFileType
     * @Optional
     * @Group a8b2edcd7d6936a8b76653949ae59623:473
     * @var \CWM\BroadWorksConnector\Ocip\Models\MediaFileType|null
     */
    private $personalizedNameMediaType = null;

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

    /**
     * Getter for personalizedNameMediaType
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\MediaFileType
     */
    public function getPersonalizedNameMediaType()
    {
        return $this->personalizedNameMediaType instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->personalizedNameMediaType;
    }

    /**
     * Setter for personalizedNameMediaType
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\MediaFileType $personalizedNameMediaType
     * @return $this
     */
    public function setPersonalizedNameMediaType(\CWM\BroadWorksConnector\Ocip\Models\MediaFileType $personalizedNameMediaType)
    {
        $this->personalizedNameMediaType = $personalizedNameMediaType;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetPersonalizedNameMediaType()
    {
        $this->personalizedNameMediaType = null;
        return $this;
    }


}

