<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * CallCenterAnnouncementMediaFileTypeList
 *
 * Contains list of file media types for audio or video files
 */
class CallCenterAnnouncementMediaFileTypeList
{

    /**
     * @ElementName mediaType1
     * @var string|null
     */
    private $mediaType1 = null;

    /**
     * @ElementName mediaType2
     * @var string|null
     */
    private $mediaType2 = null;

    /**
     * @ElementName mediaType3
     * @var string|null
     */
    private $mediaType3 = null;

    /**
     * @ElementName mediaType4
     * @var string|null
     */
    private $mediaType4 = null;

    /**
     * Getter for mediaType1
     *
     * @ElementName mediaType1
     * @return string|null
     */
    public function getMediaType1()
    {
        return $this->mediaType1;
    }

    /**
     * Setter for mediaType1
     *
     * @ElementName mediaType1
     * @param string|null $mediaType1
     * @return $this
     */
    public function setMediaType1($mediaType1)
    {
        $this->mediaType1 = $mediaType1;
        return $this;
    }

    /**
     * Getter for mediaType2
     *
     * @ElementName mediaType2
     * @return string|null
     */
    public function getMediaType2()
    {
        return $this->mediaType2;
    }

    /**
     * Setter for mediaType2
     *
     * @ElementName mediaType2
     * @param string|null $mediaType2
     * @return $this
     */
    public function setMediaType2($mediaType2)
    {
        $this->mediaType2 = $mediaType2;
        return $this;
    }

    /**
     * Getter for mediaType3
     *
     * @ElementName mediaType3
     * @return string|null
     */
    public function getMediaType3()
    {
        return $this->mediaType3;
    }

    /**
     * Setter for mediaType3
     *
     * @ElementName mediaType3
     * @param string|null $mediaType3
     * @return $this
     */
    public function setMediaType3($mediaType3)
    {
        $this->mediaType3 = $mediaType3;
        return $this;
    }

    /**
     * Getter for mediaType4
     *
     * @ElementName mediaType4
     * @return string|null
     */
    public function getMediaType4()
    {
        return $this->mediaType4;
    }

    /**
     * Setter for mediaType4
     *
     * @ElementName mediaType4
     * @param string|null $mediaType4
     * @return $this
     */
    public function setMediaType4($mediaType4)
    {
        $this->mediaType4 = $mediaType4;
        return $this;
    }


}

