<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * ServiceScriptsFileResource
 *
 * Service Scripts File Resource for uploading file content.
 *
 * @Groups [{"id":"6d2fe94f74b33d09baa45f68834840d6:33","type":"sequence"}]
 */
class ServiceScriptsFileResource
{

    /**
     * @ElementName fileName
     * @Type string
     * @Group 6d2fe94f74b33d09baa45f68834840d6:33
     * @var string|null
     */
    private $fileName = null;

    /**
     * @ElementName scriptContent
     * @Type string
     * @Group 6d2fe94f74b33d09baa45f68834840d6:33
     * @var string|null
     */
    private $scriptContent = null;

    /**
     * Getter for fileName
     *
     * @return string
     */
    public function getFileName()
    {
        return $this->fileName instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->fileName;
    }

    /**
     * Setter for fileName
     *
     * @param string $fileName
     * @return $this
     */
    public function setFileName($fileName)
    {
        $this->fileName = $fileName;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetFileName()
    {
        $this->fileName = null;
        return $this;
    }

    /**
     * Getter for scriptContent
     *
     * @return string
     */
    public function getScriptContent()
    {
        return $this->scriptContent instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->scriptContent;
    }

    /**
     * Setter for scriptContent
     *
     * @param string $scriptContent
     * @return $this
     */
    public function setScriptContent($scriptContent)
    {
        $this->scriptContent = $scriptContent;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetScriptContent()
    {
        $this->scriptContent = null;
        return $this;
    }


}

