<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * EnterprisePhoneDirectoryGetPagedListResponse
 *
 * Response to EnterprisePhoneDirectoryGetPagedListRequest.
 *                 Contains a table with a row for each phone number and column headings :
 *                 "Name", "Number", "Extension", "Mobile", "Email Address",
 *                 "Department", "Hiragana Name", "Group Id", "Yahoo Id", "User Id", "IMP Id", "Is Virtual On-Net User".
 *                 If extended directory information is requested, the following columns are also included:
 *                 "First Name", "Last Name", "Pager", "Title", "Time Zone",
 *                 "Location", "Address Line 1", "Address Line 2",
 *                 "City", "State", "Zip", "Country", "Service Name".
 *                 The Service Name represents the localized service name for service instances. The localized values are
 *                 taken from the BroadworksLabel.properties file.
 *                 Service Name is currently supporting:
 *                 AutoAttendant, AutoAttendantStandard, AutoAttendantVideo, CallCenter, CallCenterStandard,
 *                 CallCenterPremium
 *                 HuntGroup, InstantGroupCall, VoiceMessagingGroup, RoutePoint, BroadWorksAnywhere, GroupPaging,
 *                 FindmeFollowme,
 *                 VoiceXML, FlexibleSeatingGuest, CollaborateAudio, MeetMeConferencing.
 *                 For a Regular User or a Virtual On Network Enterprise Extensions, the Service Name is empty.
 *
 *                 The following columns are returned in AS data mode only:
 *                 "Service Name"
 *
 *                 Replaced By: EnterprisePhoneDirectoryGetPagedSortedListResponse
 *
 * @see EnterprisePhoneDirectoryGetPagedListRequest
 * @see EnterprisePhoneDirectoryGetPagedSortedListResponse
 * @Groups [{"id":"ab0042aa512abc10edb3c55e4b416b0b:40874","type":"sequence"}]
 */
class EnterprisePhoneDirectoryGetPagedListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName totalNumberOfRows
     * @Type int
     * @Group ab0042aa512abc10edb3c55e4b416b0b:40874
     * @var int|null
     */
    private $totalNumberOfRows = null;

    /**
     * @ElementName directoryTable
     * @Type \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
     * @Group ab0042aa512abc10edb3c55e4b416b0b:40874
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

