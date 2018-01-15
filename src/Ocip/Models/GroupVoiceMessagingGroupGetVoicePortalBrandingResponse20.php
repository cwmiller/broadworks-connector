<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupVoiceMessagingGroupGetVoicePortalBrandingResponse20
 *
 * Response to the GroupVoiceMessagingGroupGetVoicePortalBrandingRequest20.
 */
class GroupVoiceMessagingGroupGetVoicePortalBrandingResponse20 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName voicePortalGreetingSelection
     * @var string|null
     */
    private $voicePortalGreetingSelection = null;

    /**
     * @ElementName voicePortalGreetingFile
     * @var \CWM\BroadWorksConnector\Ocip\Models\AnnouncementFileKey|null
     */
    private $voicePortalGreetingFile = null;

    /**
     * @ElementName voiceMessagingGreetingSelection
     * @var string|null
     */
    private $voiceMessagingGreetingSelection = null;

    /**
     * @ElementName voiceMessagingGreetingFile
     * @var \CWM\BroadWorksConnector\Ocip\Models\AnnouncementFileKey|null
     */
    private $voiceMessagingGreetingFile = null;

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
     * Getter for voicePortalGreetingFile
     *
     * @ElementName voicePortalGreetingFile
     * @return \CWM\BroadWorksConnector\Ocip\Models\AnnouncementFileKey|null
     */
    public function getVoicePortalGreetingFile()
    {
        return $this->voicePortalGreetingFile;
    }

    /**
     * Setter for voicePortalGreetingFile
     *
     * @ElementName voicePortalGreetingFile
     * @param \CWM\BroadWorksConnector\Ocip\Models\AnnouncementFileKey|null $voicePortalGreetingFile
     * @return $this
     */
    public function setVoicePortalGreetingFile($voicePortalGreetingFile)
    {
        $this->voicePortalGreetingFile = $voicePortalGreetingFile;
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
     * Getter for voiceMessagingGreetingFile
     *
     * @ElementName voiceMessagingGreetingFile
     * @return \CWM\BroadWorksConnector\Ocip\Models\AnnouncementFileKey|null
     */
    public function getVoiceMessagingGreetingFile()
    {
        return $this->voiceMessagingGreetingFile;
    }

    /**
     * Setter for voiceMessagingGreetingFile
     *
     * @ElementName voiceMessagingGreetingFile
     * @param \CWM\BroadWorksConnector\Ocip\Models\AnnouncementFileKey|null $voiceMessagingGreetingFile
     * @return $this
     */
    public function setVoiceMessagingGreetingFile($voiceMessagingGreetingFile)
    {
        $this->voiceMessagingGreetingFile = $voiceMessagingGreetingFile;
        return $this;
    }


}

