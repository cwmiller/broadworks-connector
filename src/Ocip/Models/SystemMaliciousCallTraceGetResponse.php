<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemMaliciousCallTraceGetResponse
 *
 * Response to the SystemMaliciousCallTraceGetRequest.
 *         The response contains the Malicious Call Trace system parameters and the
 * list of users
 *         that use the Malicious Call Trace feature.
 *
 *         The column headings are "Service Provider Id",
 *         "Group Id", "User Id", "Last Name", "First Name", "Phone Number", "Trace
 * Type", "Status",
 *         "Hiragana Last Name" and "Hiragana First Name", "Extension",
 * "Department", "Email Address".
 *
 * @see SystemMaliciousCallTraceGetRequest
 */
class SystemMaliciousCallTraceGetResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName playMCTWarningAnnouncement
     * @var bool|null
     */
    private $playMCTWarningAnnouncement = null;

    /**
     * @ElementName userTable
     * @var \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    private $userTable = null;

    /**
     * Getter for playMCTWarningAnnouncement
     *
     * @ElementName playMCTWarningAnnouncement
     * @return bool|null
     */
    public function getPlayMCTWarningAnnouncement()
    {
        return $this->playMCTWarningAnnouncement;
    }

    /**
     * Setter for playMCTWarningAnnouncement
     *
     * @ElementName playMCTWarningAnnouncement
     * @param bool|null $playMCTWarningAnnouncement
     * @return $this
     */
    public function setPlayMCTWarningAnnouncement($playMCTWarningAnnouncement)
    {
        $this->playMCTWarningAnnouncement = $playMCTWarningAnnouncement;
        return $this;
    }

    /**
     * Getter for userTable
     *
     * @ElementName userTable
     * @return \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    public function getUserTable()
    {
        return $this->userTable;
    }

    /**
     * Setter for userTable
     *
     * @ElementName userTable
     * @param \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null $userTable
     * @return $this
     */
    public function setUserTable($userTable)
    {
        $this->userTable = $userTable;
        return $this;
    }


}

