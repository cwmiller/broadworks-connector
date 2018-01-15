<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserConnectedLineIdentificationRestrictionGetRequest
 *
 * Request the user level data associated with Connected Line ID Restriction.
 *         The response is either a
 * UserConnectedLineIdentificationRestrictionGetResponse or an
 *         ErrorResponse.
 */
class UserConnectedLineIdentificationRestrictionGetRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
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

