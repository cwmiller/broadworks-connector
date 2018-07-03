<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserSequentialRingGetRequest13mp16
 *
 * Get the user's sequential ring service setting.
 *         The response is either a UserSequentialRingGetResponse13mp16 or an
 * ErrorResponse.
 *         Replaced By: UserSequentialRingGetRequest14sp4
 *
 * @see UserSequentialRingGetResponse13
 * @see ErrorResponse
 * @see UserSequentialRingGetRequest14sp4
 */
class UserSequentialRingGetRequest13mp16 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
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

