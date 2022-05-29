<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * ServiceProviderVoiceMessagingGroupGetVoicePortalBrandingResponse16
 *
 * Response to the ServiceProviderVoiceMessagingGroupGetVoicePortalBrandingRequest16.
 *
 * @see ServiceProviderVoiceMessagingGroupGetVoicePortalBrandingRequest16
 * @Groups [{"id":"3347d430e0d5c93a9ff8dcf0e3b60d6c:426","type":"sequence"}]
 */
class ServiceProviderVoiceMessagingGroupGetVoicePortalBrandingResponse16 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName voicePortalGreetingSelection
     * @Type \CWM\BroadWorksConnector\Ocip\Models\VoiceMessagingBrandingSelection
     * @Group 3347d430e0d5c93a9ff8dcf0e3b60d6c:426
     * @var \CWM\BroadWorksConnector\Ocip\Models\VoiceMessagingBrandingSelection|null
     */
    protected $voicePortalGreetingSelection = null;

    /**
     * @ElementName voicePortalGreetingFileDescription
     * @Type string
     * @Optional
     * @Group 3347d430e0d5c93a9ff8dcf0e3b60d6c:426
     * @MinLength 1
     * @MaxLength 256
     * @var string|null
     */
    protected $voicePortalGreetingFileDescription = null;

    /**
     * @ElementName voicePortalGreetingMediaFileType
     * @Type \CWM\BroadWorksConnector\Ocip\Models\MediaFileType
     * @Optional
     * @Group 3347d430e0d5c93a9ff8dcf0e3b60d6c:426
     * @var \CWM\BroadWorksConnector\Ocip\Models\MediaFileType|null
     */
    protected $voicePortalGreetingMediaFileType = null;

    /**
     * @ElementName voiceMessagingGreetingSelection
     * @Type \CWM\BroadWorksConnector\Ocip\Models\VoiceMessagingBrandingSelection
     * @Group 3347d430e0d5c93a9ff8dcf0e3b60d6c:426
     * @var \CWM\BroadWorksConnector\Ocip\Models\VoiceMessagingBrandingSelection|null
     */
    protected $voiceMessagingGreetingSelection = null;

    /**
     * @ElementName voiceMessagingGreetingFileDescription
     * @Type string
     * @Optional
     * @Group 3347d430e0d5c93a9ff8dcf0e3b60d6c:426
     * @MinLength 1
     * @MaxLength 256
     * @var string|null
     */
    protected $voiceMessagingGreetingFileDescription = null;

    /**
     * @ElementName voiceMessagingGreetingMediaFileType
     * @Type \CWM\BroadWorksConnector\Ocip\Models\MediaFileType
     * @Optional
     * @Group 3347d430e0d5c93a9ff8dcf0e3b60d6c:426
     * @var \CWM\BroadWorksConnector\Ocip\Models\MediaFileType|null
     */
    protected $voiceMessagingGreetingMediaFileType = null;

    /**
     * Getter for voicePortalGreetingSelection
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\VoiceMessagingBrandingSelection
     */
    public function getVoicePortalGreetingSelection()
    {
        return $this->voicePortalGreetingSelection instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->voicePortalGreetingSelection;
    }

    /**
     * Setter for voicePortalGreetingSelection
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\VoiceMessagingBrandingSelection $voicePortalGreetingSelection
     * @return $this
     */
    public function setVoicePortalGreetingSelection(\CWM\BroadWorksConnector\Ocip\Models\VoiceMessagingBrandingSelection $voicePortalGreetingSelection)
    {
        $this->voicePortalGreetingSelection = $voicePortalGreetingSelection;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetVoicePortalGreetingSelection()
    {
        $this->voicePortalGreetingSelection = null;
        return $this;
    }

    /**
     * Getter for voicePortalGreetingFileDescription
     *
     * @return string
     */
    public function getVoicePortalGreetingFileDescription()
    {
        return $this->voicePortalGreetingFileDescription instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->voicePortalGreetingFileDescription;
    }

    /**
     * Setter for voicePortalGreetingFileDescription
     *
     * @param string $voicePortalGreetingFileDescription
     * @return $this
     */
    public function setVoicePortalGreetingFileDescription($voicePortalGreetingFileDescription)
    {
        $this->voicePortalGreetingFileDescription = $voicePortalGreetingFileDescription;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetVoicePortalGreetingFileDescription()
    {
        $this->voicePortalGreetingFileDescription = null;
        return $this;
    }

    /**
     * Getter for voicePortalGreetingMediaFileType
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\MediaFileType
     */
    public function getVoicePortalGreetingMediaFileType()
    {
        return $this->voicePortalGreetingMediaFileType instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->voicePortalGreetingMediaFileType;
    }

    /**
     * Setter for voicePortalGreetingMediaFileType
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\MediaFileType $voicePortalGreetingMediaFileType
     * @return $this
     */
    public function setVoicePortalGreetingMediaFileType(\CWM\BroadWorksConnector\Ocip\Models\MediaFileType $voicePortalGreetingMediaFileType)
    {
        $this->voicePortalGreetingMediaFileType = $voicePortalGreetingMediaFileType;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetVoicePortalGreetingMediaFileType()
    {
        $this->voicePortalGreetingMediaFileType = null;
        return $this;
    }

    /**
     * Getter for voiceMessagingGreetingSelection
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\VoiceMessagingBrandingSelection
     */
    public function getVoiceMessagingGreetingSelection()
    {
        return $this->voiceMessagingGreetingSelection instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->voiceMessagingGreetingSelection;
    }

    /**
     * Setter for voiceMessagingGreetingSelection
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\VoiceMessagingBrandingSelection $voiceMessagingGreetingSelection
     * @return $this
     */
    public function setVoiceMessagingGreetingSelection(\CWM\BroadWorksConnector\Ocip\Models\VoiceMessagingBrandingSelection $voiceMessagingGreetingSelection)
    {
        $this->voiceMessagingGreetingSelection = $voiceMessagingGreetingSelection;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetVoiceMessagingGreetingSelection()
    {
        $this->voiceMessagingGreetingSelection = null;
        return $this;
    }

    /**
     * Getter for voiceMessagingGreetingFileDescription
     *
     * @return string
     */
    public function getVoiceMessagingGreetingFileDescription()
    {
        return $this->voiceMessagingGreetingFileDescription instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->voiceMessagingGreetingFileDescription;
    }

    /**
     * Setter for voiceMessagingGreetingFileDescription
     *
     * @param string $voiceMessagingGreetingFileDescription
     * @return $this
     */
    public function setVoiceMessagingGreetingFileDescription($voiceMessagingGreetingFileDescription)
    {
        $this->voiceMessagingGreetingFileDescription = $voiceMessagingGreetingFileDescription;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetVoiceMessagingGreetingFileDescription()
    {
        $this->voiceMessagingGreetingFileDescription = null;
        return $this;
    }

    /**
     * Getter for voiceMessagingGreetingMediaFileType
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\MediaFileType
     */
    public function getVoiceMessagingGreetingMediaFileType()
    {
        return $this->voiceMessagingGreetingMediaFileType instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->voiceMessagingGreetingMediaFileType;
    }

    /**
     * Setter for voiceMessagingGreetingMediaFileType
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\MediaFileType $voiceMessagingGreetingMediaFileType
     * @return $this
     */
    public function setVoiceMessagingGreetingMediaFileType(\CWM\BroadWorksConnector\Ocip\Models\MediaFileType $voiceMessagingGreetingMediaFileType)
    {
        $this->voiceMessagingGreetingMediaFileType = $voiceMessagingGreetingMediaFileType;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetVoiceMessagingGreetingMediaFileType()
    {
        $this->voiceMessagingGreetingMediaFileType = null;
        return $this;
    }


}

