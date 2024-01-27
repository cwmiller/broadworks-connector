<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupPhoneDirectoryGetPagedListResponse
 *
 * Response to GroupPhoneDirectoryGetPagedListRequest.
 *         Contains a table with a row for each phone number and column headings :
 *         "Name", "Number", "Extension", "Mobile", "Email Address", 
 *         "Department", "Hiragana Name", "Group Id", "Yahoo Id", "User Id", "IMP Id" and "Is Virtual On-Net User".
 *         
 *         If extended directory information is requested, the following columns are also included:
 *         "First Name", "Last Name", "Pager", "Title", "Time Zone", 
 *         "Location", "Address Line 1", "Address Line 2", "City", "State", "Zip", "Country".
 *         
 *         Finally "Service Name".
 *         The Service Name represents the localized service name for service instances. The localized values are taken from the BroadworksLabel.properties file.
 *         Service Name is currently supporting:
 *         AutoAttendant, AutoAttendantStandard, AutoAttendantVideo, CallCenter, CallCenterStandard, CallCenterPremium
 *         HuntGroup, InstantGroupCall, VoiceMessagingGroup, MusicOnHold, MusicOnHoldVideo, RoutePoint, BroadWorksAnywhere
 *         GroupPaging, FindmeFollowme, VoiceXML, FlexibleSeatingGuest, CollaborateSharing, MeetMeConferencing.
 *         For a Regular User or a Virtual On Network Enterprise Extensions, the Service Name is empty.
 *         
 *         Replaced By: GroupPhoneDirectoryGetPagedSortedListResponse
 *
 * @see GroupPhoneDirectoryGetPagedListRequest
 * @see GroupPhoneDirectoryGetPagedSortedListResponse
 * @Groups [{"id":"d8f04177e438f303b41c211e518706bf:12111","type":"sequence"}]
 */
class GroupPhoneDirectoryGetPagedListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{
    /**
     * @ElementName totalNumberOfRows
     * @Type int
     * @Group d8f04177e438f303b41c211e518706bf:12111
     * @var int|null
     */
    protected $totalNumberOfRows = null;

    /**
     * @ElementName directoryTable
     * @Type \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
     * @Group d8f04177e438f303b41c211e518706bf:12111
     * @var \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    protected $directoryTable = null;

    /**
     * Getter for totalNumberOfRows
     *
     * @return int
     */
    public function getTotalNumberOfRows()
    {
        return $this->totalNumberOfRows instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->totalNumberOfRows;
    }

    /**
     * Setter for totalNumberOfRows
     *
     * @param int $totalNumberOfRows
     * @return $this
     */
    public function setTotalNumberOfRows($totalNumberOfRows)
    {
        $this->totalNumberOfRows = $totalNumberOfRows;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetTotalNumberOfRows()
    {
        $this->totalNumberOfRows = null;
        return $this;
    }

    /**
     * Getter for directoryTable
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
     */
    public function getDirectoryTable()
    {
        return $this->directoryTable instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->directoryTable;
    }

    /**
     * Setter for directoryTable
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\C\OCITable $directoryTable
     * @return $this
     */
    public function setDirectoryTable(\CWM\BroadWorksConnector\Ocip\Models\C\OCITable $directoryTable)
    {
        $this->directoryTable = $directoryTable;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetDirectoryTable()
    {
        $this->directoryTable = null;
        return $this;
    }
}

