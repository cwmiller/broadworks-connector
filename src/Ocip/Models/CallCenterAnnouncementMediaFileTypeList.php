<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * CallCenterAnnouncementMediaFileTypeList
 *
 * Contains list of file media types for audio or video files
 *
 * @Groups [{"id":"8e629edbac315ae7889caca732382c44:636","type":"sequence"}]
 */
class CallCenterAnnouncementMediaFileTypeList
{

    /**
     * @ElementName mediaType1
     * @Type \CWM\BroadWorksConnector\Ocip\Models\MediaFileType
     * @Optional
     * @Group 8e629edbac315ae7889caca732382c44:636
     * @var \CWM\BroadWorksConnector\Ocip\Models\MediaFileType|null
     */
    private $mediaType1 = null;

    /**
     * @ElementName mediaType2
     * @Type \CWM\BroadWorksConnector\Ocip\Models\MediaFileType
     * @Optional
     * @Group 8e629edbac315ae7889caca732382c44:636
     * @var \CWM\BroadWorksConnector\Ocip\Models\MediaFileType|null
     */
    private $mediaType2 = null;

    /**
     * @ElementName mediaType3
     * @Type \CWM\BroadWorksConnector\Ocip\Models\MediaFileType
     * @Optional
     * @Group 8e629edbac315ae7889caca732382c44:636
     * @var \CWM\BroadWorksConnector\Ocip\Models\MediaFileType|null
     */
    private $mediaType3 = null;

    /**
     * @ElementName mediaType4
     * @Type \CWM\BroadWorksConnector\Ocip\Models\MediaFileType
     * @Optional
     * @Group 8e629edbac315ae7889caca732382c44:636
     * @var \CWM\BroadWorksConnector\Ocip\Models\MediaFileType|null
     */
    private $mediaType4 = null;

    /**
     * Getter for mediaType1
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\MediaFileType
     */
    public function getMediaType1()
    {
        return $this->mediaType1 instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->mediaType1;
    }

    /**
     * Setter for mediaType1
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\MediaFileType $mediaType1
     * @return $this
     */
    public function setMediaType1(\CWM\BroadWorksConnector\Ocip\Models\MediaFileType $mediaType1)
    {
        $this->mediaType1 = $mediaType1;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetMediaType1()
    {
        $this->mediaType1 = null;
        return $this;
    }

    /**
     * Getter for mediaType2
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\MediaFileType
     */
    public function getMediaType2()
    {
        return $this->mediaType2 instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->mediaType2;
    }

    /**
     * Setter for mediaType2
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\MediaFileType $mediaType2
     * @return $this
     */
    public function setMediaType2(\CWM\BroadWorksConnector\Ocip\Models\MediaFileType $mediaType2)
    {
        $this->mediaType2 = $mediaType2;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetMediaType2()
    {
        $this->mediaType2 = null;
        return $this;
    }

    /**
     * Getter for mediaType3
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\MediaFileType
     */
    public function getMediaType3()
    {
        return $this->mediaType3 instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->mediaType3;
    }

    /**
     * Setter for mediaType3
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\MediaFileType $mediaType3
     * @return $this
     */
    public function setMediaType3(\CWM\BroadWorksConnector\Ocip\Models\MediaFileType $mediaType3)
    {
        $this->mediaType3 = $mediaType3;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetMediaType3()
    {
        $this->mediaType3 = null;
        return $this;
    }

    /**
     * Getter for mediaType4
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\MediaFileType
     */
    public function getMediaType4()
    {
        return $this->mediaType4 instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->mediaType4;
    }

    /**
     * Setter for mediaType4
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\MediaFileType $mediaType4
     * @return $this
     */
    public function setMediaType4(\CWM\BroadWorksConnector\Ocip\Models\MediaFileType $mediaType4)
    {
        $this->mediaType4 = $mediaType4;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetMediaType4()
    {
        $this->mediaType4 = null;
        return $this;
    }


}

