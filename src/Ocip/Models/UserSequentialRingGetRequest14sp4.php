<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserSequentialRingGetRequest14sp4
 *
 * Get the user's sequential ring service setting.
 *         The response is either a UserSequentialRingGetResponse14sp4 or an ErrorResponse.
 *
 * @see UserSequentialRingGetResponse14sp4
 * @see ErrorResponse
 * @Groups [{"id":"67e3a7b2c00678707dc6a05a489120bc:118","type":"sequence"}]
 */
class UserSequentialRingGetRequest14sp4 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName userId
     * @Type string
     * @Group 67e3a7b2c00678707dc6a05a489120bc:118
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

