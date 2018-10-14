<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * ServiceProviderAnswerConfirmationGetResponse16
 *
 * Response to the ServiceProviderAnswerConfirmationGetRequest16.
 *
 * @see ServiceProviderAnswerConfirmationGetRequest16
 */
class ServiceProviderAnswerConfirmationGetResponse16 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName announcementMessageSelection
     * @var \CWM\BroadWorksConnector\Ocip\Models\AnswerConfirmationAnnouncementSelection|null
     */
    private $announcementMessageSelection = null;

    /**
     * @ElementName confirmationMessageAudioFileDescription
     * @var string|null
     */
    private $confirmationMessageAudioFileDescription = null;

    /**
     * @ElementName confirmationMessageMediaType
     * @var \CWM\BroadWorksConnector\Ocip\Models\MediaFileType|null
     */
    private $confirmationMessageMediaType = null;

    /**
     * @ElementName confirmationTimoutSeconds
     * @var int|null
     */
    private $confirmationTimoutSeconds = null;

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
     * Getter for confirmationMessageAudioFileDescription
     *
     * @ElementName confirmationMessageAudioFileDescription
     * @return string|null
     */
    public function getConfirmationMessageAudioFileDescription()
    {
        return $this->confirmationMessageAudioFileDescription;
    }

    /**
     * Setter for confirmationMessageAudioFileDescription
     *
     * @ElementName confirmationMessageAudioFileDescription
     * @param string|null $confirmationMessageAudioFileDescription
     * @return $this
     */
    public function setConfirmationMessageAudioFileDescription($confirmationMessageAudioFileDescription)
    {
        $this->confirmationMessageAudioFileDescription = $confirmationMessageAudioFileDescription;
        return $this;
    }

    /**
     * Getter for confirmationMessageMediaType
     *
     * @ElementName confirmationMessageMediaType
     * @return \CWM\BroadWorksConnector\Ocip\Models\MediaFileType|null
     */
    public function getConfirmationMessageMediaType()
    {
        return $this->confirmationMessageMediaType;
    }

    /**
     * Setter for confirmationMessageMediaType
     *
     * @ElementName confirmationMessageMediaType
     * @param \CWM\BroadWorksConnector\Ocip\Models\MediaFileType|null $confirmationMessageMediaType
     * @return $this
     */
    public function setConfirmationMessageMediaType(\CWM\BroadWorksConnector\Ocip\Models\MediaFileType $confirmationMessageMediaType)
    {
        $this->confirmationMessageMediaType = $confirmationMessageMediaType;
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

