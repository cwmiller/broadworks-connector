<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserMeetMeConferencingGetConferenceDelegateListResponse
 *
 * Response to UserMeetMeConferencingGetConferenceDelegateListRequest.
 *         Contains a table with table heading:"User Id", "Last Name", "First Name", "Hiragana Last Name",
 *         "Hiragana First Name","Phone Number", "Extension", "Department" and "Email Address".
 *
 * @see UserMeetMeConferencingGetConferenceDelegateListRequest
 * @Groups [{"id":"adf25df72505d1c476ebb480b6cce18d:700","type":"sequence"}]
 */
class UserMeetMeConferencingGetConferenceDelegateListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{
    /**
     * @ElementName conferenceDelegateUserTable
     * @Type \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
     * @Group adf25df72505d1c476ebb480b6cce18d:700
     * @var \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    protected $conferenceDelegateUserTable = null;

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

