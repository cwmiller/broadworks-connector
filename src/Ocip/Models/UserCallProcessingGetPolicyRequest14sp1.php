<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserCallProcessingGetPolicyRequest14sp1
 *
 * Request the user level data associated with Call Processing Policy.
 *         The response is either a UserCallProcessingGetPolicyResponse14sp1 or an
 *         ErrorResponse.
 *         Replaced By: UserCallProcessingGetPolicyRequest14sp7
 *
 * @see UserCallProcessingGetPolicyResponse14sp1
 * @see ErrorResponse
 * @see UserCallProcessingGetPolicyRequest14sp7
 * @Groups [{"id":"1a79c7896cb04feac6eff47a5321756e:33176","type":"sequence"}]
 */
class UserCallProcessingGetPolicyRequest14sp1 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName userId
     * @Type string
     * @Group 1a79c7896cb04feac6eff47a5321756e:33176
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

