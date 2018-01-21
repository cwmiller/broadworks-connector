<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemGeographicRedundancyUnreachableFromPrimaryGetUserListResponse
 *
 * Response to SystemGeographicRedundancyUnreachableFromPrimaryGetUserListRequest.
 * The Unreachable From Primary User table column
 *         headings are: "User ID", "Lineport".
 *         
 *         Replaced by:
 * SystemGeographicRedundancyUnreachableFromPrimaryGetUserListResponse22 in AS data
 * mode
 */
class SystemGeographicRedundancyUnreachableFromPrimaryGetUserListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName unreachableFromPrimaryUserTable
     * @var \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    private $unreachableFromPrimaryUserTable = null;

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


}

