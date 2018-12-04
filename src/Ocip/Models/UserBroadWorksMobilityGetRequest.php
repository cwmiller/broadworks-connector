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
 * @Groups [{"id":"f63b5273e12f283713f4aab9400bb342:198","type":"sequence"}]
 */
class UserBroadWorksMobilityGetRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName userId
     * @Type string
     * @Group f63b5273e12f283713f4aab9400bb342:198
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

