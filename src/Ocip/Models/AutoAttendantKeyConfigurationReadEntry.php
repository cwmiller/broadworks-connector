<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * AutoAttendantKeyConfigurationReadEntry
 *
 * The read configuration entry of a key for Auto Attendant.
 *         The following data elements are only used in AS data mode:
 *           audioFileDescription
 *           audioMediaType
 *           videoFileDescription
 *           videoMediaType
 */
class AutoAttendantKeyConfigurationReadEntry
{

    /**
     * @ElementName description
     * @var string|null
     */
    private $description = null;

    /**
     * @ElementName action
     * @var string|null
     */
    private $action = null;

    /**
     * @ElementName phoneNumber
     * @var string|null
     */
    private $phoneNumber = null;

    /**
     * @ElementName audioFileDescription
     * @var string|null
     */
    private $audioFileDescription = null;

    /**
     * @ElementName audioMediaType
     * @var string|null
     */
    private $audioMediaType = null;

    /**
     * @ElementName videoFileDescription
     * @var string|null
     */
    private $videoFileDescription = null;

    /**
     * @ElementName videoMediaType
     * @var string|null
     */
    private $videoMediaType = null;

    /**
     * Getter for description
     *
     * @ElementName description
     * @return string|null
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Setter for description
     *
     * @ElementName description
     * @param string|null $description
     * @return $this
     */
    public function setDescription($description)
    {
        $this->description = $description;
        return $this;
    }

    /**
     * Getter for action
     *
     * @ElementName action
     * @return string|null
     */
    public function getAction()
    {
        return $this->action;
    }

    /**
     * Setter for action
     *
     * @ElementName action
     * @param string|null $action
     * @return $this
     */
    public function setAction($action)
    {
        $this->action = $action;
        return $this;
    }

    /**
     * Getter for phoneNumber
     *
     * @ElementName phoneNumber
     * @return string|null
     */
    public function getPhoneNumber()
    {
        return $this->phoneNumber;
    }

    /**
     * Setter for phoneNumber
     *
     * @ElementName phoneNumber
     * @param string|null $phoneNumber
     * @return $this
     */
    public function setPhoneNumber($phoneNumber)
    {
        $this->phoneNumber = $phoneNumber;
        return $this;
    }

    /**
     * Getter for audioFileDescription
     *
     * @ElementName audioFileDescription
     * @return string|null
     */
    public function getAudioFileDescription()
    {
        return $this->audioFileDescription;
    }

    /**
     * Setter for audioFileDescription
     *
     * @ElementName audioFileDescription
     * @param string|null $audioFileDescription
     * @return $this
     */
    public function setAudioFileDescription($audioFileDescription)
    {
        $this->audioFileDescription = $audioFileDescription;
        return $this;
    }

    /**
     * Getter for audioMediaType
     *
     * @ElementName audioMediaType
     * @return string|null
     */
    public function getAudioMediaType()
    {
        return $this->audioMediaType;
    }

    /**
     * Setter for audioMediaType
     *
     * @ElementName audioMediaType
     * @param string|null $audioMediaType
     * @return $this
     */
    public function setAudioMediaType($audioMediaType)
    {
        $this->audioMediaType = $audioMediaType;
        return $this;
    }

    /**
     * Getter for videoFileDescription
     *
     * @ElementName videoFileDescription
     * @return string|null
     */
    public function getVideoFileDescription()
    {
        return $this->videoFileDescription;
    }

    /**
     * Setter for videoFileDescription
     *
     * @ElementName videoFileDescription
     * @param string|null $videoFileDescription
     * @return $this
     */
    public function setVideoFileDescription($videoFileDescription)
    {
        $this->videoFileDescription = $videoFileDescription;
        return $this;
    }

    /**
     * Getter for videoMediaType
     *
     * @ElementName videoMediaType
     * @return string|null
     */
    public function getVideoMediaType()
    {
        return $this->videoMediaType;
    }

    /**
     * Setter for videoMediaType
     *
     * @ElementName videoMediaType
     * @param string|null $videoMediaType
     * @return $this
     */
    public function setVideoMediaType($videoMediaType)
    {
        $this->videoMediaType = $videoMediaType;
        return $this;
    }


}

