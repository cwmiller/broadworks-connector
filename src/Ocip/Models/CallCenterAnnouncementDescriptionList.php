<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * CallCenterAnnouncementDescriptionList
 *
 * Contains list of file descriptions for audio or video files
 */
class CallCenterAnnouncementDescriptionList
{

    /**
     * @ElementName fileDescription1
     * @var string|null
     */
    private $fileDescription1 = null;

    /**
     * @ElementName fileDescription2
     * @var string|null
     */
    private $fileDescription2 = null;

    /**
     * @ElementName fileDescription3
     * @var string|null
     */
    private $fileDescription3 = null;

    /**
     * @ElementName fileDescription4
     * @var string|null
     */
    private $fileDescription4 = null;

    /**
     * Getter for fileDescription1
     *
     * @ElementName fileDescription1
     * @return string|null
     */
    public function getFileDescription1()
    {
        return $this->fileDescription1;
    }

    /**
     * Setter for fileDescription1
     *
     * @ElementName fileDescription1
     * @param string|null $fileDescription1
     * @return $this
     */
    public function setFileDescription1($fileDescription1)
    {
        $this->fileDescription1 = $fileDescription1;
        return $this;
    }

    /**
     * Getter for fileDescription2
     *
     * @ElementName fileDescription2
     * @return string|null
     */
    public function getFileDescription2()
    {
        return $this->fileDescription2;
    }

    /**
     * Setter for fileDescription2
     *
     * @ElementName fileDescription2
     * @param string|null $fileDescription2
     * @return $this
     */
    public function setFileDescription2($fileDescription2)
    {
        $this->fileDescription2 = $fileDescription2;
        return $this;
    }

    /**
     * Getter for fileDescription3
     *
     * @ElementName fileDescription3
     * @return string|null
     */
    public function getFileDescription3()
    {
        return $this->fileDescription3;
    }

    /**
     * Setter for fileDescription3
     *
     * @ElementName fileDescription3
     * @param string|null $fileDescription3
     * @return $this
     */
    public function setFileDescription3($fileDescription3)
    {
        $this->fileDescription3 = $fileDescription3;
        return $this;
    }

    /**
     * Getter for fileDescription4
     *
     * @ElementName fileDescription4
     * @return string|null
     */
    public function getFileDescription4()
    {
        return $this->fileDescription4;
    }

    /**
     * Setter for fileDescription4
     *
     * @ElementName fileDescription4
     * @param string|null $fileDescription4
     * @return $this
     */
    public function setFileDescription4($fileDescription4)
    {
        $this->fileDescription4 = $fileDescription4;
        return $this;
    }


}

