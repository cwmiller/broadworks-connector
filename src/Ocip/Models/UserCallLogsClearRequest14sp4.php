<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserCallLogsClearRequest14sp4
 *
 * Clear a user's call logs associated with Basic Call Logs and Enhanced
 *         Call Logs features. The calls logs are deleted from both Basic Call Logs
 *
 *         and Enhanced Call Logs if both features are assigned.
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class UserCallLogsClearRequest14sp4 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName userId
     * @var string|null
     */
    private $userId = null;

    /**
     * @ElementName deleteAllCallLogs
     * @var bool|null
     */
    private $deleteAllCallLogs = null;

    /**
     * @ElementName deleteSpecifiedCallLogs
     * @var \CWM\BroadWorksConnector\Ocip\Models\UserCallLogsClearRequest14sp4\DeleteSpecifiedCallLogs|null
     */
    private $deleteSpecifiedCallLogs = null;

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
     * Getter for deleteAllCallLogs
     *
     * @ElementName deleteAllCallLogs
     * @return bool|null
     */
    public function getDeleteAllCallLogs()
    {
        return $this->deleteAllCallLogs;
    }

    /**
     * Setter for deleteAllCallLogs
     *
     * @ElementName deleteAllCallLogs
     * @param bool|null $deleteAllCallLogs
     * @return $this
     */
    public function setDeleteAllCallLogs($deleteAllCallLogs)
    {
        $this->deleteAllCallLogs = $deleteAllCallLogs;
        return $this;
    }

    /**
     * Getter for deleteSpecifiedCallLogs
     *
     * @ElementName deleteSpecifiedCallLogs
     * @return \CWM\BroadWorksConnector\Ocip\Models\UserCallLogsClearRequest14sp4\DeleteSpecifiedCallLogs|null
     */
    public function getDeleteSpecifiedCallLogs()
    {
        return $this->deleteSpecifiedCallLogs;
    }

    /**
     * Setter for deleteSpecifiedCallLogs
     *
     * @ElementName deleteSpecifiedCallLogs
     * @param \CWM\BroadWorksConnector\Ocip\Models\UserCallLogsClearRequest14sp4\DeleteSpecifiedCallLogs|null $deleteSpecifiedCallLogs
     * @return $this
     */
    public function setDeleteSpecifiedCallLogs($deleteSpecifiedCallLogs)
    {
        $this->deleteSpecifiedCallLogs = $deleteSpecifiedCallLogs;
        return $this;
    }


}

