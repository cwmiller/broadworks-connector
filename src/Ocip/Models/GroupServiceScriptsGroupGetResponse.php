<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupServiceScriptsGroupGetResponse
 *
 * Response to GroupServiceScriptsGroupGetRequest.
 */
class GroupServiceScriptsGroupGetResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName isActive
     * @var bool|null
     */
    private $isActive = null;

    /**
     * @ElementName scriptName
     * @var string|null
     */
    private $scriptName = null;

    /**
     * @ElementName scriptContent
     * @var string|null
     */
    private $scriptContent = null;

    /**
     * Getter for isActive
     *
     * @ElementName isActive
     * @return bool|null
     */
    public function getIsActive()
    {
        return $this->isActive;
    }

    /**
     * Setter for isActive
     *
     * @ElementName isActive
     * @param bool|null $isActive
     * @return $this
     */
    public function setIsActive($isActive)
    {
        $this->isActive = $isActive;
        return $this;
    }

    /**
     * Getter for scriptName
     *
     * @ElementName scriptName
     * @return string|null
     */
    public function getScriptName()
    {
        return $this->scriptName;
    }

    /**
     * Setter for scriptName
     *
     * @ElementName scriptName
     * @param string|null $scriptName
     * @return $this
     */
    public function setScriptName($scriptName)
    {
        $this->scriptName = $scriptName;
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

