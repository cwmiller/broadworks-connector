<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserServiceScriptsUserGetLogResponse
 *
 * Response to UserServiceScriptsUserGetLogRequest.
 */
class UserServiceScriptsUserGetLogResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName logContent
     * @var string|null
     */
    private $logContent = null;

    /**
     * Getter for logContent
     *
     * @ElementName logContent
     * @return string|null
     */
    public function getLogContent()
    {
        return $this->logContent;
    }

    /**
     * Setter for logContent
     *
     * @ElementName logContent
     * @param string|null $logContent
     * @return $this
     */
    public function setLogContent($logContent)
    {
        $this->logContent = $logContent;
        return $this;
    }


}

