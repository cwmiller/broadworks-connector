<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * ServiceProviderAnswerConfirmationGetResponse
 *
 * Response to the ServiceProviderAnswerConfirmationGetRequest.
 *                 Replaced By: ServiceProviderAnswerConfirmationGetResponse16
 *
 * @see ServiceProviderAnswerConfirmationGetRequest
 * @see ServiceProviderAnswerConfirmationGetResponse16
 * @Groups [{"id":"ab0042aa512abc10edb3c55e4b416b0b:9550","type":"sequence"}]
 */
class ServiceProviderAnswerConfirmationGetResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName announcementMessageSelection
     * @Type \CWM\BroadWorksConnector\Ocip\Models\AnswerConfirmationAnnouncementSelection
     * @Group ab0042aa512abc10edb3c55e4b416b0b:9550
     * @var \CWM\BroadWorksConnector\Ocip\Models\AnswerConfirmationAnnouncementSelection|null
     */
    private $announcementMessageSelection = null;

    /**
     * @ElementName confirmationMessageAudioFileDescription
     * @Type string
     * @Optional
     * @Group ab0042aa512abc10edb3c55e4b416b0b:9550
     * @MinLength 1
     * @MaxLength 256
     * @var string|null
     */
    private $confirmationMessageAudioFileDescription = null;

    /**
     * @ElementName confirmationTimoutSeconds
     * @Type int
     * @Group ab0042aa512abc10edb3c55e4b416b0b:9550
     * @MinInclusive 2
     * @MaxInclusive 30
     * @var int|null
     */
    private $confirmationTimoutSeconds = null;

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
     * Getter for confirmationMessageAudioFileDescription
     *
     * @return string
     */
    public function getConfirmationMessageAudioFileDescription()
    {
        return $this->confirmationMessageAudioFileDescription instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->confirmationMessageAudioFileDescription;
    }

    /**
     * Setter for confirmationMessageAudioFileDescription
     *
     * @param string $confirmationMessageAudioFileDescription
     * @return $this
     */
    public function setConfirmationMessageAudioFileDescription($confirmationMessageAudioFileDescription)
    {
        $this->confirmationMessageAudioFileDescription = $confirmationMessageAudioFileDescription;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetConfirmationMessageAudioFileDescription()
    {
        $this->confirmationMessageAudioFileDescription = null;
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

