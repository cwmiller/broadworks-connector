<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * CallCenterAnnouncementFileListModify
 *
 * Contains a list of audio or video files to modify.
 */
class CallCenterAnnouncementFileListModify
{

    /**
     * @ElementName file1
     * @Nillable
     * @var \CWM\BroadWorksConnector\Ocip\Models\LabeledMediaFileResource|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $file1 = null;

    /**
     * @ElementName file2
     * @Nillable
     * @var \CWM\BroadWorksConnector\Ocip\Models\LabeledMediaFileResource|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $file2 = null;

    /**
     * @ElementName file3
     * @Nillable
     * @var \CWM\BroadWorksConnector\Ocip\Models\LabeledMediaFileResource|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $file3 = null;

    /**
     * @ElementName file4
     * @Nillable
     * @var \CWM\BroadWorksConnector\Ocip\Models\LabeledMediaFileResource|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $file4 = null;

    /**
     * Getter for file1
     *
     * @ElementName file1
     * @Nillable
     * @return \CWM\BroadWorksConnector\Ocip\Models\LabeledMediaFileResource|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    public function getFile1()
    {
        return $this->file1;
    }

    /**
     * Setter for file1
     *
     * @ElementName file1
     * @Nillable
     * @param \CWM\BroadWorksConnector\Ocip\Models\LabeledMediaFileResource|null|\CWM\BroadWorksConnector\Ocip\Nil $file1
     * @return $this
     */
    public function setFile1($file1)
    {
        $this->file1 = $file1;
        return $this;
    }

    /**
     * Getter for file2
     *
     * @ElementName file2
     * @Nillable
     * @return \CWM\BroadWorksConnector\Ocip\Models\LabeledMediaFileResource|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    public function getFile2()
    {
        return $this->file2;
    }

    /**
     * Setter for file2
     *
     * @ElementName file2
     * @Nillable
     * @param \CWM\BroadWorksConnector\Ocip\Models\LabeledMediaFileResource|null|\CWM\BroadWorksConnector\Ocip\Nil $file2
     * @return $this
     */
    public function setFile2($file2)
    {
        $this->file2 = $file2;
        return $this;
    }

    /**
     * Getter for file3
     *
     * @ElementName file3
     * @Nillable
     * @return \CWM\BroadWorksConnector\Ocip\Models\LabeledMediaFileResource|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    public function getFile3()
    {
        return $this->file3;
    }

    /**
     * Setter for file3
     *
     * @ElementName file3
     * @Nillable
     * @param \CWM\BroadWorksConnector\Ocip\Models\LabeledMediaFileResource|null|\CWM\BroadWorksConnector\Ocip\Nil $file3
     * @return $this
     */
    public function setFile3($file3)
    {
        $this->file3 = $file3;
        return $this;
    }

    /**
     * Getter for file4
     *
     * @ElementName file4
     * @Nillable
     * @return \CWM\BroadWorksConnector\Ocip\Models\LabeledMediaFileResource|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    public function getFile4()
    {
        return $this->file4;
    }

    /**
     * Setter for file4
     *
     * @ElementName file4
     * @Nillable
     * @param \CWM\BroadWorksConnector\Ocip\Models\LabeledMediaFileResource|null|\CWM\BroadWorksConnector\Ocip\Nil $file4
     * @return $this
     */
    public function setFile4($file4)
    {
        $this->file4 = $file4;
        return $this;
    }


}

