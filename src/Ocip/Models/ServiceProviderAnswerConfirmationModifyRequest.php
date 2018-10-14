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
 */
class ServiceProviderAnswerConfirmationModifyRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName serviceProviderId
     * @var string|null
     */
    private $serviceProviderId = null;

    /**
     * @ElementName announcementMessageSelection
     * @var \CWM\BroadWorksConnector\Ocip\Models\AnswerConfirmationAnnouncementSelection|null
     */
    private $announcementMessageSelection = null;

    /**
     * @ElementName confirmationMessageAudioFile
     * @var \CWM\BroadWorksConnector\Ocip\Models\LabeledFileResource|null
     */
    private $confirmationMessageAudioFile = null;

    /**
     * @ElementName confirmationTimoutSeconds
     * @var int|null
     */
    private $confirmationTimoutSeconds = null;

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
     * Getter for announcementMessageSelection
     *
     * @ElementName announcementMessageSelection
     * @return \CWM\BroadWorksConnector\Ocip\Models\AnswerConfirmationAnnouncementSelection|null
     */
    public function getAnnouncementMessageSelection()
    {
        return $this->announcementMessageSelection;
    }

    /**
     * Setter for announcementMessageSelection
     *
     * @ElementName announcementMessageSelection
     * @param \CWM\BroadWorksConnector\Ocip\Models\AnswerConfirmationAnnouncementSelection|null $announcementMessageSelection
     * @return $this
     */
    public function setAnnouncementMessageSelection(\CWM\BroadWorksConnector\Ocip\Models\AnswerConfirmationAnnouncementSelection $announcementMessageSelection)
    {
        $this->announcementMessageSelection = $announcementMessageSelection;
        return $this;
    }

    /**
     * Getter for confirmationMessageAudioFile
     *
     * @ElementName confirmationMessageAudioFile
     * @return \CWM\BroadWorksConnector\Ocip\Models\LabeledFileResource|null
     */
    public function getConfirmationMessageAudioFile()
    {
        return $this->confirmationMessageAudioFile;
    }

    /**
     * Setter for confirmationMessageAudioFile
     *
     * @ElementName confirmationMessageAudioFile
     * @param \CWM\BroadWorksConnector\Ocip\Models\LabeledFileResource|null $confirmationMessageAudioFile
     * @return $this
     */
    public function setConfirmationMessageAudioFile(\CWM\BroadWorksConnector\Ocip\Models\LabeledFileResource $confirmationMessageAudioFile)
    {
        $this->confirmationMessageAudioFile = $confirmationMessageAudioFile;
        return $this;
    }

    /**
     * Getter for confirmationTimoutSeconds
     *
     * @ElementName confirmationTimoutSeconds
     * @return int|null
     */
    public function getConfirmationTimoutSeconds()
    {
        return $this->confirmationTimoutSeconds;
    }

    /**
     * Setter for confirmationTimoutSeconds
     *
     * @ElementName confirmationTimoutSeconds
     * @param int|null $confirmationTimoutSeconds
     * @return $this
     */
    public function setConfirmationTimoutSeconds($confirmationTimoutSeconds)
    {
        $this->confirmationTimoutSeconds = $confirmationTimoutSeconds;
        return $this;
    }


}

