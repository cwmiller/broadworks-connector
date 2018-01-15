<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserCallProcessingGetPolicyRequest19sp1
 *
 * Request the user level data associated with Call Processing Policy.
 *         The response is either a UserCallProcessingGetPolicyResponse19sp1 or an
 *         ErrorResponse.
 */
class UserCallProcessingGetPolicyRequest19sp1 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
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

