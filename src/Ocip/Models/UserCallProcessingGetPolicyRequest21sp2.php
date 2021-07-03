<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserCallProcessingGetPolicyRequest21sp2
 *
 * Request the user level data associated with Call Processing Policy.
 *         The response is either a UserCallProcessingGetPolicyResponse21sp2 or an
 *         ErrorResponse.
 *         Replaced by: UserCallProcessingGetPolicyRequest22 in AS data mode
 *
 * @see UserCallProcessingGetPolicyResponse21sp2
 * @see ErrorResponse
 * @see UserCallProcessingGetPolicyRequest22
 * @Groups [{"id":"de4d76f01f337fe4694212ec9f771753:12759","type":"sequence"}]
 */
class UserCallProcessingGetPolicyRequest21sp2 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName userId
     * @Type string
     * @Group de4d76f01f337fe4694212ec9f771753:12759
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

