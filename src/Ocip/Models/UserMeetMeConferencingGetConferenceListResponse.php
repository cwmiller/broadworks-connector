<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserMeetMeConferencingGetConferenceListResponse
 *
 * Response to the UserMeetMeConferencingGetConferenceListRequest.
 *         Contains a table with column headings: "Bridge Id", "Conference Id",
 * "Title", "Bridge Name", "Status", "Type", "Start Time", "Last Name", "First
 * Name" and "Host Id".
 *         The column values for "Status" can be Active, Inactive, or Expired.
 *         The column values for "Type" can be Reservationless, One Time, Recurring
 * Daily, Recurring Weekly, Recurring Monthly, or Recurring Yearly.
 *         Start Time is in the format "yyyy-MM-dd'T'HH:mm:ss:SSSZ". Example:
 * 2010-10-01T09:30:00:000-0400.
 *
 * @see UserMeetMeConferencingGetConferenceListRequest
 */
class UserMeetMeConferencingGetConferenceListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName conferenceTable
     * @Type \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
     * @var \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    private $conferenceTable = null;

    /**
     * Getter for conferenceTable
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
     */
    public function getConferenceTable()
    {
        return $this->conferenceTable instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->conferenceTable;
    }

    /**
     * Setter for conferenceTable
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\C\OCITable $conferenceTable
     * @return $this
     */
    public function setConferenceTable(\CWM\BroadWorksConnector\Ocip\Models\C\OCITable $conferenceTable)
    {
        $this->conferenceTable = $conferenceTable;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetConferenceTable()
    {
        $this->conferenceTable = null;
        return $this;
    }


}

