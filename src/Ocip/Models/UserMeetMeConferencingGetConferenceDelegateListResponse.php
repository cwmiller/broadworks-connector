<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserMeetMeConferencingGetConferenceDelegateListResponse
 *
 * Response to UserMeetMeConferencingGetConferenceDelegateListRequest.
 *         Contains a table with table heading:"User Id", "Last Name", "First
 * Name", "Hiragana Last Name",
 *         "Hiragana First Name","Phone Number", "Extension", "Department" and
 * "Email Address".
 */
class UserMeetMeConferencingGetConferenceDelegateListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName conferenceDelegateUserTable
     * @var \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    private $conferenceDelegateUserTable = null;

    /**
     * Getter for conferenceDelegateUserTable
     *
     * @ElementName conferenceDelegateUserTable
     * @return \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    public function getConferenceDelegateUserTable()
    {
        return $this->conferenceDelegateUserTable;
    }

    /**
     * Setter for conferenceDelegateUserTable
     *
     * @ElementName conferenceDelegateUserTable
     * @param \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null $conferenceDelegateUserTable
     * @return $this
     */
    public function setConferenceDelegateUserTable($conferenceDelegateUserTable)
    {
        $this->conferenceDelegateUserTable = $conferenceDelegateUserTable;
        return $this;
    }


}

