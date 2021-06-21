<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserCallCenterGetListResponse
 *
 * Response to the UserCallCentersLoginGetListRequest.
 *         Indicates whether the agent is current available (logged in) to each call center in the list.
 *         Contains a table with column headings: "Service User Id", "Phone Number", "Extension", "Available", "Logoff Allowed".
 *         ***** NOTE: Prior to release 14sp1, the AppServer had a bug that caused it to emit column heading "Service User ID" with
 *         *****       the ID capitalized. Beginning in release 14sp1, the appserver is compliant with the schema and emits a
 *         *****       the column heading "Service User Id".
 *         Replaced By: UserCallCenterGetResponse
 *
 * @see UserCallCentersLoginGetListRequest
 * @see UserCallCenterGetResponse
 * @Groups [{"id":"ab0042aa512abc10edb3c55e4b416b0b:40353","type":"sequence"}]
 */
class UserCallCenterGetListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName userTable
     * @Type \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
     * @Group ab0042aa512abc10edb3c55e4b416b0b:40353
     * @var \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    private $userTable = null;

    /**
     * Getter for userTable
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
     */
    public function getUserTable()
    {
        return $this->userTable instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->userTable;
    }

    /**
     * Setter for userTable
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\C\OCITable $userTable
     * @return $this
     */
    public function setUserTable(\CWM\BroadWorksConnector\Ocip\Models\C\OCITable $userTable)
    {
        $this->userTable = $userTable;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetUserTable()
    {
        $this->userTable = null;
        return $this;
    }


}

