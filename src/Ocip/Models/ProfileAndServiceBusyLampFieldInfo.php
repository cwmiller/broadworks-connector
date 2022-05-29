<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * ProfileAndServiceBusyLampFieldInfo
 *
 * This is the configuration parameters for Busy Lamp Field service
 *         	The monitoredUserTable has column headings:
 *         	"User Id", "Last Name", "First Name", "Hiragana Last Name", "Hiragana First Name",
 *         	"Phone Number", "Extension", "Department", "Email Address", "IMP Id".
 *
 * @Groups [{"id":"53d18cc797d03d802cbc411ad821f1d4:4238","type":"sequence"}]
 */
class ProfileAndServiceBusyLampFieldInfo
{

    /**
     * @ElementName listURI
     * @Type string
     * @Optional
     * @Group 53d18cc797d03d802cbc411ad821f1d4:4238
     * @MinLength 1
     * @MaxLength 161
     * @var string|null
     */
    protected $listURI = null;

    /**
     * @ElementName enableCallParkNotification
     * @Type bool
     * @Group 53d18cc797d03d802cbc411ad821f1d4:4238
     * @var bool|null
     */
    protected $enableCallParkNotification = null;

    /**
     * @ElementName monitoredUserTable
     * @Type \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
     * @Group 53d18cc797d03d802cbc411ad821f1d4:4238
     * @var \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    protected $monitoredUserTable = null;

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

