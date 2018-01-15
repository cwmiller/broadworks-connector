<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserCallCenterGetListResponse
 *
 * Response to the UserCallCentersLoginGetListRequest.
 *         Indicates whether the agent is current available (logged in) to each
 * call center in the list.
 *         Contains a table with column headings: "Service User Id", "Phone
 * Number", "Extension", "Available", "Logoff Allowed".
 *         ***** NOTE: Prior to release 14sp1, the AppServer had a bug that caused
 * it to emit column heading "Service User ID" with
 *         *****       the ID capitalized. Beginning in release 14sp1, the
 * appserver is compliant with the schema and emits a
 *         *****       the column heading "Service User Id".
 *         Replaced By: UserCallCenterGetResponse
 */
class UserCallCenterGetListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName userTable
     * @var \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    private $userTable = null;

    /**
     * Getter for userTable
     *
     * @ElementName userTable
     * @return \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    public function getUserTable()
    {
        return $this->userTable;
    }

    /**
     * Setter for userTable
     *
     * @ElementName userTable
     * @param \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null $userTable
     * @return $this
     */
    public function setUserTable($userTable)
    {
        $this->userTable = $userTable;
        return $this;
    }


}

