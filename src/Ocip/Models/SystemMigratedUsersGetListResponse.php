<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemMigratedUsersGetListResponse
 *
 * Response to SystemMigratedUsersGetListRequest.
 *         
 *          Replaced by: SystemMigratedUsersGetListResponse22 in AS data mode
 *
 * @see SystemMigratedUsersGetListRequest
 * @see SystemMigratedUsersGetListResponse22
 */
class SystemMigratedUsersGetListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName userId
     * @var string[]
     */
    private $userId = array(
        
    );

    /**
     * Getter for userId
     *
     * @ElementName userId
     * @return string[]
     */
    public function getUserId()
    {
        return $this->userId;
    }

    /**
     * Setter for userId
     *
     * @ElementName userId
     * @param string[] $userId
     * @return $this
     */
    public function setUserId($userId)
    {
        $this->userId = $userId;
        return $this;
    }

    /**
     * Adder for userId
     *
     * @ElementName userId
     * @param string $userId
     * @return $this
     */
    public function addUserId($userId)
    {
        $this->userId []= $userId;
        return $this;
    }


}

