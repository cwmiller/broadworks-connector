<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupAnnouncementFileGetListResponse
 *
 * Response to GroupAnnouncementFileGetAvailableListRequest.
 *         When requested, the response contains a table with columns: "Name",
 * "Media Type" and "File Size".
 *         The "Name" column contains the name of the announcement file.
 *         The "Media Type" column contains the media type of the announcement 
 *         File with the possible values:
 *                 WMA - Windows Media Audio file
 *                 WAV - A WAV file
 *                 3GP - A 3GP file
 *                 MOV - A MOV file using a H.263 or H.264 codec.
 *         The "File Size" column contains the file size (KB) of the announcement
 * file.
 *         The response also contains the current total file size (KB) for the
 * group across
 *         all media types and the maximum total file size (MB) allowed for the
 * group.
 *
 * @see GroupAnnouncementFileGetAvailableListRequest
 */
class GroupAnnouncementFileGetListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName announcementTable
     * @var \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    private $announcementTable = null;

    /**
     * @ElementName totalFileSize
     * @var int|null
     */
    private $totalFileSize = null;

    /**
     * @ElementName maxFileSize
     * @var int|null
     */
    private $maxFileSize = null;

    /**
     * Getter for announcementTable
     *
     * @ElementName announcementTable
     * @return \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    public function getAnnouncementTable()
    {
        return $this->announcementTable;
    }

    /**
     * Setter for announcementTable
     *
     * @ElementName announcementTable
     * @param \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null $announcementTable
     * @return $this
     */
    public function setAnnouncementTable($announcementTable)
    {
        $this->announcementTable = $announcementTable;
        return $this;
    }

    /**
     * Getter for totalFileSize
     *
     * @ElementName totalFileSize
     * @return int|null
     */
    public function getTotalFileSize()
    {
        return $this->totalFileSize;
    }

    /**
     * Setter for totalFileSize
     *
     * @ElementName totalFileSize
     * @param int|null $totalFileSize
     * @return $this
     */
    public function setTotalFileSize($totalFileSize)
    {
        $this->totalFileSize = $totalFileSize;
        return $this;
    }

    /**
     * Getter for maxFileSize
     *
     * @ElementName maxFileSize
     * @return int|null
     */
    public function getMaxFileSize()
    {
        return $this->maxFileSize;
    }

    /**
     * Setter for maxFileSize
     *
     * @ElementName maxFileSize
     * @param int|null $maxFileSize
     * @return $this
     */
    public function setMaxFileSize($maxFileSize)
    {
        $this->maxFileSize = $maxFileSize;
        return $this;
    }


}

