<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserBroadWorksReceptionistSmallBusinessGetRequest
 *
 * Request the Receptionist Small Business parameters.
 *         The response is either a
 * UserBroadWorksReceptionistSmallBusinessGetResponse or an ErrorResponse.
 */
class UserBroadWorksReceptionistSmallBusinessGetRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName userId
     * @var string|null
     */
    private $userId = null;

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


}

