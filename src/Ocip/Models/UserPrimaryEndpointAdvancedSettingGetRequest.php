<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserPrimaryEndpointAdvancedSettingGetRequest
 *
 * Get the Users Primary Endpoint setting.
 *         The response is either a UserPrimaryEndpointAdvancedSettingGetResponse
 * or an ErrorResponse.
 */
class UserPrimaryEndpointAdvancedSettingGetRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
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

