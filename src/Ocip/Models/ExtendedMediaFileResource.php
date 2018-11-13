<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * ExtendedMediaFileResource
 *
 * Represents either an existing file for the application server to use, or
 *           the contents of a file to transfer and an URL.
 */
class ExtendedMediaFileResource
{

    /**
     * @ElementName file
     * @Type \CWM\BroadWorksConnector\Ocip\Models\LabeledMediaFileResource
     * @var \CWM\BroadWorksConnector\Ocip\Models\LabeledMediaFileResource|null
     */
    private $file = null;

    /**
     * @ElementName url
     * @Type string
     * @Nillable
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $url = null;

    /**
     * Getter for file
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\LabeledMediaFileResource
     */
    public function getFile()
    {
        return $this->file instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->file;
    }

    /**
     * Setter for file
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\LabeledMediaFileResource $file
     * @return $this
     */
    public function setFile(\CWM\BroadWorksConnector\Ocip\Models\LabeledMediaFileResource $file)
    {
        $this->file = $file;
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
    public function setUrl($url)
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

