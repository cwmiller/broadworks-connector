<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserRoutePointSupervisorModifyListRequest
 *
 * Request to modify the Route Point supervisor list for a user.
 *         The response is either SuccessResponse or ErrorResponse.
 */
class UserRoutePointSupervisorModifyListRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName userId
     * @var string|null
     */
    private $userId = null;

    /**
     * @ElementName supervisorUserIdList
     * @var \CWM\BroadWorksConnector\Ocip\Models\ReplacementUserIdList|null
     */
    private $supervisorUserIdList = null;

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

    /**
     * Getter for supervisorUserIdList
     *
     * @ElementName supervisorUserIdList
     * @return \CWM\BroadWorksConnector\Ocip\Models\ReplacementUserIdList|null
     */
    public function getSupervisorUserIdList()
    {
        return $this->supervisorUserIdList;
    }

    /**
     * Setter for supervisorUserIdList
     *
     * @ElementName supervisorUserIdList
     * @param \CWM\BroadWorksConnector\Ocip\Models\ReplacementUserIdList|null $supervisorUserIdList
     * @return $this
     */
    public function setSupervisorUserIdList($supervisorUserIdList)
    {
        $this->supervisorUserIdList = $supervisorUserIdList;
        return $this;
    }


}

