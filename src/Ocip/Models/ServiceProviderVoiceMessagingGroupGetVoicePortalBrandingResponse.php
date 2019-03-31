<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * ServiceProviderVoiceMessagingGroupGetVoicePortalBrandingResponse
 *
 * Response to the ServiceProviderVoiceMessagingGroupGetVoicePortalBrandingRequest.
 *                 Replaced By: ServiceProviderVoiceMessagingGroupGetVoicePortalBrandingResponse16
 *
 * @see ServiceProviderVoiceMessagingGroupGetVoicePortalBrandingRequest
 * @see ServiceProviderVoiceMessagingGroupGetVoicePortalBrandingResponse16
 * @Groups [{"id":"ab0042aa512abc10edb3c55e4b416b0b:9849","type":"sequence"}]
 */
class ServiceProviderVoiceMessagingGroupGetVoicePortalBrandingResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName voicePortalGreetingSelection
     * @Type \CWM\BroadWorksConnector\Ocip\Models\VoiceMessagingBrandingSelection
     * @Group ab0042aa512abc10edb3c55e4b416b0b:9849
     * @var \CWM\BroadWorksConnector\Ocip\Models\VoiceMessagingBrandingSelection|null
     */
    private $voicePortalGreetingSelection = null;

    /**
     * @ElementName voicePortalGreetingFileDescription
     * @Type string
     * @Optional
     * @Group ab0042aa512abc10edb3c55e4b416b0b:9849
     * @MinLength 1
     * @MaxLength 256
     * @var string|null
     */
    private $voicePortalGreetingFileDescription = null;

    /**
     * @ElementName voiceMessagingGreetingSelection
     * @Type \CWM\BroadWorksConnector\Ocip\Models\VoiceMessagingBrandingSelection
     * @Group ab0042aa512abc10edb3c55e4b416b0b:9849
     * @var \CWM\BroadWorksConnector\Ocip\Models\VoiceMessagingBrandingSelection|null
     */
    private $voiceMessagingGreetingSelection = null;

    /**
     * @ElementName voiceMessagingGreetingFileDescription
     * @Type string
     * @Optional
     * @Group ab0042aa512abc10edb3c55e4b416b0b:9849
     * @MinLength 1
     * @MaxLength 256
     * @var string|null
     */
    private $voiceMessagingGreetingFileDescription = null;

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


}

