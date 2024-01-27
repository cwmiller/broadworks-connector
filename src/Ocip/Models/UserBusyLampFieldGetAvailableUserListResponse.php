<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserBusyLampFieldGetAvailableUserListResponse
 *
 * Response to the BusyLampFieldGetAvailableUserListRequest.
 *         Returns a table with column headings:
 *           "User Id", "Last Name", "First Name", "Hiragana Last Name", "Hiragana First Name",
 *           "Phone Number", "Extension", "Department", "Email Address", "IMP Id",
 *           "User External Id", and "User Place Type".
 *         The following columns are supported in AS data mode only:
 *           "User External Id", "User Place Type"
 *         The possible values for "User Place Type" are: User, Place.
 *
 * @see BusyLampFieldGetAvailableUserListRequest
 * @Groups [{"id":"b1745b5f688013b73224574a66f4f4b2:156","type":"sequence"}]
 */
class UserBusyLampFieldGetAvailableUserListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{
    /**
     * @ElementName userTable
     * @Type \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
     * @Group b1745b5f688013b73224574a66f4f4b2:156
     * @var \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    protected $userTable = null;

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

