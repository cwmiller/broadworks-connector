<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserConnectedLineIdentificationRestrictionGetRequest
 *
 * Request the user level data associated with Connected Line ID Restriction.
 *         The response is either a UserConnectedLineIdentificationRestrictionGetResponse or an
 *         ErrorResponse.
 *
 * @see UserConnectedLineIdentificationRestrictionGetResponse
 * @see ErrorResponse
 * @Groups [{"id":"755f02354120ea5249923372461f5503:44","type":"sequence"}]
 */
class UserConnectedLineIdentificationRestrictionGetRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName userId
     * @Type string
     * @Group 755f02354120ea5249923372461f5503:44
     * @MinLength 1
     * @MaxLength 161
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

