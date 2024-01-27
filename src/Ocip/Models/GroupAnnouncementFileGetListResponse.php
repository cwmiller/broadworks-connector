<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupAnnouncementFileGetListResponse
 *
 * Response to GroupAnnouncementFileGetListRequest.
 *         When requested, the response contains a table with columns: "Name", "Media Type", "File Size", "Announcement File External Id".
 *         The "Name" column contains the name of the announcement file.
 *         The "Media Type" column contains the media type of the announcement 
 *         File with the possible values:
 *                 WMA - Windows Media Audio file
 *                 WAV - A WAV file
 *                 3GP - A 3GP file
 *                 MOV - A MOV file using a H.263 or H.264 codec.
 *         The "File Size" column contains the file size (KB) of the announcement file.
 *         The "Announcement File External Id" column contains the External ID of the announcement file. 
 *         The response also contains the current total file size (KB) for the group across
 *         all media types and the maximum total file size (MB) allowed for the group.
 *         
 *         The following columns are populated in AS data mode only:       
 *           "Announcement File External Id"
 *
 * @see GroupAnnouncementFileGetListRequest
 * @Groups [{"id":"4b0e7857796c636464362260a2f8e5ee:1993","type":"sequence"}]
 */
class GroupAnnouncementFileGetListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{
    /**
     * @ElementName announcementTable
     * @Type \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
     * @Optional
     * @Group 4b0e7857796c636464362260a2f8e5ee:1993
     * @var \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    protected $announcementTable = null;

    /**
     * @ElementName totalFileSize
     * @Type int
     * @Group 4b0e7857796c636464362260a2f8e5ee:1993
     * @var int|null
     */
    protected $totalFileSize = null;

    /**
     * @ElementName maxFileSize
     * @Type int
     * @Group 4b0e7857796c636464362260a2f8e5ee:1993
     * @MinInclusive 1
     * @MaxInclusive 999999
     * @var int|null
     */
    protected $maxFileSize = null;

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

    /**
     * Getter for totalFileSize
     *
     * @return int
     */
    public function getTotalFileSize()
    {
        return $this->totalFileSize instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->totalFileSize;
    }

    /**
     * Setter for totalFileSize
     *
     * @param int $totalFileSize
     * @return $this
     */
    public function setTotalFileSize($totalFileSize)
    {
        $this->totalFileSize = $totalFileSize;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetTotalFileSize()
    {
        $this->totalFileSize = null;
        return $this;
    }

    /**
     * Getter for maxFileSize
     *
     * @return int
     */
    public function getMaxFileSize()
    {
        return $this->maxFileSize instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->maxFileSize;
    }

    /**
     * Setter for maxFileSize
     *
     * @param int $maxFileSize
     * @return $this
     */
    public function setMaxFileSize($maxFileSize)
    {
        $this->maxFileSize = $maxFileSize;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetMaxFileSize()
    {
        $this->maxFileSize = null;
        return $this;
    }
}

