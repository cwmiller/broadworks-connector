<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * ServiceProviderAnswerConfirmationGetResponse16
 *
 * Response to the ServiceProviderAnswerConfirmationGetRequest16.
 */
class ServiceProviderAnswerConfirmationGetResponse16 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName announcementMessageSelection
     * @var string|null
     */
    private $announcementMessageSelection = null;

    /**
     * @ElementName confirmationMessageAudioFileDescription
     * @var string|null
     */
    private $confirmationMessageAudioFileDescription = null;

    /**
     * @ElementName confirmationMessageMediaType
     * @var string|null
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
     * @return string|null
     */
    public function getAnnouncementMessageSelection()
    {
        return $this->announcementMessageSelection;
    }

    /**
     * Setter for announcementMessageSelection
     *
     * @ElementName announcementMessageSelection
     * @param string|null $announcementMessageSelection
     * @return $this
     */
    public function setAnnouncementMessageSelection($announcementMessageSelection)
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
     * @return string|null
     */
    public function getConfirmationMessageMediaType()
    {
        return $this->confirmationMessageMediaType;
    }

    /**
     * Setter for confirmationMessageMediaType
     *
     * @ElementName confirmationMessageMediaType
     * @param string|null $confirmationMessageMediaType
     * @return $this
     */
    public function setConfirmationMessageMediaType($confirmationMessageMediaType)
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

