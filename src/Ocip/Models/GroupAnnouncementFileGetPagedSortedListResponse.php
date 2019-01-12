<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupAnnouncementFileGetPagedSortedListResponse
 *
 * Response to GroupAnnouncementFileGetPagedSortedListRequest.
 *         The response contains a table with columns: "Name", "Media Type" and "File Size".
 *         The "Name" column contains the name of the announcement file.
 *         The "Media Type" column contains the media type of the announcement 
 *         File with the possible values:
 *                 WMA - Windows Media Audio file
 *                 WAV - A WAV file
 *                 3GP - A 3GP file
 *                 MOV - A MOV file using a H.263 or H.264 codec.
 *         The "File Size" column contains the file size (KB) of the announcement file.
 *
 * @see GroupAnnouncementFileGetPagedSortedListRequest
 * @Groups [{"id":"f3a93cf15de4abd7903673e44ee3e07b:1521","type":"sequence"}]
 */
class GroupAnnouncementFileGetPagedSortedListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName announcementTable
     * @Type \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
     * @Optional
     * @Group f3a93cf15de4abd7903673e44ee3e07b:1521
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

