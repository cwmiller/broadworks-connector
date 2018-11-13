<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserBroadWorksReceptionistEnterpriseGetRequest
 *
 * Request the monitored users list for the BroadWorks Receptionist - Enterprise
 * service.
 *         The response is either a UserBroadWorksReceptionistEnterpriseGetResponse
 * or an ErrorResponse.
 *
 * @see UserBroadWorksReceptionistEnterpriseGetResponse
 * @see ErrorResponse
 */
class UserBroadWorksReceptionistEnterpriseGetRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName userId
     * @Type string
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

