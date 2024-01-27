<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * ExtendedMediaFileLevelResource20
 *
 * Represents either an existing file for the application server to use, or
 *           the contents of a file to transfer and an URL.
 *
 * @Groups [{"id":"6337d0cfba4de1c83587203c5b0bae54:3194","type":"sequence"}]
 */
class ExtendedMediaFileLevelResource20
{
    /**
     * @ElementName file
     * @Type \CWM\BroadWorksConnector\Ocip\Models\AnnouncementFileLevelKey
     * @Nillable
     * @Optional
     * @Group 6337d0cfba4de1c83587203c5b0bae54:3194
     * @var \CWM\BroadWorksConnector\Ocip\Models\AnnouncementFileLevelKey|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    protected $file = null;

    /**
     * @ElementName url
     * @Type string
     * @Nillable
     * @Optional
     * @Group 6337d0cfba4de1c83587203c5b0bae54:3194
     * @MinLength 1
     * @MaxLength 256
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    protected $url = null;

    /**
     * Getter for file
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\AnnouncementFileLevelKey|null
     */
    public function getFile()
    {
        return $this->file instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->file;
    }

    /**
     * Setter for file
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\AnnouncementFileLevelKey|null $file
     * @return $this
     */
    public function setFile(\CWM\BroadWorksConnector\Ocip\Models\AnnouncementFileLevelKey $file = null)
    {
        if ($file === null) {
            $this->file = new \CWM\BroadWorksConnector\Ocip\Nil;
        } else {
            $this->file = $file;
        }
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetFile()
    {
        $this->file = null;
        return $this;
    }

    /**
     * Getter for url
     *
     * @return string|null
     */
    public function getUrl()
    {
        return $this->url instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->url;
    }

    /**
     * Setter for url
     *
     * @param string|null $url
     * @return $this
     */
    public function setUrl($url = null)
    {
        if ($url === null) {
            $this->url = new \CWM\BroadWorksConnector\Ocip\Nil;
        } else {
            $this->url = $url;
        }
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetUrl()
    {
        $this->url = null;
        return $this;
    }
}

