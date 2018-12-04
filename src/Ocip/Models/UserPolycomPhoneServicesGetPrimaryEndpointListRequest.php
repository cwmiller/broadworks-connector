<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserPolycomPhoneServicesGetPrimaryEndpointListRequest
 *
 * Request the user's list of device profiles on which the user is the primary user.
 *         The response is either a UserPolycomPhoneServicesGetPrimaryEndpointListResponse or an ErrorResponse.
 *
 * @see UserPolycomPhoneServicesGetPrimaryEndpointListResponse
 * @see ErrorResponse
 * @Groups [{"id":"ddf1151cc200dc2ff4c778831927e902:100","type":"sequence"}]
 */
class UserPolycomPhoneServicesGetPrimaryEndpointListRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName userId
     * @Type string
     * @Group ddf1151cc200dc2ff4c778831927e902:100
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

