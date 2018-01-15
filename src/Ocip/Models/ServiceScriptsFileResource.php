<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * ServiceScriptsFileResource
 *
 * Service Scripts File Resource for uploading file content.
 */
class ServiceScriptsFileResource
{

    /**
     * @ElementName fileName
     * @var string|null
     */
    private $fileName = null;

    /**
     * @ElementName scriptContent
     * @var string|null
     */
    private $scriptContent = null;

    /**
     * Getter for fileName
     *
     * @ElementName fileName
     * @return string|null
     */
    public function getFileName()
    {
        return $this->fileName;
    }

    /**
     * Setter for fileName
     *
     * @ElementName fileName
     * @param string|null $fileName
     * @return $this
     */
    public function setFileName($fileName)
    {
        $this->fileName = $fileName;
        return $this;
    }

    /**
     * Getter for scriptContent
     *
     * @ElementName scriptContent
     * @return string|null
     */
    public function getScriptContent()
    {
        return $this->scriptContent;
    }

    /**
     * Setter for scriptContent
     *
     * @ElementName scriptContent
     * @param string|null $scriptContent
     * @return $this
     */
    public function setScriptContent($scriptContent)
    {
        $this->scriptContent = $scriptContent;
        return $this;
    }


}

