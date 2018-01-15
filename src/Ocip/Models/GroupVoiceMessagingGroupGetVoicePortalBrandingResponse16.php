<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupVoiceMessagingGroupGetVoicePortalBrandingResponse16
 *
 * Response to the GroupVoiceMessagingGroupGetVoicePortalBrandingRequest16.
 */
class GroupVoiceMessagingGroupGetVoicePortalBrandingResponse16 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
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
     * @ElementName voicePortalGreetingMediaType
     * @var string|null
     */
    private $voicePortalGreetingMediaType = null;

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
     * @ElementName voiceMessagingGreetingMediaType
     * @var string|null
     */
    private $voiceMessagingGreetingMediaType = null;

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
     * Getter for voicePortalGreetingMediaType
     *
     * @ElementName voicePortalGreetingMediaType
     * @return string|null
     */
    public function getVoicePortalGreetingMediaType()
    {
        return $this->voicePortalGreetingMediaType;
    }

    /**
     * Setter for voicePortalGreetingMediaType
     *
     * @ElementName voicePortalGreetingMediaType
     * @param string|null $voicePortalGreetingMediaType
     * @return $this
     */
    public function setVoicePortalGreetingMediaType($voicePortalGreetingMediaType)
    {
        $this->voicePortalGreetingMediaType = $voicePortalGreetingMediaType;
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
     * Getter for voiceMessagingGreetingMediaType
     *
     * @ElementName voiceMessagingGreetingMediaType
     * @return string|null
     */
    public function getVoiceMessagingGreetingMediaType()
    {
        return $this->voiceMessagingGreetingMediaType;
    }

    /**
     * Setter for voiceMessagingGreetingMediaType
     *
     * @ElementName voiceMessagingGreetingMediaType
     * @param string|null $voiceMessagingGreetingMediaType
     * @return $this
     */
    public function setVoiceMessagingGreetingMediaType($voiceMessagingGreetingMediaType)
    {
        $this->voiceMessagingGreetingMediaType = $voiceMessagingGreetingMediaType;
        return $this;
    }


}

