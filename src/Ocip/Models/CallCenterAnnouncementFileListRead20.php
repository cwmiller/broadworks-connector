<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * CallCenterAnnouncementFileListRead20
 *
 * Contains a list of announcement repository files
 */
class CallCenterAnnouncementFileListRead20
{

    /**
     * @ElementName file1
     * @Type \CWM\BroadWorksConnector\Ocip\Models\AnnouncementFileLevelKey
     * @var \CWM\BroadWorksConnector\Ocip\Models\AnnouncementFileLevelKey|null
     */
    private $file1 = null;

    /**
     * @ElementName file2
     * @Type \CWM\BroadWorksConnector\Ocip\Models\AnnouncementFileLevelKey
     * @var \CWM\BroadWorksConnector\Ocip\Models\AnnouncementFileLevelKey|null
     */
    private $file2 = null;

    /**
     * @ElementName file3
     * @Type \CWM\BroadWorksConnector\Ocip\Models\AnnouncementFileLevelKey
     * @var \CWM\BroadWorksConnector\Ocip\Models\AnnouncementFileLevelKey|null
     */
    private $file3 = null;

    /**
     * @ElementName file4
     * @Type \CWM\BroadWorksConnector\Ocip\Models\AnnouncementFileLevelKey
     * @var \CWM\BroadWorksConnector\Ocip\Models\AnnouncementFileLevelKey|null
     */
    private $file4 = null;

    /**
     * Getter for file1
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\AnnouncementFileLevelKey
     */
    public function getFile1()
    {
        return $this->file1 instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->file1;
    }

    /**
     * Setter for file1
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\AnnouncementFileLevelKey $file1
     * @return $this
     */
    public function setFile1(\CWM\BroadWorksConnector\Ocip\Models\AnnouncementFileLevelKey $file1)
    {
        $this->file1 = $file1;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetFile1()
    {
        $this->file1 = null;
        return $this;
    }

    /**
     * Getter for file2
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\AnnouncementFileLevelKey
     */
    public function getFile2()
    {
        return $this->file2 instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->file2;
    }

    /**
     * Setter for file2
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\AnnouncementFileLevelKey $file2
     * @return $this
     */
    public function setFile2(\CWM\BroadWorksConnector\Ocip\Models\AnnouncementFileLevelKey $file2)
    {
        $this->file2 = $file2;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetFile2()
    {
        $this->file2 = null;
        return $this;
    }

    /**
     * Getter for file3
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\AnnouncementFileLevelKey
     */
    public function getFile3()
    {
        return $this->file3 instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->file3;
    }

    /**
     * Setter for file3
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\AnnouncementFileLevelKey $file3
     * @return $this
     */
    public function setFile3(\CWM\BroadWorksConnector\Ocip\Models\AnnouncementFileLevelKey $file3)
    {
        $this->file3 = $file3;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetFile3()
    {
        $this->file3 = null;
        return $this;
    }

    /**
     * Getter for file4
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\AnnouncementFileLevelKey
     */
    public function getFile4()
    {
        return $this->file4 instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->file4;
    }

    /**
     * Setter for file4
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\AnnouncementFileLevelKey $file4
     * @return $this
     */
    public function setFile4(\CWM\BroadWorksConnector\Ocip\Models\AnnouncementFileLevelKey $file4)
    {
        $this->file4 = $file4;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetFile4()
    {
        $this->file4 = null;
        return $this;
    }


}

