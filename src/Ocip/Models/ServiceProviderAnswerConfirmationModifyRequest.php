<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * ServiceProviderAnswerConfirmationModifyRequest
 *
 * Modify a service provider or enterprise's answer confirmation settings.
 *         The response is either a SuccessResponse or an ErrorResponse.
 *         Replaced By: ServiceProviderAnswerConfirmationModifyRequest16
 *
 * @see SuccessResponse
 * @see ErrorResponse
 * @see ServiceProviderAnswerConfirmationModifyRequest16
 * @Groups [{"id":"ab0042aa512abc10edb3c55e4b416b0b:17273","type":"sequence"}]
 */
class ServiceProviderAnswerConfirmationModifyRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName serviceProviderId
     * @Type string
     * @Group ab0042aa512abc10edb3c55e4b416b0b:17273
     * @MinLength 1
     * @MaxLength 30
     * @var string|null
     */
    private $serviceProviderId = null;

    /**
     * @ElementName announcementMessageSelection
     * @Type \CWM\BroadWorksConnector\Ocip\Models\AnswerConfirmationAnnouncementSelection
     * @Optional
     * @Group ab0042aa512abc10edb3c55e4b416b0b:17273
     * @var \CWM\BroadWorksConnector\Ocip\Models\AnswerConfirmationAnnouncementSelection|null
     */
    private $announcementMessageSelection = null;

    /**
     * @ElementName confirmationMessageAudioFile
     * @Type \CWM\BroadWorksConnector\Ocip\Models\LabeledFileResource
     * @Optional
     * @Group ab0042aa512abc10edb3c55e4b416b0b:17273
     * @var \CWM\BroadWorksConnector\Ocip\Models\LabeledFileResource|null
     */
    private $confirmationMessageAudioFile = null;

    /**
     * @ElementName confirmationTimoutSeconds
     * @Type int
     * @Optional
     * @Group ab0042aa512abc10edb3c55e4b416b0b:17273
     * @MinInclusive 2
     * @MaxInclusive 30
     * @var int|null
     */
    private $confirmationTimoutSeconds = null;

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
     * Getter for announcementMessageSelection
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\AnswerConfirmationAnnouncementSelection
     */
    public function getAnnouncementMessageSelection()
    {
        return $this->announcementMessageSelection instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->announcementMessageSelection;
    }

    /**
     * Setter for announcementMessageSelection
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\AnswerConfirmationAnnouncementSelection $announcementMessageSelection
     * @return $this
     */
    public function setAnnouncementMessageSelection(\CWM\BroadWorksConnector\Ocip\Models\AnswerConfirmationAnnouncementSelection $announcementMessageSelection)
    {
        $this->announcementMessageSelection = $announcementMessageSelection;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetAnnouncementMessageSelection()
    {
        $this->announcementMessageSelection = null;
        return $this;
    }

    /**
     * Getter for confirmationMessageAudioFile
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\LabeledFileResource
     */
    public function getConfirmationMessageAudioFile()
    {
        return $this->confirmationMessageAudioFile instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->confirmationMessageAudioFile;
    }

    /**
     * Setter for confirmationMessageAudioFile
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\LabeledFileResource $confirmationMessageAudioFile
     * @return $this
     */
    public function setConfirmationMessageAudioFile(\CWM\BroadWorksConnector\Ocip\Models\LabeledFileResource $confirmationMessageAudioFile)
    {
        $this->confirmationMessageAudioFile = $confirmationMessageAudioFile;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetConfirmationMessageAudioFile()
    {
        $this->confirmationMessageAudioFile = null;
        return $this;
    }

    /**
     * Getter for confirmationTimoutSeconds
     *
     * @return int
     */
    public function getConfirmationTimoutSeconds()
    {
        return $this->confirmationTimoutSeconds instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->confirmationTimoutSeconds;
    }

    /**
     * Setter for confirmationTimoutSeconds
     *
     * @param int $confirmationTimoutSeconds
     * @return $this
     */
    public function setConfirmationTimoutSeconds($confirmationTimoutSeconds)
    {
        $this->confirmationTimoutSeconds = $confirmationTimoutSeconds;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetConfirmationTimoutSeconds()
    {
        $this->confirmationTimoutSeconds = null;
        return $this;
    }


}

