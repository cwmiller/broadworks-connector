<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserMeetMeConferencingGetAvailableDelegateListResponse
 *
 * Response to UserMeetMeConferencingGetAvailableDelegateListRequest.
 *         Contains all hosts assigned on a bridge.
 *         The table has column headings: "User Id", "Last Name", "First Name",
 * "Hiragana Last Name", "Hiragana First Name", "Phone Number", "Extension",
 * "Department" and "Email Address".
 *
 * @see UserMeetMeConferencingGetAvailableDelegateListRequest
 */
class UserMeetMeConferencingGetAvailableDelegateListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
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
    public function setConferenceDelegateUserTable(\CWM\BroadWorksConnector\Ocip\Models\C\OCITable $conferenceDelegateUserTable)
    {
        $this->conferenceDelegateUserTable = $conferenceDelegateUserTable;
        return $this;
    }


}

