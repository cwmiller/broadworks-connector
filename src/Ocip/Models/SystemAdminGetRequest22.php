<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemAdminGetRequest22
 *
 * Get a system or provisioning administrators profile.
 *         The response is either a SystemAdminGetResponse22 or an ErrorResponse.
 *
 * @see SystemAdminGetResponse22
 * @see ErrorResponse
 * @Groups [{"id":"da582a1f8028404e70d260cf1f891033:2180","type":"sequence"}]
 */
class SystemAdminGetRequest22 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{
    /**
     * @ElementName userId
     * @Type string
     * @Group da582a1f8028404e70d260cf1f891033:2180
     * @MinLength 1
     * @MaxLength 161
     * @var string|null
     */
    protected $userId = null;

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

