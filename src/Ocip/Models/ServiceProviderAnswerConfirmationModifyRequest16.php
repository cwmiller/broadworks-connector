<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * ServiceProviderAnswerConfirmationModifyRequest16
 *
 * Modify a service provider or enterprise's answer confirmation settings.
 *         The response is either a SuccessResponse or an ErrorResponse.
 *
 * @see SuccessResponse
 * @see ErrorResponse
 * @Groups [{"id":"e19a9072c2dad499e9f28837da5768db:1780","type":"sequence"}]
 */
class ServiceProviderAnswerConfirmationModifyRequest16 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{
    /**
     * @ElementName serviceProviderId
     * @Type string
     * @Group e19a9072c2dad499e9f28837da5768db:1780
     * @MinLength 1
     * @MaxLength 30
     * @var string|null
     */
    protected $serviceProviderId = null;

    /**
     * @ElementName announcementMessageSelection
     * @Type \CWM\BroadWorksConnector\Ocip\Models\AnswerConfirmationAnnouncementSelection
     * @Optional
     * @Group e19a9072c2dad499e9f28837da5768db:1780
     * @var \CWM\BroadWorksConnector\Ocip\Models\AnswerConfirmationAnnouncementSelection|null
     */
    protected $announcementMessageSelection = null;

    /**
     * @ElementName confirmationMessageAudioFile
     * @Type \CWM\BroadWorksConnector\Ocip\Models\LabeledMediaFileResource
     * @Optional
     * @Group e19a9072c2dad499e9f28837da5768db:1780
     * @var \CWM\BroadWorksConnector\Ocip\Models\LabeledMediaFileResource|null
     */
    protected $confirmationMessageAudioFile = null;

    /**
     * @ElementName confirmationTimoutSeconds
     * @Type int
     * @Optional
     * @Group e19a9072c2dad499e9f28837da5768db:1780
     * @MinInclusive 2
     * @MaxInclusive 30
     * @var int|null
     */
    protected $confirmationTimoutSeconds = null;

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
     * @return \CWM\BroadWorksConnector\Ocip\Models\LabeledMediaFileResource
     */
    public function getConfirmationMessageAudioFile()
    {
        return $this->confirmationMessageAudioFile instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->confirmationMessageAudioFile;
    }

    /**
     * Setter for confirmationMessageAudioFile
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\LabeledMediaFileResource $confirmationMessageAudioFile
     * @return $this
     */
    public function setConfirmationMessageAudioFile(\CWM\BroadWorksConnector\Ocip\Models\LabeledMediaFileResource $confirmationMessageAudioFile)
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

