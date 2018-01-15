<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserServiceScriptsUserModifyRequest
 *
 * Modify the user level data associated with Service Scripts User Configuration.
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class UserServiceScriptsUserModifyRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName userId
     * @var string|null
     */
    private $userId = null;

    /**
     * @ElementName isActive
     * @var bool|null
     */
    private $isActive = null;

    /**
     * @ElementName scriptFile
     * @var \CWM\BroadWorksConnector\Ocip\Models\ServiceScriptsFileResource|null
     */
    private $scriptFile = null;

    /**
     * @ElementName scriptUrl
     * @var string|null
     */
    private $scriptUrl = null;

    /**
     * Getter for userId
     *
     * @ElementName userId
     * @return string|null
     */
    public function getUserId()
    {
        return $this->userId;
    }

    /**
     * Setter for userId
     *
     * @ElementName userId
     * @param string|null $userId
     * @return $this
     */
    public function setUserId($userId)
    {
        $this->userId = $userId;
        return $this;
    }

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
     * Getter for scriptFile
     *
     * @ElementName scriptFile
     * @return \CWM\BroadWorksConnector\Ocip\Models\ServiceScriptsFileResource|null
     */
    public function getScriptFile()
    {
        return $this->scriptFile;
    }

    /**
     * Setter for scriptFile
     *
     * @ElementName scriptFile
     * @param \CWM\BroadWorksConnector\Ocip\Models\ServiceScriptsFileResource|null $scriptFile
     * @return $this
     */
    public function setScriptFile($scriptFile)
    {
        $this->scriptFile = $scriptFile;
        return $this;
    }

    /**
     * Getter for scriptUrl
     *
     * @ElementName scriptUrl
     * @return string|null
     */
    public function getScriptUrl()
    {
        return $this->scriptUrl;
    }

    /**
     * Setter for scriptUrl
     *
     * @ElementName scriptUrl
     * @param string|null $scriptUrl
     * @return $this
     */
    public function setScriptUrl($scriptUrl)
    {
        $this->scriptUrl = $scriptUrl;
        return $this;
    }


}

