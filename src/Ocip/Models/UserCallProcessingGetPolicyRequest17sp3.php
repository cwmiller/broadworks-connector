<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserCallProcessingGetPolicyRequest17sp3
 *
 * Request the user level data associated with Call Processing Policy.
 *           The response is either a UserCallProcessingGetPolicyResponse17sp3 or
 * an
 *           ErrorResponse.
 *           
 *           Replaced by: UserCallProcessingGetPolicyRequest17Sp4
 *
 * @see UserCallProcessingGetPolicyResponse17sp3
 * @see ErrorResponse
 * @see UserCallProcessingGetPolicyRequest17Sp4
 */
class UserCallProcessingGetPolicyRequest17sp3 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
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

