<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * CallCenterAnnouncementDescriptionList
 *
 * Contains list of file descriptions for audio or video files
 *
 * @Groups [{"id":"18b369af88e42ffdb4166615c670ce2c:580","type":"sequence"}]
 */
class CallCenterAnnouncementDescriptionList
{

    /**
     * @ElementName fileDescription1
     * @Type string
     * @Optional
     * @Group 18b369af88e42ffdb4166615c670ce2c:580
     * @var string|null
     */
    private $fileDescription1 = null;

    /**
     * @ElementName fileDescription2
     * @Type string
     * @Optional
     * @Group 18b369af88e42ffdb4166615c670ce2c:580
     * @var string|null
     */
    private $fileDescription2 = null;

    /**
     * @ElementName fileDescription3
     * @Type string
     * @Optional
     * @Group 18b369af88e42ffdb4166615c670ce2c:580
     * @var string|null
     */
    private $fileDescription3 = null;

    /**
     * @ElementName fileDescription4
     * @Type string
     * @Optional
     * @Group 18b369af88e42ffdb4166615c670ce2c:580
     * @var string|null
     */
    private $fileDescription4 = null;

    /**
     * Getter for fileDescription1
     *
     * @return string
     */
    public function getFileDescription1()
    {
        return $this->fileDescription1 instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->fileDescription1;
    }

    /**
     * Setter for fileDescription1
     *
     * @param string $fileDescription1
     * @return $this
     */
    public function setFileDescription1($fileDescription1)
    {
        $this->fileDescription1 = $fileDescription1;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetFileDescription1()
    {
        $this->fileDescription1 = null;
        return $this;
    }

    /**
     * Getter for fileDescription2
     *
     * @return string
     */
    public function getFileDescription2()
    {
        return $this->fileDescription2 instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->fileDescription2;
    }

    /**
     * Setter for fileDescription2
     *
     * @param string $fileDescription2
     * @return $this
     */
    public function setFileDescription2($fileDescription2)
    {
        $this->fileDescription2 = $fileDescription2;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetFileDescription2()
    {
        $this->fileDescription2 = null;
        return $this;
    }

    /**
     * Getter for fileDescription3
     *
     * @return string
     */
    public function getFileDescription3()
    {
        return $this->fileDescription3 instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->fileDescription3;
    }

    /**
     * Setter for fileDescription3
     *
     * @param string $fileDescription3
     * @return $this
     */
    public function setFileDescription3($fileDescription3)
    {
        $this->fileDescription3 = $fileDescription3;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetFileDescription3()
    {
        $this->fileDescription3 = null;
        return $this;
    }

    /**
     * Getter for fileDescription4
     *
     * @return string
     */
    public function getFileDescription4()
    {
        return $this->fileDescription4 instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->fileDescription4;
    }

    /**
     * Setter for fileDescription4
     *
     * @param string $fileDescription4
     * @return $this
     */
    public function setFileDescription4($fileDescription4)
    {
        $this->fileDescription4 = $fileDescription4;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetFileDescription4()
    {
        $this->fileDescription4 = null;
        return $this;
    }


}

