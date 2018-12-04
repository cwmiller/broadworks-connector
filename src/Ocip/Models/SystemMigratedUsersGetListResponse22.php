<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemMigratedUsersGetListResponse22
 *
 * Response to SystemMigratedUsersGetListRequest22.
 *         The optional totalNumberOfMigratedUsers is returned only when the userListSizeLimit is set in the request and 
 *         if the total number of migrated users is greater than the value of userListSizeLimit.
 *
 * @see SystemMigratedUsersGetListRequest22
 * @Groups [{"id":"610f84d3e188f0477c3ae1a82ee036da:10608","type":"sequence"}]
 */
class SystemMigratedUsersGetListResponse22 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName userId
     * @Type string
     * @Array
     * @Optional
     * @Group 610f84d3e188f0477c3ae1a82ee036da:10608
     * @var string[]
     */
    private $userId = array(
        
    );

    /**
     * @ElementName totalNumberOfMigratedUsers
     * @Type int
     * @Optional
     * @Group 610f84d3e188f0477c3ae1a82ee036da:10608
     * @var int|null
     */
    private $totalNumberOfMigratedUsers = null;

    /**
     * Getter for userId
     *
     * @return string[]
     */
    public function getUserId()
    {
        return $this->userId instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->userId;
    }

    /**
     * Setter for userId
     *
     * @param string[] $userId
     * @return $this
     */
    public function setUserId(array $userId)
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
     * Adder for userId
     *
     * @param string $userId
     * @return $this
     */
    public function addUserId(string $userId)
    {
        $this->userId[] = $userId;
        return $this;
    }

    /**
     * Getter for totalNumberOfMigratedUsers
     *
     * @return int
     */
    public function getTotalNumberOfMigratedUsers()
    {
        return $this->totalNumberOfMigratedUsers instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->totalNumberOfMigratedUsers;
    }

    /**
     * Setter for totalNumberOfMigratedUsers
     *
     * @param int $totalNumberOfMigratedUsers
     * @return $this
     */
    public function setTotalNumberOfMigratedUsers($totalNumberOfMigratedUsers)
    {
        $this->totalNumberOfMigratedUsers = $totalNumberOfMigratedUsers;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetTotalNumberOfMigratedUsers()
    {
        $this->totalNumberOfMigratedUsers = null;
        return $this;
    }


}

