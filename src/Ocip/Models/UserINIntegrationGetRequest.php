<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserINIntegrationGetRequest
 *
 * Request to get the user level IN Integration service attributes
 *         Response is either UserINIntegrationGetResponse or ErrorResponse
 *
 * @see UserINIntegrationGetResponse
 * @Groups [{"id":"841786e27ac49a43576369a93b4cc726:44","type":"sequence"}]
 */
class UserINIntegrationGetRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{
    /**
     * @ElementName userId
     * @Type string
     * @Group 841786e27ac49a43576369a93b4cc726:44
     * @MinLength 1
     * @MaxLength 161
     * @var string|null
     */
    protected $userId = null;

    /**
     * Getter for userId
     *
     * @return string
     */
    public function getUserId()
    {
        return $this->userId instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->userId;
    }

    /**
     * Setter for userId
     *
     * @param string $userId
     * @return $this
     */
    public function setUserId($userId)
    {
        $this->userId = $userId;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetUserId()
    {
        $this->userId = null;
        return $this;
    }
}

