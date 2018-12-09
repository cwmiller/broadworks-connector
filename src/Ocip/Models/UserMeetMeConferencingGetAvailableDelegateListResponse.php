<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserMeetMeConferencingGetAvailableDelegateListResponse
 *
 * Response to UserMeetMeConferencingGetAvailableDelegateListRequest.
 *         Contains all hosts assigned on a bridge.
 *         The table has column headings: "User Id", "Last Name", "First Name", "Hiragana Last Name", "Hiragana First Name", "Phone Number", "Extension", "Department" and "Email Address".
 *
 * @see UserMeetMeConferencingGetAvailableDelegateListRequest
 * @Groups [{"id":"7a29c84abb8473449085e6657fc6948d:564","type":"sequence"}]
 */
class UserMeetMeConferencingGetAvailableDelegateListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName conferenceDelegateUserTable
     * @Type \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
     * @Group 7a29c84abb8473449085e6657fc6948d:564
     * @var \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    private $conferenceDelegateUserTable = null;

    /**
     * Getter for conferenceDelegateUserTable
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
     */
    public function getConferenceDelegateUserTable()
    {
        return $this->conferenceDelegateUserTable instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->conferenceDelegateUserTable;
    }

    /**
     * Setter for conferenceDelegateUserTable
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\C\OCITable $conferenceDelegateUserTable
     * @return $this
     */
    public function setConferenceDelegateUserTable(\CWM\BroadWorksConnector\Ocip\Models\C\OCITable $conferenceDelegateUserTable)
    {
        $this->conferenceDelegateUserTable = $conferenceDelegateUserTable;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetConferenceDelegateUserTable()
    {
        $this->conferenceDelegateUserTable = null;
        return $this;
    }


}

