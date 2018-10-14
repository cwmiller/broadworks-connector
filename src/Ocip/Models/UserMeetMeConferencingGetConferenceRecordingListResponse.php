<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserMeetMeConferencingGetConferenceRecordingListResponse
 *
 * Response to the UserMeetMeConferencingGetConferenceRecordingListRequest.
 *         Contains a table with column headings: "Bridge Id", "Conference Id",
 * "Conference Title", "Bridge Name", "Start Time", "File Size", and "URL".
 *         Start Time is in the format "yyyy-MM-dd'T'HH:mm:ss:SSSZ". Example:
 * 2010-10-01T09:30:00:000-0400.
 *
 * @see UserMeetMeConferencingGetConferenceRecordingListRequest
 */
class UserMeetMeConferencingGetConferenceRecordingListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName conferenceRecordingTable
     * @var \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    private $conferenceRecordingTable = null;

    /**
     * Getter for conferenceRecordingTable
     *
     * @ElementName conferenceRecordingTable
     * @return \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    public function getConferenceRecordingTable()
    {
        return $this->conferenceRecordingTable;
    }

    /**
     * Setter for conferenceRecordingTable
     *
     * @ElementName conferenceRecordingTable
     * @param \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null $conferenceRecordingTable
     * @return $this
     */
    public function setConferenceRecordingTable(\CWM\BroadWorksConnector\Ocip\Models\C\OCITable $conferenceRecordingTable)
    {
        $this->conferenceRecordingTable = $conferenceRecordingTable;
        return $this;
    }


}

