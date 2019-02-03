<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserBusyLampFieldGetResponse16sp2
 *
 * Response to UserBusyLampFieldGetRequest16sp2.
 *         The table has column headings:
 *           "User Id", "Last Name", "First Name", "Hiragana Last Name", "Hiragana First Name",
 *           "Phone Number", "Extension", "Department", "Email Address", "IMP Id".
 *
 * @see UserBusyLampFieldGetRequest16sp2
 * @Groups [{"id":"4faeca417998d23ce2ff6b0b43212aa6:211","type":"sequence"}]
 */
class UserBusyLampFieldGetResponse16sp2 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName listURI
     * @Type string
     * @Optional
     * @Group 4faeca417998d23ce2ff6b0b43212aa6:211
     * @var string|null
     */
    private $listURI = null;

    /**
     * @ElementName enableCallParkNotification
     * @Type bool
     * @Group 4faeca417998d23ce2ff6b0b43212aa6:211
     * @var bool|null
     */
    private $enableCallParkNotification = null;

    /**
     * @ElementName monitoredUserTable
     * @Type \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
     * @Group 4faeca417998d23ce2ff6b0b43212aa6:211
     * @var \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    private $monitoredUserTable = null;

    /**
     * Getter for listURI
     *
     * @return string
     */
    public function getListURI()
    {
        return $this->listURI instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->listURI;
    }

    /**
     * Setter for listURI
     *
     * @param string $listURI
     * @return $this
     */
    public function setListURI($listURI)
    {
        $this->listURI = $listURI;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetListURI()
    {
        $this->listURI = null;
        return $this;
    }

    /**
     * Getter for enableCallParkNotification
     *
     * @return bool
     */
    public function getEnableCallParkNotification()
    {
        return $this->enableCallParkNotification instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->enableCallParkNotification;
    }

    /**
     * Setter for enableCallParkNotification
     *
     * @param bool $enableCallParkNotification
     * @return $this
     */
    public function setEnableCallParkNotification($enableCallParkNotification)
    {
        $this->enableCallParkNotification = $enableCallParkNotification;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetEnableCallParkNotification()
    {
        $this->enableCallParkNotification = null;
        return $this;
    }

    /**
     * Getter for monitoredUserTable
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
     */
    public function getMonitoredUserTable()
    {
        return $this->monitoredUserTable instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->monitoredUserTable;
    }

    /**
     * Setter for monitoredUserTable
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\C\OCITable $monitoredUserTable
     * @return $this
     */
    public function setMonitoredUserTable(\CWM\BroadWorksConnector\Ocip\Models\C\OCITable $monitoredUserTable)
    {
        $this->monitoredUserTable = $monitoredUserTable;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetMonitoredUserTable()
    {
        $this->monitoredUserTable = null;
        return $this;
    }


}

