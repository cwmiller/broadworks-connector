<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupServicePhoneNumberLookupResponse
 *
 * Response to the GroupServicePhoneNumberLookupRequest. 
 *         The column headings for the userTable are: "User Id", "Last Name", "First Name", "Hiragana Last Name", 
 *         "Hiragana First Name", "Phone Number", "Extension" and "Department".
 *
 * @see GroupServicePhoneNumberLookupRequest
 * @Groups [{"id":"4b0e7857796c636464362260a2f8e5ee:7673","type":"sequence"}]
 */
class GroupServicePhoneNumberLookupResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{
    /**
     * @ElementName userTable
     * @Type \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
     * @Group 4b0e7857796c636464362260a2f8e5ee:7673
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

