<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemGeographicRedundancyUnreachableFromPrimaryGetUserListResponse22
 *
 * Response to
 * SystemGeographicRedundancyUnreachableFromPrimaryGetUserListRequest22. 
 *         The Unreachable From Primary User table column headings are: "User ID",
 * "Lineport".
 *         The optional totalNumberOfUnreachableFromPrimaryUsers is returned only
 * when the userListSizeLimit is set in the request and 
 *         if the total number of unreachable from primary users is greater than
 * the value of userListSizeLimit.
 *
 * @see SystemGeographicRedundancyUnreachableFromPrimaryGetUserListRequest22
 */
class SystemGeographicRedundancyUnreachableFromPrimaryGetUserListResponse22 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName unreachableFromPrimaryUserTable
     * @var \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    private $unreachableFromPrimaryUserTable = null;

    /**
     * @ElementName totalNumberOfUnreachableFromPrimaryUsers
     * @var int|null
     */
    private $totalNumberOfUnreachableFromPrimaryUsers = null;

    /**
     * Getter for unreachableFromPrimaryUserTable
     *
     * @ElementName unreachableFromPrimaryUserTable
     * @return \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    public function getUnreachableFromPrimaryUserTable()
    {
        return $this->unreachableFromPrimaryUserTable;
    }

    /**
     * Setter for unreachableFromPrimaryUserTable
     *
     * @ElementName unreachableFromPrimaryUserTable
     * @param \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null $unreachableFromPrimaryUserTable
     * @return $this
     */
    public function setUnreachableFromPrimaryUserTable($unreachableFromPrimaryUserTable)
    {
        $this->unreachableFromPrimaryUserTable = $unreachableFromPrimaryUserTable;
        return $this;
    }

    /**
     * Getter for totalNumberOfUnreachableFromPrimaryUsers
     *
     * @ElementName totalNumberOfUnreachableFromPrimaryUsers
     * @return int|null
     */
    public function getTotalNumberOfUnreachableFromPrimaryUsers()
    {
        return $this->totalNumberOfUnreachableFromPrimaryUsers;
    }

    /**
     * Setter for totalNumberOfUnreachableFromPrimaryUsers
     *
     * @ElementName totalNumberOfUnreachableFromPrimaryUsers
     * @param int|null $totalNumberOfUnreachableFromPrimaryUsers
     * @return $this
     */
    public function setTotalNumberOfUnreachableFromPrimaryUsers($totalNumberOfUnreachableFromPrimaryUsers)
    {
        $this->totalNumberOfUnreachableFromPrimaryUsers = $totalNumberOfUnreachableFromPrimaryUsers;
        return $this;
    }


}

