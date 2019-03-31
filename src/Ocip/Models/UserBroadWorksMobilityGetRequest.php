<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserBroadWorksMobilityGetRequest
 *
 * Get the user's broadworks mobility service settings.
 *         The response is either a UserBroadWorksMobilityGetResponse or an ErrorResponse.
 *
 * @see UserBroadWorksMobilityGetResponse
 * @see ErrorResponse
 * @Groups [{"id":"a8b2edcd7d6936a8b76653949ae59623:171","type":"sequence"}]
 */
class UserBroadWorksMobilityGetRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName userId
     * @Type string
     * @Group a8b2edcd7d6936a8b76653949ae59623:171
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

