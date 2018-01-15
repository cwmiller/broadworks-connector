<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * AutoAttendantKeyConfigurationModifyEntry20
 *
 * The modify configuration entry of a key for Auto Attendant.
 *         The following data elements are only used in AS data mode:
 *           audioFile
 *           videoFile
 *           submenuId
 *         The following data elements are only valid for Standard Auto
 *         Attendants:
 *           submenuId
 */
class AutoAttendantKeyConfigurationModifyEntry20
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
     * @ElementName audioFile
     * @var \CWM\BroadWorksConnector\Ocip\Models\AnnouncementFileLevelKey|null
     */
    private $audioFile = null;

    /**
     * @ElementName videoFile
     * @var \CWM\BroadWorksConnector\Ocip\Models\AnnouncementFileLevelKey|null
     */
    private $videoFile = null;

    /**
     * @ElementName submenuId
     * @var string|null
     */
    private $submenuId = null;

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
     * Getter for audioFile
     *
     * @ElementName audioFile
     * @return \CWM\BroadWorksConnector\Ocip\Models\AnnouncementFileLevelKey|null
     */
    public function getAudioFile()
    {
        return $this->audioFile;
    }

    /**
     * Setter for audioFile
     *
     * @ElementName audioFile
     * @param \CWM\BroadWorksConnector\Ocip\Models\AnnouncementFileLevelKey|null $audioFile
     * @return $this
     */
    public function setAudioFile($audioFile)
    {
        $this->audioFile = $audioFile;
        return $this;
    }

    /**
     * Getter for videoFile
     *
     * @ElementName videoFile
     * @return \CWM\BroadWorksConnector\Ocip\Models\AnnouncementFileLevelKey|null
     */
    public function getVideoFile()
    {
        return $this->videoFile;
    }

    /**
     * Setter for videoFile
     *
     * @ElementName videoFile
     * @param \CWM\BroadWorksConnector\Ocip\Models\AnnouncementFileLevelKey|null $videoFile
     * @return $this
     */
    public function setVideoFile($videoFile)
    {
        $this->videoFile = $videoFile;
        return $this;
    }

    /**
     * Getter for submenuId
     *
     * @ElementName submenuId
     * @return string|null
     */
    public function getSubmenuId()
    {
        return $this->submenuId;
    }

    /**
     * Setter for submenuId
     *
     * @ElementName submenuId
     * @param string|null $submenuId
     * @return $this
     */
    public function setSubmenuId($submenuId)
    {
        $this->submenuId = $submenuId;
        return $this;
    }


}

