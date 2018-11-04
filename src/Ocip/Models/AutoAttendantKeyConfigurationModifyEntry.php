<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * AutoAttendantKeyConfigurationModifyEntry
 *
 * The modify configuration entry of a key for Auto
 *         Attendant.
 *         The following data elements are only
 *         used in AS data
 *         mode:
 *         audioFile
 *         videoFile
 *         submenuId
 *         The following data elements are only valid for Standard Auto
 *         Attendants:
 *         submenuId
 */
class AutoAttendantKeyConfigurationModifyEntry
{

    /**
     * @ElementName description
     * @Nillable
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $description = null;

    /**
     * @ElementName action
     * @var string|null
     */
    private $action = null;

    /**
     * @ElementName phoneNumber
     * @Nillable
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $phoneNumber = null;

    /**
     * @ElementName audioFile
     * @Nillable
     * @var \CWM\BroadWorksConnector\Ocip\Models\LabeledMediaFileResource|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $audioFile = null;

    /**
     * @ElementName videoFile
     * @Nillable
     * @var \CWM\BroadWorksConnector\Ocip\Models\LabeledMediaFileResource|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $videoFile = null;

    /**
     * @ElementName submenuId
     * @Nillable
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $submenuId = null;

    /**
     * Getter for description
     *
     * @ElementName description
     * @Nillable
     * @return string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Setter for description
     *
     * @ElementName description
     * @Nillable
     * @param string|null|\CWM\BroadWorksConnector\Ocip\Nil $description
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
     * @Nillable
     * @return string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    public function getPhoneNumber()
    {
        return $this->phoneNumber;
    }

    /**
     * Setter for phoneNumber
     *
     * @ElementName phoneNumber
     * @Nillable
     * @param string|null|\CWM\BroadWorksConnector\Ocip\Nil $phoneNumber
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
     * @Nillable
     * @return \CWM\BroadWorksConnector\Ocip\Models\LabeledMediaFileResource|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    public function getAudioFile()
    {
        return $this->audioFile;
    }

    /**
     * Setter for audioFile
     *
     * @ElementName audioFile
     * @Nillable
     * @param \CWM\BroadWorksConnector\Ocip\Models\LabeledMediaFileResource|null|\CWM\BroadWorksConnector\Ocip\Nil $audioFile
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
     * @Nillable
     * @return \CWM\BroadWorksConnector\Ocip\Models\LabeledMediaFileResource|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    public function getVideoFile()
    {
        return $this->videoFile;
    }

    /**
     * Setter for videoFile
     *
     * @ElementName videoFile
     * @Nillable
     * @param \CWM\BroadWorksConnector\Ocip\Models\LabeledMediaFileResource|null|\CWM\BroadWorksConnector\Ocip\Nil $videoFile
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
     * @Nillable
     * @return string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    public function getSubmenuId()
    {
        return $this->submenuId;
    }

    /**
     * Setter for submenuId
     *
     * @ElementName submenuId
     * @Nillable
     * @param string|null|\CWM\BroadWorksConnector\Ocip\Nil $submenuId
     * @return $this
     */
    public function setSubmenuId($submenuId)
    {
        $this->submenuId = $submenuId;
        return $this;
    }


}

