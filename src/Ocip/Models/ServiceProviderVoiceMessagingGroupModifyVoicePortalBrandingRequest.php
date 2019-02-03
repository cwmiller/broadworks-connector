<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * ServiceProviderVoiceMessagingGroupModifyVoicePortalBrandingRequest
 *
 * Modify the service provider's voice portal branding settings.
 *                 The response is either a SuccessResponse or an ErrorResponse.
 *                 Replaced By: ServiceProviderVoiceMessagingGroupModifyVoicePortalBrandingRequest16
 *
 * @see SuccessResponse
 * @see ErrorResponse
 * @see ServiceProviderVoiceMessagingGroupModifyVoicePortalBrandingRequest16
 * @Groups [{"id":"ab0042aa512abc10edb3c55e4b416b0b:9869","type":"sequence"}]
 */
class ServiceProviderVoiceMessagingGroupModifyVoicePortalBrandingRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName serviceProviderId
     * @Type string
     * @Group ab0042aa512abc10edb3c55e4b416b0b:9869
     * @var string|null
     */
    private $serviceProviderId = null;

    /**
     * @ElementName voicePortalGreetingSelection
     * @Type \CWM\BroadWorksConnector\Ocip\Models\VoiceMessagingBrandingSelection
     * @Optional
     * @Group ab0042aa512abc10edb3c55e4b416b0b:9869
     * @var \CWM\BroadWorksConnector\Ocip\Models\VoiceMessagingBrandingSelection|null
     */
    private $voicePortalGreetingSelection = null;

    /**
     * @ElementName voicePortalGreetingFile
     * @Type \CWM\BroadWorksConnector\Ocip\Models\LabeledFileResource
     * @Optional
     * @Group ab0042aa512abc10edb3c55e4b416b0b:9869
     * @var \CWM\BroadWorksConnector\Ocip\Models\LabeledFileResource|null
     */
    private $voicePortalGreetingFile = null;

    /**
     * @ElementName voiceMessagingGreetingSelection
     * @Type \CWM\BroadWorksConnector\Ocip\Models\VoiceMessagingBrandingSelection
     * @Optional
     * @Group ab0042aa512abc10edb3c55e4b416b0b:9869
     * @var \CWM\BroadWorksConnector\Ocip\Models\VoiceMessagingBrandingSelection|null
     */
    private $voiceMessagingGreetingSelection = null;

    /**
     * @ElementName voiceMessagingGreetingFile
     * @Type \CWM\BroadWorksConnector\Ocip\Models\LabeledFileResource
     * @Optional
     * @Group ab0042aa512abc10edb3c55e4b416b0b:9869
     * @var \CWM\BroadWorksConnector\Ocip\Models\LabeledFileResource|null
     */
    private $voiceMessagingGreetingFile = null;

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
     * @return \CWM\BroadWorksConnector\Ocip\Models\LabeledFileResource
     */
    public function getVoicePortalGreetingFile()
    {
        return $this->voicePortalGreetingFile instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->voicePortalGreetingFile;
    }

    /**
     * Setter for voicePortalGreetingFile
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\LabeledFileResource $voicePortalGreetingFile
     * @return $this
     */
    public function setVoicePortalGreetingFile(\CWM\BroadWorksConnector\Ocip\Models\LabeledFileResource $voicePortalGreetingFile)
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
     * @return \CWM\BroadWorksConnector\Ocip\Models\LabeledFileResource
     */
    public function getVoiceMessagingGreetingFile()
    {
        return $this->voiceMessagingGreetingFile instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->voiceMessagingGreetingFile;
    }

    /**
     * Setter for voiceMessagingGreetingFile
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\LabeledFileResource $voiceMessagingGreetingFile
     * @return $this
     */
    public function setVoiceMessagingGreetingFile(\CWM\BroadWorksConnector\Ocip\Models\LabeledFileResource $voiceMessagingGreetingFile)
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

