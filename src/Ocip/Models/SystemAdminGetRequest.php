<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemAdminGetRequest
 *
 * Get a system or provisioning administrators profile.
 *         The response is either a SystemAdminGetResponse or an ErrorResponse.
 *
 * @see SystemAdminGetResponse
 * @see ErrorResponse
 * @Groups [{"id":"b5f5416d9e71f8e4246cda16c4723744:1691","type":"sequence"}]
 */
class SystemAdminGetRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName userId
     * @Type string
     * @Group b5f5416d9e71f8e4246cda16c4723744:1691
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

