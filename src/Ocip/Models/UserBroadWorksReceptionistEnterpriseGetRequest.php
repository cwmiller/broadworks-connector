<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserBroadWorksReceptionistEnterpriseGetRequest
 *
 * Request the monitored users list for the BroadWorks Receptionist - Enterprise service.
 *         The response is either a UserBroadWorksReceptionistEnterpriseGetResponse or an ErrorResponse.
 *
 * @see UserBroadWorksReceptionistEnterpriseGetResponse
 * @see ErrorResponse
 * @Groups [{"id":"fb12998f4f9e45cedde01f08569f4c7c:179","type":"sequence"}]
 */
class UserBroadWorksReceptionistEnterpriseGetRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName userId
     * @Type string
     * @Group fb12998f4f9e45cedde01f08569f4c7c:179
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

