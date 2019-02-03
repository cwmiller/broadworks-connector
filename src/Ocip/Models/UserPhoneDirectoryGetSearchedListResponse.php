<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserPhoneDirectoryGetSearchedListResponse
 *
 * Response to UserPhoneDirectoryGetSearchedListRequest.
 *         The "My Room Room Id" and "My Room Bridge Id" are only populated for
 * 	    users assigned the "Collaborate-Audio" service.
 *         Contains a table with  a row for each phone number and column headings :
 *         "Name", "Number", "Extension", "Mobile", "Email Address", "Department", 
 *         "Hiragana Name", "Group Id", "Yahoo Id", "User Id", "IMP Id", "First Name", "Last Name",
 *         "My Room Room Id", "My Room Bridge Id", "Service Name".
 *         The Service Name represents the localized service name for service instances. The localized values are taken from the BroadworksLabel.properties file.
 *         Service Name is currently supporting:
 *         AutoAttendant, AutoAttendantStandard, AutoAttendantVideo, CallCenter, CallCenterStandard, CallCenterPremium
 *         HuntGroup, InstantGroupCall, VoiceMessagingGroup, RoutePoint, BroadWorksAnywhere, GroupPaging, FindmeFollowme,
 *         VoiceXML, FlexibleSeatingGuest, CollaborateAudio, MeetMeConferencing.
 *         For a Regular User or a Virtual On Network Enterprise Extensions, the Service Name is empty.
 *         
 *         The following columns are only returned in AS data mode:       
 *           "My Room Room Id", "My Room Bridge Id", "Service Name"
 *
 * @see UserPhoneDirectoryGetSearchedListRequest
 * @Groups [{"id":"53d18cc797d03d802cbc411ad821f1d4:3198","type":"sequence"}]
 */
class UserPhoneDirectoryGetSearchedListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName directoryTable
     * @Type \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
     * @Group 53d18cc797d03d802cbc411ad821f1d4:3198
     * @var \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    private $directoryTable = null;

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

