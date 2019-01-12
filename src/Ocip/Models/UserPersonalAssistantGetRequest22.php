<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserPersonalAssistantGetRequest22
 *
 * Request to get the User Personal Assistant information.
 *         The response is either a UserPersonalAssistantGetResponse22 or an ErrorResponse.
 *
 * @see UserPersonalAssistantGetResponse22
 * @see ErrorResponse
 * @Groups [{"id":"f53ece1c00394ef2d3d76f532f9a9663:300","type":"sequence"}]
 */
class UserPersonalAssistantGetRequest22 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName userId
     * @Type string
     * @Group f53ece1c00394ef2d3d76f532f9a9663:300
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

