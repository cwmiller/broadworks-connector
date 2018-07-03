<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupCallCenterGetDNISListResponse
 *
 * Response to the GroupCallCenterGetDNISListResponse.
 *         Contains a table with column headings: "Name", "Phone Number",
 * "Extension", "Priority", "Is Primary DNIS".
 *
 * @see GroupCallCenterGetDNISListResponse
 */
class GroupCallCenterGetDNISListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
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
     * @ElementName promoteCallsFromPriority1to0
     * @var bool|null
     */
    private $promoteCallsFromPriority1to0 = null;

    /**
     * @ElementName promoteCallsFromPriority2to1
     * @var bool|null
     */
    private $promoteCallsFromPriority2to1 = null;

    /**
     * @ElementName promoteCallsFromPriority3to2
     * @var bool|null
     */
    private $promoteCallsFromPriority3to2 = null;

    /**
     * @ElementName promoteCallsFromPriority1to0Seconds
     * @var int|null
     */
    private $promoteCallsFromPriority1to0Seconds = null;

    /**
     * @ElementName promoteCallsFromPriority2to1Seconds
     * @var int|null
     */
    private $promoteCallsFromPriority2to1Seconds = null;

    /**
     * @ElementName promoteCallsFromPriority3to2Seconds
     * @var int|null
     */
    private $promoteCallsFromPriority3to2Seconds = null;

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
     * Getter for promoteCallsFromPriority1to0
     *
     * @ElementName promoteCallsFromPriority1to0
     * @return bool|null
     */
    public function getPromoteCallsFromPriority1to0()
    {
        return $this->promoteCallsFromPriority1to0;
    }

    /**
     * Setter for promoteCallsFromPriority1to0
     *
     * @ElementName promoteCallsFromPriority1to0
     * @param bool|null $promoteCallsFromPriority1to0
     * @return $this
     */
    public function setPromoteCallsFromPriority1to0($promoteCallsFromPriority1to0)
    {
        $this->promoteCallsFromPriority1to0 = $promoteCallsFromPriority1to0;
        return $this;
    }

    /**
     * Getter for promoteCallsFromPriority2to1
     *
     * @ElementName promoteCallsFromPriority2to1
     * @return bool|null
     */
    public function getPromoteCallsFromPriority2to1()
    {
        return $this->promoteCallsFromPriority2to1;
    }

    /**
     * Setter for promoteCallsFromPriority2to1
     *
     * @ElementName promoteCallsFromPriority2to1
     * @param bool|null $promoteCallsFromPriority2to1
     * @return $this
     */
    public function setPromoteCallsFromPriority2to1($promoteCallsFromPriority2to1)
    {
        $this->promoteCallsFromPriority2to1 = $promoteCallsFromPriority2to1;
        return $this;
    }

    /**
     * Getter for promoteCallsFromPriority3to2
     *
     * @ElementName promoteCallsFromPriority3to2
     * @return bool|null
     */
    public function getPromoteCallsFromPriority3to2()
    {
        return $this->promoteCallsFromPriority3to2;
    }

    /**
     * Setter for promoteCallsFromPriority3to2
     *
     * @ElementName promoteCallsFromPriority3to2
     * @param bool|null $promoteCallsFromPriority3to2
     * @return $this
     */
    public function setPromoteCallsFromPriority3to2($promoteCallsFromPriority3to2)
    {
        $this->promoteCallsFromPriority3to2 = $promoteCallsFromPriority3to2;
        return $this;
    }

    /**
     * Getter for promoteCallsFromPriority1to0Seconds
     *
     * @ElementName promoteCallsFromPriority1to0Seconds
     * @return int|null
     */
    public function getPromoteCallsFromPriority1to0Seconds()
    {
        return $this->promoteCallsFromPriority1to0Seconds;
    }

    /**
     * Setter for promoteCallsFromPriority1to0Seconds
     *
     * @ElementName promoteCallsFromPriority1to0Seconds
     * @param int|null $promoteCallsFromPriority1to0Seconds
     * @return $this
     */
    public function setPromoteCallsFromPriority1to0Seconds($promoteCallsFromPriority1to0Seconds)
    {
        $this->promoteCallsFromPriority1to0Seconds = $promoteCallsFromPriority1to0Seconds;
        return $this;
    }

    /**
     * Getter for promoteCallsFromPriority2to1Seconds
     *
     * @ElementName promoteCallsFromPriority2to1Seconds
     * @return int|null
     */
    public function getPromoteCallsFromPriority2to1Seconds()
    {
        return $this->promoteCallsFromPriority2to1Seconds;
    }

    /**
     * Setter for promoteCallsFromPriority2to1Seconds
     *
     * @ElementName promoteCallsFromPriority2to1Seconds
     * @param int|null $promoteCallsFromPriority2to1Seconds
     * @return $this
     */
    public function setPromoteCallsFromPriority2to1Seconds($promoteCallsFromPriority2to1Seconds)
    {
        $this->promoteCallsFromPriority2to1Seconds = $promoteCallsFromPriority2to1Seconds;
        return $this;
    }

    /**
     * Getter for promoteCallsFromPriority3to2Seconds
     *
     * @ElementName promoteCallsFromPriority3to2Seconds
     * @return int|null
     */
    public function getPromoteCallsFromPriority3to2Seconds()
    {
        return $this->promoteCallsFromPriority3to2Seconds;
    }

    /**
     * Setter for promoteCallsFromPriority3to2Seconds
     *
     * @ElementName promoteCallsFromPriority3to2Seconds
     * @param int|null $promoteCallsFromPriority3to2Seconds
     * @return $this
     */
    public function setPromoteCallsFromPriority3to2Seconds($promoteCallsFromPriority3to2Seconds)
    {
        $this->promoteCallsFromPriority3to2Seconds = $promoteCallsFromPriority3to2Seconds;
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

