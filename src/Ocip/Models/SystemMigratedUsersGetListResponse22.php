<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemMigratedUsersGetListResponse22
 *
 * Response to SystemMigratedUsersGetListRequest22.
 *         The optional totalNumberOfMigratedUsers is returned only when the
 * userListSizeLimit is set in the request and 
 *         if the total number of migrated users is greater than the value of
 * userListSizeLimit.
 *
 * @see SystemMigratedUsersGetListRequest22
 */
class SystemMigratedUsersGetListResponse22 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName userId
     * @var string[]
     */
    private $userId = array(
        
    );

    /**
     * @ElementName totalNumberOfMigratedUsers
     * @var int|null
     */
    private $totalNumberOfMigratedUsers = null;

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
    public function setUserId(array $userId)
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
    public function addUserId(string $userId)
    {
        $this->userId []= $userId;
        return $this;
    }

    /**
     * Getter for totalNumberOfMigratedUsers
     *
     * @ElementName totalNumberOfMigratedUsers
     * @return int|null
     */
    public function getTotalNumberOfMigratedUsers()
    {
        return $this->totalNumberOfMigratedUsers;
    }

    /**
     * Setter for totalNumberOfMigratedUsers
     *
     * @ElementName totalNumberOfMigratedUsers
     * @param int|null $totalNumberOfMigratedUsers
     * @return $this
     */
    public function setTotalNumberOfMigratedUsers($totalNumberOfMigratedUsers)
    {
        $this->totalNumberOfMigratedUsers = $totalNumberOfMigratedUsers;
        return $this;
    }


}

