<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * ServiceProviderVoiceMessagingGroupGetVoicePortalBrandingResponse16
 *
 * Response to the
 * ServiceProviderVoiceMessagingGroupGetVoicePortalBrandingRequest16.
 *
 * @see ServiceProviderVoiceMessagingGroupGetVoicePortalBrandingRequest16
 */
class ServiceProviderVoiceMessagingGroupGetVoicePortalBrandingResponse16 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName voicePortalGreetingSelection
     * @var \CWM\BroadWorksConnector\Ocip\Models\VoiceMessagingBrandingSelection|null
     */
    private $voicePortalGreetingSelection = null;

    /**
     * @ElementName voicePortalGreetingFileDescription
     * @var string|null
     */
    private $voicePortalGreetingFileDescription = null;

    /**
     * @ElementName voicePortalGreetingMediaFileType
     * @var \CWM\BroadWorksConnector\Ocip\Models\MediaFileType|null
     */
    private $voicePortalGreetingMediaFileType = null;

    /**
     * @ElementName voiceMessagingGreetingSelection
     * @var \CWM\BroadWorksConnector\Ocip\Models\VoiceMessagingBrandingSelection|null
     */
    private $voiceMessagingGreetingSelection = null;

    /**
     * @ElementName voiceMessagingGreetingFileDescription
     * @var string|null
     */
    private $voiceMessagingGreetingFileDescription = null;

    /**
     * @ElementName voiceMessagingGreetingMediaFileType
     * @var \CWM\BroadWorksConnector\Ocip\Models\MediaFileType|null
     */
    private $voiceMessagingGreetingMediaFileType = null;

    /**
     * Getter for voicePortalGreetingSelection
     *
     * @ElementName voicePortalGreetingSelection
     * @return \CWM\BroadWorksConnector\Ocip\Models\VoiceMessagingBrandingSelection|null
     */
    public function getVoicePortalGreetingSelection()
    {
        return $this->voicePortalGreetingSelection;
    }

    /**
     * Setter for voicePortalGreetingSelection
     *
     * @ElementName voicePortalGreetingSelection
     * @param \CWM\BroadWorksConnector\Ocip\Models\VoiceMessagingBrandingSelection|null $voicePortalGreetingSelection
     * @return $this
     */
    public function setVoicePortalGreetingSelection(\CWM\BroadWorksConnector\Ocip\Models\VoiceMessagingBrandingSelection $voicePortalGreetingSelection)
    {
        $this->voicePortalGreetingSelection = $voicePortalGreetingSelection;
        return $this;
    }

    /**
     * Getter for voicePortalGreetingFileDescription
     *
     * @ElementName voicePortalGreetingFileDescription
     * @return string|null
     */
    public function getVoicePortalGreetingFileDescription()
    {
        return $this->voicePortalGreetingFileDescription;
    }

    /**
     * Setter for voicePortalGreetingFileDescription
     *
     * @ElementName voicePortalGreetingFileDescription
     * @param string|null $voicePortalGreetingFileDescription
     * @return $this
     */
    public function setVoicePortalGreetingFileDescription($voicePortalGreetingFileDescription)
    {
        $this->voicePortalGreetingFileDescription = $voicePortalGreetingFileDescription;
        return $this;
    }

    /**
     * Getter for voicePortalGreetingMediaFileType
     *
     * @ElementName voicePortalGreetingMediaFileType
     * @return \CWM\BroadWorksConnector\Ocip\Models\MediaFileType|null
     */
    public function getVoicePortalGreetingMediaFileType()
    {
        return $this->voicePortalGreetingMediaFileType;
    }

    /**
     * Setter for voicePortalGreetingMediaFileType
     *
     * @ElementName voicePortalGreetingMediaFileType
     * @param \CWM\BroadWorksConnector\Ocip\Models\MediaFileType|null $voicePortalGreetingMediaFileType
     * @return $this
     */
    public function setVoicePortalGreetingMediaFileType(\CWM\BroadWorksConnector\Ocip\Models\MediaFileType $voicePortalGreetingMediaFileType)
    {
        $this->voicePortalGreetingMediaFileType = $voicePortalGreetingMediaFileType;
        return $this;
    }

    /**
     * Getter for voiceMessagingGreetingSelection
     *
     * @ElementName voiceMessagingGreetingSelection
     * @return \CWM\BroadWorksConnector\Ocip\Models\VoiceMessagingBrandingSelection|null
     */
    public function getVoiceMessagingGreetingSelection()
    {
        return $this->voiceMessagingGreetingSelection;
    }

    /**
     * Setter for voiceMessagingGreetingSelection
     *
     * @ElementName voiceMessagingGreetingSelection
     * @param \CWM\BroadWorksConnector\Ocip\Models\VoiceMessagingBrandingSelection|null $voiceMessagingGreetingSelection
     * @return $this
     */
    public function setVoiceMessagingGreetingSelection(\CWM\BroadWorksConnector\Ocip\Models\VoiceMessagingBrandingSelection $voiceMessagingGreetingSelection)
    {
        $this->voiceMessagingGreetingSelection = $voiceMessagingGreetingSelection;
        return $this;
    }

    /**
     * Getter for voiceMessagingGreetingFileDescription
     *
     * @ElementName voiceMessagingGreetingFileDescription
     * @return string|null
     */
    public function getVoiceMessagingGreetingFileDescription()
    {
        return $this->voiceMessagingGreetingFileDescription;
    }

    /**
     * Setter for voiceMessagingGreetingFileDescription
     *
     * @ElementName voiceMessagingGreetingFileDescription
     * @param string|null $voiceMessagingGreetingFileDescription
     * @return $this
     */
    public function setVoiceMessagingGreetingFileDescription($voiceMessagingGreetingFileDescription)
    {
        $this->voiceMessagingGreetingFileDescription = $voiceMessagingGreetingFileDescription;
        return $this;
    }

    /**
     * Getter for voiceMessagingGreetingMediaFileType
     *
     * @ElementName voiceMessagingGreetingMediaFileType
     * @return \CWM\BroadWorksConnector\Ocip\Models\MediaFileType|null
     */
    public function getVoiceMessagingGreetingMediaFileType()
    {
        return $this->voiceMessagingGreetingMediaFileType;
    }

    /**
     * Setter for voiceMessagingGreetingMediaFileType
     *
     * @ElementName voiceMessagingGreetingMediaFileType
     * @param \CWM\BroadWorksConnector\Ocip\Models\MediaFileType|null $voiceMessagingGreetingMediaFileType
     * @return $this
     */
    public function setVoiceMessagingGreetingMediaFileType(\CWM\BroadWorksConnector\Ocip\Models\MediaFileType $voiceMessagingGreetingMediaFileType)
    {
        $this->voiceMessagingGreetingMediaFileType = $voiceMessagingGreetingMediaFileType;
        return $this;
    }


}

