<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserCallToNumberGetAvailableListRequest
 *
 * Request to get the user available Call to Number List information. The response is either a UserCallToNumberGetAvailableListResponse or an ErrorResponse.
 *
 * @see UserCallToNumberGetAvailableListResponse
 * @see ErrorResponse
 * @Groups [{"id":"f53ece1c00394ef2d3d76f532f9a9663:97","type":"sequence"}]
 */
class UserCallToNumberGetAvailableListRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName userId
     * @Type string
     * @Group f53ece1c00394ef2d3d76f532f9a9663:97
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

