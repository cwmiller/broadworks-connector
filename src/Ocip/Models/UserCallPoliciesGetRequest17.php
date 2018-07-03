<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserCallPoliciesGetRequest17
 *
 * Request the user level data associated with Call Policies.
 *         The response is either a UserCallPoliciesGetResponse17
 *         or an ErrorResponse.
 *         
 *         Replaced by: UserCallPoliciesGetRequest19sp1 in AS data mode
 *
 * @see UserCallPoliciesGetResponse17
 * @see ErrorResponse
 * @see UserCallPoliciesGetRequest19sp1
 */
class UserCallPoliciesGetRequest17 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
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

