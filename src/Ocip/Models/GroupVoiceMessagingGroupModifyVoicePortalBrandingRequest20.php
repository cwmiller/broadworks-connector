<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupVoiceMessagingGroupModifyVoicePortalBrandingRequest20
 *
 * Modify the group's voice portal branding settings.
 *         The response is either a SuccessResponse or an ErrorResponse.
 *
 * @see SuccessResponse
 * @see ErrorResponse
 */
class GroupVoiceMessagingGroupModifyVoicePortalBrandingRequest20 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName serviceProviderId
     * @var string|null
     */
    private $serviceProviderId = null;

    /**
     * @ElementName groupId
     * @var string|null
     */
    private $groupId = null;

    /**
     * @ElementName voicePortalGreetingSelection
     * @var string|null
     */
    private $voicePortalGreetingSelection = null;

    /**
     * @ElementName voicePortalGreetingFile
     * @Nillable
     * @var \CWM\BroadWorksConnector\Ocip\Models\AnnouncementFileKey|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $voicePortalGreetingFile = null;

    /**
     * @ElementName voiceMessagingGreetingSelection
     * @var string|null
     */
    private $voiceMessagingGreetingSelection = null;

    /**
     * @ElementName voiceMessagingGreetingFile
     * @Nillable
     * @var \CWM\BroadWorksConnector\Ocip\Models\AnnouncementFileKey|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $voiceMessagingGreetingFile = null;

    /**
     * Getter for serviceProviderId
     *
     * @ElementName serviceProviderId
     * @return string|null
     */
    public function getServiceProviderId()
    {
        return $this->serviceProviderId;
    }

    /**
     * Setter for serviceProviderId
     *
     * @ElementName serviceProviderId
     * @param string|null $serviceProviderId
     * @return $this
     */
    public function setServiceProviderId($serviceProviderId)
    {
        $this->serviceProviderId = $serviceProviderId;
        return $this;
    }

    /**
     * Getter for groupId
     *
     * @ElementName groupId
     * @return string|null
     */
    public function getGroupId()
    {
        return $this->groupId;
    }

    /**
     * Setter for groupId
     *
     * @ElementName groupId
     * @param string|null $groupId
     * @return $this
     */
    public function setGroupId($groupId)
    {
        $this->groupId = $groupId;
        return $this;
    }

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
     * @Nillable
     * @return \CWM\BroadWorksConnector\Ocip\Models\AnnouncementFileKey|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    public function getVoicePortalGreetingFile()
    {
        return $this->voicePortalGreetingFile;
    }

    /**
     * Setter for voicePortalGreetingFile
     *
     * @ElementName voicePortalGreetingFile
     * @Nillable
     * @param \CWM\BroadWorksConnector\Ocip\Models\AnnouncementFileKey|null|\CWM\BroadWorksConnector\Ocip\Nil $voicePortalGreetingFile
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
     * @Nillable
     * @return \CWM\BroadWorksConnector\Ocip\Models\AnnouncementFileKey|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    public function getVoiceMessagingGreetingFile()
    {
        return $this->voiceMessagingGreetingFile;
    }

    /**
     * Setter for voiceMessagingGreetingFile
     *
     * @ElementName voiceMessagingGreetingFile
     * @Nillable
     * @param \CWM\BroadWorksConnector\Ocip\Models\AnnouncementFileKey|null|\CWM\BroadWorksConnector\Ocip\Nil $voiceMessagingGreetingFile
     * @return $this
     */
    public function setVoiceMessagingGreetingFile($voiceMessagingGreetingFile)
    {
        $this->voiceMessagingGreetingFile = $voiceMessagingGreetingFile;
        return $this;
    }


}

