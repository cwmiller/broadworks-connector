<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupRoutePointGetDNISListResponse
 *
 * Response to the GroupRoutePointGetDNISListRequest.
 *         Contains a table with column headings: "Name", "Phone Number",
 * "Extension".
 *
 * @see GroupRoutePointGetDNISListRequest
 */
class GroupRoutePointGetDNISListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName displayDNISNumber
     * @var bool|null
     */
    private $displayDNISNumber = null;

    /**
     * @ElementName displayDNISName
     * @var bool|null
     */
    private $displayDNISName = null;

    /**
     * @ElementName dnisTable
     * @var \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    private $dnisTable = null;

    /**
     * Getter for displayDNISNumber
     *
     * @ElementName displayDNISNumber
     * @return bool|null
     */
    public function getDisplayDNISNumber()
    {
        return $this->displayDNISNumber;
    }

    /**
     * Setter for displayDNISNumber
     *
     * @ElementName displayDNISNumber
     * @param bool|null $displayDNISNumber
     * @return $this
     */
    public function setDisplayDNISNumber($displayDNISNumber)
    {
        $this->displayDNISNumber = $displayDNISNumber;
        return $this;
    }

    /**
     * Getter for displayDNISName
     *
     * @ElementName displayDNISName
     * @return bool|null
     */
    public function getDisplayDNISName()
    {
        return $this->displayDNISName;
    }

    /**
     * Setter for displayDNISName
     *
     * @ElementName displayDNISName
     * @param bool|null $displayDNISName
     * @return $this
     */
    public function setDisplayDNISName($displayDNISName)
    {
        $this->displayDNISName = $displayDNISName;
        return $this;
    }

    /**
     * Getter for dnisTable
     *
     * @ElementName dnisTable
     * @return \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    public function getDnisTable()
    {
        return $this->dnisTable;
    }

    /**
     * Setter for dnisTable
     *
     * @ElementName dnisTable
     * @param \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null $dnisTable
     * @return $this
     */
    public function setDnisTable($dnisTable)
    {
        $this->dnisTable = $dnisTable;
        return $this;
    }


}

