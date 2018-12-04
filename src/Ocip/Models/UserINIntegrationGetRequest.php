<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserINIntegrationGetRequest
 *
 * Request to get the user level IN Integration service attributes
 *         Response is either UserINIntegrationGetResponse or ErrorResponse
 *
 * @see UserINIntegrationGetResponse
 * @see ErrorResponse
 * @Groups [{"id":"72400b012992ba813bc8ca14c5f84208:41","type":"sequence"}]
 */
class UserINIntegrationGetRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName userId
     * @Type string
     * @Group 72400b012992ba813bc8ca14c5f84208:41
     * @var string|null
     */
    private $userId = null;

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

