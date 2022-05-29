<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserINIntegrationGetRequest
 *
 * Request to get the user level IN Integration service attributes The response is either UserINIntegrationGetResponse or ErrorResponse
 *
 * @see UserINIntegrationGetResponse
 * @see ErrorResponse
 * @Groups [{"id":"e2b7b9ea45350592016ce6935a4d7694:41","type":"sequence"}]
 */
class UserINIntegrationGetRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName userId
     * @Type string
     * @Group e2b7b9ea45350592016ce6935a4d7694:41
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

