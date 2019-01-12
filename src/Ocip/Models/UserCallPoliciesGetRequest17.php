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
 * @Groups [{"id":"de4d76f01f337fe4694212ec9f771753:2074","type":"sequence"}]
 */
class UserCallPoliciesGetRequest17 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName userId
     * @Type string
     * @Group de4d76f01f337fe4694212ec9f771753:2074
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

