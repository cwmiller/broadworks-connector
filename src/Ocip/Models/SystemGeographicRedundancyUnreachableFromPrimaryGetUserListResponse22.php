<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemGeographicRedundancyUnreachableFromPrimaryGetUserListResponse22
 *
 * Response to SystemGeographicRedundancyUnreachableFromPrimaryGetUserListRequest22. 
 *         The Unreachable From Primary User table column headings are: "User ID", "Lineport".
 *         The optional totalNumberOfUnreachableFromPrimaryUsers is returned only when the userListSizeLimit is set in the request and 
 *         if the total number of unreachable from primary users is greater than the value of userListSizeLimit.
 *
 * @see SystemGeographicRedundancyUnreachableFromPrimaryGetUserListRequest22
 * @Groups [{"id":"b5f5416d9e71f8e4246cda16c4723744:9025","type":"sequence"}]
 */
class SystemGeographicRedundancyUnreachableFromPrimaryGetUserListResponse22 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName unreachableFromPrimaryUserTable
     * @Type \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
     * @Group b5f5416d9e71f8e4246cda16c4723744:9025
     * @var \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    private $unreachableFromPrimaryUserTable = null;

    /**
     * @ElementName totalNumberOfUnreachableFromPrimaryUsers
     * @Type int
     * @Optional
     * @Group b5f5416d9e71f8e4246cda16c4723744:9025
     * @var int|null
     */
    private $totalNumberOfUnreachableFromPrimaryUsers = null;

    /**
     * Getter for unreachableFromPrimaryUserTable
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
     */
    public function getUnreachableFromPrimaryUserTable()
    {
        return $this->unreachableFromPrimaryUserTable instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->unreachableFromPrimaryUserTable;
    }

    /**
     * Setter for unreachableFromPrimaryUserTable
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\C\OCITable $unreachableFromPrimaryUserTable
     * @return $this
     */
    public function setUnreachableFromPrimaryUserTable(\CWM\BroadWorksConnector\Ocip\Models\C\OCITable $unreachableFromPrimaryUserTable)
    {
        $this->unreachableFromPrimaryUserTable = $unreachableFromPrimaryUserTable;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetUnreachableFromPrimaryUserTable()
    {
        $this->unreachableFromPrimaryUserTable = null;
        return $this;
    }

    /**
     * Getter for totalNumberOfUnreachableFromPrimaryUsers
     *
     * @return int
     */
    public function getTotalNumberOfUnreachableFromPrimaryUsers()
    {
        return $this->totalNumberOfUnreachableFromPrimaryUsers instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->totalNumberOfUnreachableFromPrimaryUsers;
    }

    /**
     * Setter for totalNumberOfUnreachableFromPrimaryUsers
     *
     * @param int $totalNumberOfUnreachableFromPrimaryUsers
     * @return $this
     */
    public function setTotalNumberOfUnreachableFromPrimaryUsers($totalNumberOfUnreachableFromPrimaryUsers)
    {
        $this->totalNumberOfUnreachableFromPrimaryUsers = $totalNumberOfUnreachableFromPrimaryUsers;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetTotalNumberOfUnreachableFromPrimaryUsers()
    {
        $this->totalNumberOfUnreachableFromPrimaryUsers = null;
        return $this;
    }


}

