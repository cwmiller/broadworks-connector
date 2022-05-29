<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupVoiceMessagingGroupModifyVoicePortalBrandingExecutionServerRequest
 *
 * Modify the group's voice portal branding settings.
 *                 The response is either a SuccessResponse or an ErrorResponse.
 *                 Engineering Note: This command can only be executed from the Execution Server
 *
 * @see SuccessResponse
 * @see ErrorResponse
 * @Groups [{"id":"ac6f79eeb503f2d20b15e4c8d21d7077:52","type":"sequence"}]
 */
class GroupVoiceMessagingGroupModifyVoicePortalBrandingExecutionServerRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName serviceProviderId
     * @Type string
     * @Group ac6f79eeb503f2d20b15e4c8d21d7077:52
     * @MinLength 1
     * @MaxLength 30
     * @var string|null
     */
    protected $serviceProviderId = null;

    /**
     * @ElementName groupId
     * @Type string
     * @Group ac6f79eeb503f2d20b15e4c8d21d7077:52
     * @MinLength 1
     * @MaxLength 30
     * @var string|null
     */
    protected $groupId = null;

    /**
     * @ElementName voicePortalGreetingSelection
     * @Type \CWM\BroadWorksConnector\Ocip\Models\VoiceMessagingBrandingSelection
     * @Optional
     * @Group ac6f79eeb503f2d20b15e4c8d21d7077:52
     * @var \CWM\BroadWorksConnector\Ocip\Models\VoiceMessagingBrandingSelection|null
     */
    protected $voicePortalGreetingSelection = null;

    /**
     * @ElementName voicePortalGreetingFile
     * @Type \CWM\BroadWorksConnector\Ocip\Models\LabeledFileNameResource
     * @Optional
     * @Group ac6f79eeb503f2d20b15e4c8d21d7077:52
     * @var \CWM\BroadWorksConnector\Ocip\Models\LabeledFileNameResource|null
     */
    protected $voicePortalGreetingFile = null;

    /**
     * @ElementName voiceMessagingGreetingSelection
     * @Type \CWM\BroadWorksConnector\Ocip\Models\VoiceMessagingBrandingSelection
     * @Optional
     * @Group ac6f79eeb503f2d20b15e4c8d21d7077:52
     * @var \CWM\BroadWorksConnector\Ocip\Models\VoiceMessagingBrandingSelection|null
     */
    protected $voiceMessagingGreetingSelection = null;

    /**
     * @ElementName voiceMessagingGreetingFile
     * @Type \CWM\BroadWorksConnector\Ocip\Models\LabeledFileNameResource
     * @Optional
     * @Group ac6f79eeb503f2d20b15e4c8d21d7077:52
     * @var \CWM\BroadWorksConnector\Ocip\Models\LabeledFileNameResource|null
     */
    protected $voiceMessagingGreetingFile = null;

    /**
     * Getter for serviceProviderId
     *
     * @return string
     */
    public function getServiceProviderId()
    {
        return $this->serviceProviderId instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->serviceProviderId;
    }

    /**
     * Setter for serviceProviderId
     *
     * @param string $serviceProviderId
     * @return $this
     */
    public function setServiceProviderId($serviceProviderId)
    {
        $this->serviceProviderId = $serviceProviderId;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetServiceProviderId()
    {
        $this->serviceProviderId = null;
        return $this;
    }

    /**
     * Getter for groupId
     *
     * @return string
     */
    public function getGroupId()
    {
        return $this->groupId instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->groupId;
    }

    /**
     * Setter for groupId
     *
     * @param string $groupId
     * @return $this
     */
    public function setGroupId($groupId)
    {
        $this->groupId = $groupId;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetGroupId()
    {
        $this->groupId = null;
        return $this;
    }

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
     * Getter for voicePortalGreetingFile
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\LabeledFileNameResource
     */
    public function getVoicePortalGreetingFile()
    {
        return $this->voicePortalGreetingFile instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->voicePortalGreetingFile;
    }

    /**
     * Setter for voicePortalGreetingFile
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\LabeledFileNameResource $voicePortalGreetingFile
     * @return $this
     */
    public function setVoicePortalGreetingFile(\CWM\BroadWorksConnector\Ocip\Models\LabeledFileNameResource $voicePortalGreetingFile)
    {
        $this->voicePortalGreetingFile = $voicePortalGreetingFile;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetVoicePortalGreetingFile()
    {
        $this->voicePortalGreetingFile = null;
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
     * Getter for voiceMessagingGreetingFile
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\LabeledFileNameResource
     */
    public function getVoiceMessagingGreetingFile()
    {
        return $this->voiceMessagingGreetingFile instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->voiceMessagingGreetingFile;
    }

    /**
     * Setter for voiceMessagingGreetingFile
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\LabeledFileNameResource $voiceMessagingGreetingFile
     * @return $this
     */
    public function setVoiceMessagingGreetingFile(\CWM\BroadWorksConnector\Ocip\Models\LabeledFileNameResource $voiceMessagingGreetingFile)
    {
        $this->voiceMessagingGreetingFile = $voiceMessagingGreetingFile;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetVoiceMessagingGreetingFile()
    {
        $this->voiceMessagingGreetingFile = null;
        return $this;
    }


}

