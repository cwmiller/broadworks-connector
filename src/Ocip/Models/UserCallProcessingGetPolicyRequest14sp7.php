<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserCallProcessingGetPolicyRequest14sp7
 *
 * Request the user level data associated with Call Processing Policy.
 *             The response is either a UserCallProcessingGetPolicyResponse14sp7 or
 * an
 *             ErrorResponse.
 *
 * @see UserCallProcessingGetPolicyResponse14sp7
 * @see ErrorResponse
 */
class UserCallProcessingGetPolicyRequest14sp7 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
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

