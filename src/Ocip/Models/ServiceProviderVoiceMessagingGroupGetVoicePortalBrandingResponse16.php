<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * ServiceProviderVoiceMessagingGroupGetVoicePortalBrandingResponse16
 *
 * Response to the
 * ServiceProviderVoiceMessagingGroupGetVoicePortalBrandingRequest16.
 */
class ServiceProviderVoiceMessagingGroupGetVoicePortalBrandingResponse16 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName voicePortalGreetingSelection
     * @var string|null
     */
    private $voicePortalGreetingSelection = null;

    /**
     * @ElementName voicePortalGreetingFileDescription
     * @var string|null
     */
    private $voicePortalGreetingFileDescription = null;

    /**
     * @ElementName voicePortalGreetingMediaFileType
     * @var string|null
     */
    private $voicePortalGreetingMediaFileType = null;

    /**
     * @ElementName voiceMessagingGreetingSelection
     * @var string|null
     */
    private $voiceMessagingGreetingSelection = null;

    /**
     * @ElementName voiceMessagingGreetingFileDescription
     * @var string|null
     */
    private $voiceMessagingGreetingFileDescription = null;

    /**
     * @ElementName voiceMessagingGreetingMediaFileType
     * @var string|null
     */
    private $voiceMessagingGreetingMediaFileType = null;

    /**
     * Getter for voicePortalGreetingSelection
     *
     * @ElementName voicePortalGreetingSelection
     * @return string|null
     */
    public function getVoicePortalGreetingSelection()
    {
        return $this->voicePortalGreetingSelection;
    }

    /**
     * Setter for voicePortalGreetingSelection
     *
     * @ElementName voicePortalGreetingSelection
     * @param string|null $voicePortalGreetingSelection
     * @return $this
     */
    public function setVoicePortalGreetingSelection($voicePortalGreetingSelection)
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
     * @return string|null
     */
    public function getVoicePortalGreetingMediaFileType()
    {
        return $this->voicePortalGreetingMediaFileType;
    }

    /**
     * Setter for voicePortalGreetingMediaFileType
     *
     * @ElementName voicePortalGreetingMediaFileType
     * @param string|null $voicePortalGreetingMediaFileType
     * @return $this
     */
    public function setVoicePortalGreetingMediaFileType($voicePortalGreetingMediaFileType)
    {
        $this->voicePortalGreetingMediaFileType = $voicePortalGreetingMediaFileType;
        return $this;
    }

    /**
     * Getter for voiceMessagingGreetingSelection
     *
     * @ElementName voiceMessagingGreetingSelection
     * @return string|null
     */
    public function getVoiceMessagingGreetingSelection()
    {
        return $this->voiceMessagingGreetingSelection;
    }

    /**
     * Setter for voiceMessagingGreetingSelection
     *
     * @ElementName voiceMessagingGreetingSelection
     * @param string|null $voiceMessagingGreetingSelection
     * @return $this
     */
    public function setVoiceMessagingGreetingSelection($voiceMessagingGreetingSelection)
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
     * @return string|null
     */
    public function getVoiceMessagingGreetingMediaFileType()
    {
        return $this->voiceMessagingGreetingMediaFileType;
    }

    /**
     * Setter for voiceMessagingGreetingMediaFileType
     *
     * @ElementName voiceMessagingGreetingMediaFileType
     * @param string|null $voiceMessagingGreetingMediaFileType
     * @return $this
     */
    public function setVoiceMessagingGreetingMediaFileType($voiceMessagingGreetingMediaFileType)
    {
        $this->voiceMessagingGreetingMediaFileType = $voiceMessagingGreetingMediaFileType;
        return $this;
    }


}

