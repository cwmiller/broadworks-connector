<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserAnnouncementFileGetAvailableListResponse
 *
 * Response to UserAnnouncementFileGetAvailableListRequest.
 *         The response contains a table with columns: "Name", "Media Type", "File Size" and "Repository Type".
 *         The "Name" column contains the name of the announcement file.
 *         The "Media Type" column contains the media type of the announcement file with the possible values:
 *                 WMA - Windows Media Audio file
 *                 WAV - A WAV file
 *                 3GP - A 3GP file
 *                 MOV - A MOV file using a H.263 or H.264 codec.
 *         The "File Size" is in Kilobytes.
 *         The "Repository Type" column contains the type of repository for the announcement file such as "User" or "Group"
 *         The "File Size" column contains the file size in kB of the announcement file.
 *
 * @see UserAnnouncementFileGetAvailableListRequest
 * @Groups [{"id":"53d18cc797d03d802cbc411ad821f1d4:486","type":"sequence"}]
 */
class UserAnnouncementFileGetAvailableListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName announcementTable
     * @Type \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
     * @Group 53d18cc797d03d802cbc411ad821f1d4:486
     * @var \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    private $announcementTable = null;

    /**
     * Getter for announcementTable
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
     */
    public function getAnnouncementTable()
    {
        return $this->announcementTable instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->announcementTable;
    }

    /**
     * Setter for announcementTable
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\C\OCITable $announcementTable
     * @return $this
     */
    public function setAnnouncementTable(\CWM\BroadWorksConnector\Ocip\Models\C\OCITable $announcementTable)
    {
        $this->announcementTable = $announcementTable;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetAnnouncementTable()
    {
        $this->announcementTable = null;
        return $this;
    }


}

