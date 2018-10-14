<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserTwoStageDialingGetRequest13Mp20
 *
 * Request the user level data associated with Two Stage Dialing.
 *           The response is either a UserTwoStageDialingGetResponse13Mp20 or an
 * ErrorResponse.
 *
 * @see UserTwoStageDialingGetResponse13
 * @see ErrorResponse
 */
class UserTwoStageDialingGetRequest13Mp20 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
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

