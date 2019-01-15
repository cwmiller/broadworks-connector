<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserRoutePointSupervisorModifyListRequest
 *
 * Request to modify the Route Point supervisor list for a user.
 *         The response is either SuccessResponse or ErrorResponse.
 *
 * @see SuccessResponse
 * @see ErrorResponse
 * @Groups [{"id":"a27224a048c30ff69eab9209dec841cc:1271","type":"sequence"}]
 */
class UserRoutePointSupervisorModifyListRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName userId
     * @Type string
     * @Group a27224a048c30ff69eab9209dec841cc:1271
     * @var string|null
     */
    private $userId = null;

    /**
     * @ElementName supervisorUserIdList
     * @Type \CWM\BroadWorksConnector\Ocip\Models\ReplacementUserIdList
     * @Nillable
     * @Optional
     * @Group a27224a048c30ff69eab9209dec841cc:1271
     * @var \CWM\BroadWorksConnector\Ocip\Models\ReplacementUserIdList|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $supervisorUserIdList = null;

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

    /**
     * Getter for supervisorUserIdList
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\ReplacementUserIdList|null
     */
    public function getSupervisorUserIdList()
    {
        return $this->supervisorUserIdList instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->supervisorUserIdList;
    }

    /**
     * Setter for supervisorUserIdList
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\ReplacementUserIdList|null $supervisorUserIdList
     * @return $this
     */
    public function setSupervisorUserIdList(\CWM\BroadWorksConnector\Ocip\Models\ReplacementUserIdList $supervisorUserIdList = null)
    {
        if ($supervisorUserIdList === null) {
            $this->supervisorUserIdList = new \CWM\BroadWorksConnector\Ocip\Nil;
        } else {
            $this->supervisorUserIdList = $supervisorUserIdList;
        }
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetSupervisorUserIdList()
    {
        $this->supervisorUserIdList = null;
        return $this;
    }


}

