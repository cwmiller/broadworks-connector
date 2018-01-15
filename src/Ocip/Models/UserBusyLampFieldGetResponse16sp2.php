<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserBusyLampFieldGetResponse16sp2
 *
 * Response to UserBusyLampFieldGetRequest16sp2.
 *         The table has column headings:
 *           "User Id", "Last Name", "First Name", "Hiragana Last Name", "Hiragana
 * First Name",
 *           "Phone Number", "Extension", "Department", "Email Address", "IMP Id".
 */
class UserBusyLampFieldGetResponse16sp2 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName listURI
     * @var string|null
     */
    private $listURI = null;

    /**
     * @ElementName enableCallParkNotification
     * @var bool|null
     */
    private $enableCallParkNotification = null;

    /**
     * @ElementName monitoredUserTable
     * @var \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    private $monitoredUserTable = null;

    /**
     * Getter for listURI
     *
     * @ElementName listURI
     * @return string|null
     */
    public function getListURI()
    {
        return $this->listURI;
    }

    /**
     * Setter for listURI
     *
     * @ElementName listURI
     * @param string|null $listURI
     * @return $this
     */
    public function setListURI($listURI)
    {
        $this->listURI = $listURI;
        return $this;
    }

    /**
     * Getter for enableCallParkNotification
     *
     * @ElementName enableCallParkNotification
     * @return bool|null
     */
    public function getEnableCallParkNotification()
    {
        return $this->enableCallParkNotification;
    }

    /**
     * Setter for enableCallParkNotification
     *
     * @ElementName enableCallParkNotification
     * @param bool|null $enableCallParkNotification
     * @return $this
     */
    public function setEnableCallParkNotification($enableCallParkNotification)
    {
        $this->enableCallParkNotification = $enableCallParkNotification;
        return $this;
    }

    /**
     * Getter for monitoredUserTable
     *
     * @ElementName monitoredUserTable
     * @return \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    public function getMonitoredUserTable()
    {
        return $this->monitoredUserTable;
    }

    /**
     * Setter for monitoredUserTable
     *
     * @ElementName monitoredUserTable
     * @param \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null $monitoredUserTable
     * @return $this
     */
    public function setMonitoredUserTable($monitoredUserTable)
    {
        $this->monitoredUserTable = $monitoredUserTable;
        return $this;
    }


}

