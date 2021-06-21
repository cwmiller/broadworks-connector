<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserMeetMeConferencingGetConferenceRecordingListResponse
 *
 * Response to the UserMeetMeConferencingGetConferenceRecordingListRequest.
 *         Contains a table with column headings: "Bridge Id", "Conference Id", "Conference Title", "Bridge Name", "Start Time", "File Size", and "URL".
 *         Start Time is in the format "yyyy-MM-dd'T'HH:mm:ss:SSSZ". Example: 2010-10-01T09:30:00:000-0400.
 *
 * @see UserMeetMeConferencingGetConferenceRecordingListRequest
 * @Groups [{"id":"0fd24121d16995c994d40bc408dbcfa5:802","type":"sequence"}]
 */
class UserMeetMeConferencingGetConferenceRecordingListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName conferenceRecordingTable
     * @Type \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
     * @Group 0fd24121d16995c994d40bc408dbcfa5:802
     * @var \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    private $conferenceRecordingTable = null;

    /**
     * Getter for conferenceRecordingTable
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
     */
    public function getConferenceRecordingTable()
    {
        return $this->conferenceRecordingTable instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->conferenceRecordingTable;
    }

    /**
     * Setter for conferenceRecordingTable
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\C\OCITable $conferenceRecordingTable
     * @return $this
     */
    public function setConferenceRecordingTable(\CWM\BroadWorksConnector\Ocip\Models\C\OCITable $conferenceRecordingTable)
    {
        $this->conferenceRecordingTable = $conferenceRecordingTable;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetConferenceRecordingTable()
    {
        $this->conferenceRecordingTable = null;
        return $this;
    }


}

