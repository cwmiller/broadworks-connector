<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemMaliciousCallTraceGetResponse
 *
 * Response to the SystemMaliciousCallTraceGetRequest.
 *         The response contains the Malicious Call Trace system parameters and the list of users
 *         that use the Malicious Call Trace feature.
 *
 *         The column headings are "Service Provider Id",
 *         "Group Id", "User Id", "Last Name", "First Name", "Phone Number", "Trace Type", "Status",
 *         "Hiragana Last Name" and "Hiragana First Name", "Extension", "Department", "Email Address".
 *
 * @see SystemMaliciousCallTraceGetRequest
 * @Groups [{"id":"0da7c658f240cdc10c3f9cb328db57d8:119","type":"sequence"}]
 */
class SystemMaliciousCallTraceGetResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName playMCTWarningAnnouncement
     * @Type bool
     * @Group 0da7c658f240cdc10c3f9cb328db57d8:119
     * @var bool|null
     */
    protected $playMCTWarningAnnouncement = null;

    /**
     * @ElementName userTable
     * @Type \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
     * @Group 0da7c658f240cdc10c3f9cb328db57d8:119
     * @var \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    protected $userTable = null;

    /**
     * Getter for playMCTWarningAnnouncement
     *
     * @return bool
     */
    public function getPlayMCTWarningAnnouncement()
    {
        return $this->playMCTWarningAnnouncement instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->playMCTWarningAnnouncement;
    }

    /**
     * Setter for playMCTWarningAnnouncement
     *
     * @param bool $playMCTWarningAnnouncement
     * @return $this
     */
    public function setPlayMCTWarningAnnouncement($playMCTWarningAnnouncement)
    {
        $this->playMCTWarningAnnouncement = $playMCTWarningAnnouncement;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetPlayMCTWarningAnnouncement()
    {
        $this->playMCTWarningAnnouncement = null;
        return $this;
    }

    /**
     * Getter for userTable
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
     */
    public function getUserTable()
    {
        return $this->userTable instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->userTable;
    }

    /**
     * Setter for userTable
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\C\OCITable $userTable
     * @return $this
     */
    public function setUserTable(\CWM\BroadWorksConnector\Ocip\Models\C\OCITable $userTable)
    {
        $this->userTable = $userTable;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetUserTable()
    {
        $this->userTable = null;
        return $this;
    }


}

