<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupVoiceMessagingGroupGetVoicePortalBrandingResponse16
 *
 * Response to the GroupVoiceMessagingGroupGetVoicePortalBrandingRequest16.
 *         
 *         Replaced by: GroupVoiceMessagingGroupGetVoicePortalBrandingResponse20 in AS data mode
 *
 * @see GroupVoiceMessagingGroupGetVoicePortalBrandingRequest16
 * @see GroupVoiceMessagingGroupGetVoicePortalBrandingResponse20
 * @Groups [{"id":"bb12a3589ab4748963f28f7ac9310f70:2077","type":"sequence"}]
 */
class GroupVoiceMessagingGroupGetVoicePortalBrandingResponse16 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName voicePortalGreetingSelection
     * @Type \CWM\BroadWorksConnector\Ocip\Models\VoiceMessagingBrandingSelection
     * @Group bb12a3589ab4748963f28f7ac9310f70:2077
     * @var \CWM\BroadWorksConnector\Ocip\Models\VoiceMessagingBrandingSelection|null
     */
    private $voicePortalGreetingSelection = null;

    /**
     * @ElementName voicePortalGreetingFileDescription
     * @Type string
     * @Optional
     * @Group bb12a3589ab4748963f28f7ac9310f70:2077
     * @var string|null
     */
    private $voicePortalGreetingFileDescription = null;

    /**
     * @ElementName voicePortalGreetingMediaType
     * @Type \CWM\BroadWorksConnector\Ocip\Models\MediaFileType
     * @Optional
     * @Group bb12a3589ab4748963f28f7ac9310f70:2077
     * @var \CWM\BroadWorksConnector\Ocip\Models\MediaFileType|null
     */
    private $voicePortalGreetingMediaType = null;

    /**
     * @ElementName voiceMessagingGreetingSelection
     * @Type \CWM\BroadWorksConnector\Ocip\Models\VoiceMessagingBrandingSelection
     * @Group bb12a3589ab4748963f28f7ac9310f70:2077
     * @var \CWM\BroadWorksConnector\Ocip\Models\VoiceMessagingBrandingSelection|null
     */
    private $voiceMessagingGreetingSelection = null;

    /**
     * @ElementName voiceMessagingGreetingFileDescription
     * @Type string
     * @Optional
     * @Group bb12a3589ab4748963f28f7ac9310f70:2077
     * @var string|null
     */
    private $voiceMessagingGreetingFileDescription = null;

    /**
     * @ElementName voiceMessagingGreetingMediaType
     * @Type \CWM\BroadWorksConnector\Ocip\Models\MediaFileType
     * @Optional
     * @Group bb12a3589ab4748963f28f7ac9310f70:2077
     * @var \CWM\BroadWorksConnector\Ocip\Models\MediaFileType|null
     */
    private $voiceMessagingGreetingMediaType = null;

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
     * Getter for voicePortalGreetingMediaType
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\MediaFileType
     */
    public function getVoicePortalGreetingMediaType()
    {
        return $this->voicePortalGreetingMediaType instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->voicePortalGreetingMediaType;
    }

    /**
     * Setter for voicePortalGreetingMediaType
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\MediaFileType $voicePortalGreetingMediaType
     * @return $this
     */
    public function setVoicePortalGreetingMediaType(\CWM\BroadWorksConnector\Ocip\Models\MediaFileType $voicePortalGreetingMediaType)
    {
        $this->voicePortalGreetingMediaType = $voicePortalGreetingMediaType;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetVoicePortalGreetingMediaType()
    {
        $this->voicePortalGreetingMediaType = null;
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
     * Getter for voiceMessagingGreetingMediaType
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\MediaFileType
     */
    public function getVoiceMessagingGreetingMediaType()
    {
        return $this->voiceMessagingGreetingMediaType instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->voiceMessagingGreetingMediaType;
    }

    /**
     * Setter for voiceMessagingGreetingMediaType
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\MediaFileType $voiceMessagingGreetingMediaType
     * @return $this
     */
    public function setVoiceMessagingGreetingMediaType(\CWM\BroadWorksConnector\Ocip\Models\MediaFileType $voiceMessagingGreetingMediaType)
    {
        $this->voiceMessagingGreetingMediaType = $voiceMessagingGreetingMediaType;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetVoiceMessagingGreetingMediaType()
    {
        $this->voiceMessagingGreetingMediaType = null;
        return $this;
    }


}

