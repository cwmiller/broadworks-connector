<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * EnterprisePhoneDirectoryGetPagedSortedListResponse
 *
 * Response to EnterprisePhoneDirectoryGetPagedSortedListRequest.
 *         Contains a table with  a row for each phone number and column headings :
 *         "Name", "Number", "Extension", "Mobile", "Email Address", 
 *         "Department", "Hiragana Name", "Group Id", "Yahoo Id", "User Id", "IMP Id", "Is Virtual On-Net User".
 *         If extended directory information is requested, the following columns are also included:
 *         "First Name", "Last Name", "Pager", "Title", "Time Zone", 
 *         "Location", "Address Line 1", "Address Line 2",
 *         "City", "State", "Zip", "Country", "Service Name".
 *         The Service Name represents the localized service name for service instances. The localized values are taken from the BroadworksLabel.properties file.
 *         Service Name is currently supporting:
 *         AutoAttendant, AutoAttendantStandard, AutoAttendantVideo, CallCenter, CallCenterStandard, CallCenterPremium
 *         HuntGroup, InstantGroupCall, VoiceMessagingGroup, RoutePoint, BroadWorksAnywhere, GroupPaging, FindmeFollowme, 
 *         VoiceXML, FlexibleSeatingGuest, CollaborateAudio, MeetMeConferencing.
 *         For a Regular User or a Virtual On Network Enterprise Extensions, the Service Name is empty.
 *         
 *         The following columns are populated in AS data mode only:
 *           "IMP Id"
 *
 * @see EnterprisePhoneDirectoryGetPagedSortedListRequest
 * @Groups [{"id":"5395c7df0157d44aa22f3351d1a5f3da:827","type":"sequence"}]
 */
class EnterprisePhoneDirectoryGetPagedSortedListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName totalNumberOfRows
     * @Type int
     * @Group 5395c7df0157d44aa22f3351d1a5f3da:827
     * @var int|null
     */
    private $totalNumberOfRows = null;

    /**
     * @ElementName directoryTable
     * @Type \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
     * @Group 5395c7df0157d44aa22f3351d1a5f3da:827
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

