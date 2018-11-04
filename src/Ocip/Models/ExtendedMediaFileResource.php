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
     * @var \CWM\BroadWorksConnector\Ocip\Models\LabeledMediaFileResource|null
     */
    private $file = null;

    /**
     * @ElementName url
     * @Nillable
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $url = null;

    /**
     * Getter for file
     *
     * @ElementName file
     * @return \CWM\BroadWorksConnector\Ocip\Models\LabeledMediaFileResource|null
     */
    public function getFile()
    {
        return $this->file;
    }

    /**
     * Setter for file
     *
     * @ElementName file
     * @param \CWM\BroadWorksConnector\Ocip\Models\LabeledMediaFileResource|null $file
     * @return $this
     */
    public function setFile($file)
    {
        $this->file = $file;
        return $this;
    }

    /**
     * Getter for url
     *
     * @ElementName url
     * @Nillable
     * @return string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * Setter for url
     *
     * @ElementName url
     * @Nillable
     * @param string|null|\CWM\BroadWorksConnector\Ocip\Nil $url
     * @return $this
     */
    public function setUrl($url)
    {
        $this->url = $url;
        return $this;
    }


}

