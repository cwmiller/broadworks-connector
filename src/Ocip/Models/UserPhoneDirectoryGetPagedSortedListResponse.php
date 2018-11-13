<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserPhoneDirectoryGetPagedSortedListResponse
 *
 * Response to UserPhoneDirectoryGetPagedSortedListRequest.
 *   Returns the number of entries that would be returned if the response
 *   Was not page size restricted.
 *   The "My Room Room Id" and "My Room Bridge Id" are only populated for
 *   users assigned the "Collaborate-Audio" service.
 *   Contains a table with a row for each user and column headings:
 *   "User Id", "CLID First Name", "CLID Last Name", "First Name",
 *   "Last Name", "Hiragana First Name", "Hiragana Last Name",
 *   "Title", "Phone Number", "Extension", "Mobile", "Pager",
 *   "Email Address", "Yahoo Id", "Department", "Group Id", "Location",
 *   "Address Line 1", "Address Line 2", "City", "State", "Zip",
 *   "Country", "IMP Id", "Location Code", "My Room Room Id",
 *   "My Room Bridge Id", "Service Name", and "Receptionist Note".
 *   The Service Name represents the localized service name for service instances. 
 *   The localized values are taken from the BroadworksLabel.properties file.  
 *   Service Name is currently supporting:
 *   AutoAttendant, AutoAttendantStandard, AutoAttendantVideo, CallCenter, 
 *   CallCenterStandard, CallCenterPremium, HuntGroup, InstantGroupCall, 
 *   VoiceMessagingGroup, RoutePoint, BroadWorksAnywhere, GroupPaging,
 * FindmeFollowme, 
 *   VoiceXML, FlexibleSeatingGuest, CollaborateAudio, MeetMeConferencing.
 *   For a Regular User or a Virtual On Network Enterprise Extensions, the
 *   Service Name is empty.
 *   The Receptionist Note column is only populated, if the user sending
 *   the request is the owner of the Receptionist Note and a Note exists.
 *   
 *   The following columns are returned in AS data mode only:
 *     "Service Name", "Receptionist Notes"
 *
 * @see UserPhoneDirectoryGetPagedSortedListRequest
 */
class UserPhoneDirectoryGetPagedSortedListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName totalNumberOfRows
     * @Type int
     * @var int|null
     */
    private $totalNumberOfRows = null;

    /**
     * @ElementName directoryTable
     * @Type \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
     * @var \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    private $directoryTable = null;

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

