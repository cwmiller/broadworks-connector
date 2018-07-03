<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserPolycomPhoneServicesGetPrimaryEndpointListRequest
 *
 * Request the user's list of device profiles on which the user is the primary
 * user.
 *         The response is either a
 * UserPolycomPhoneServicesGetPrimaryEndpointListResponse or an ErrorResponse.
 *
 * @see UserPolycomPhoneServicesGetPrimaryEndpointListResponse
 * @see ErrorResponse
 */
class UserPolycomPhoneServicesGetPrimaryEndpointListRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
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

