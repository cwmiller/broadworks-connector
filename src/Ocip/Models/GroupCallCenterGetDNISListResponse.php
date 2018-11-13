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
     * @Type bool
     * @var bool|null
     */
    private $displayDNISNumber = null;

    /**
     * @ElementName displayDNISName
     * @Type bool
     * @var bool|null
     */
    private $displayDNISName = null;

    /**
     * @ElementName promoteCallsFromPriority1to0
     * @Type bool
     * @var bool|null
     */
    private $promoteCallsFromPriority1to0 = null;

    /**
     * @ElementName promoteCallsFromPriority2to1
     * @Type bool
     * @var bool|null
     */
    private $promoteCallsFromPriority2to1 = null;

    /**
     * @ElementName promoteCallsFromPriority3to2
     * @Type bool
     * @var bool|null
     */
    private $promoteCallsFromPriority3to2 = null;

    /**
     * @ElementName promoteCallsFromPriority1to0Seconds
     * @Type int
     * @var int|null
     */
    private $promoteCallsFromPriority1to0Seconds = null;

    /**
     * @ElementName promoteCallsFromPriority2to1Seconds
     * @Type int
     * @var int|null
     */
    private $promoteCallsFromPriority2to1Seconds = null;

    /**
     * @ElementName promoteCallsFromPriority3to2Seconds
     * @Type int
     * @var int|null
     */
    private $promoteCallsFromPriority3to2Seconds = null;

    /**
     * @ElementName dnisTable
     * @Type \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
     * @var \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    private $dnisTable = null;

    /**
     * Getter for displayDNISNumber
     *
     * @return bool
     */
    public function getDisplayDNISNumber()
    {
        return $this->displayDNISNumber instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->displayDNISNumber;
    }

    /**
     * Setter for displayDNISNumber
     *
     * @param bool $displayDNISNumber
     * @return $this
     */
    public function setDisplayDNISNumber($displayDNISNumber)
    {
        $this->displayDNISNumber = $displayDNISNumber;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetDisplayDNISNumber()
    {
        $this->displayDNISNumber = null;
        return $this;
    }

    /**
     * Getter for displayDNISName
     *
     * @return bool
     */
    public function getDisplayDNISName()
    {
        return $this->displayDNISName instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->displayDNISName;
    }

    /**
     * Setter for displayDNISName
     *
     * @param bool $displayDNISName
     * @return $this
     */
    public function setDisplayDNISName($displayDNISName)
    {
        $this->displayDNISName = $displayDNISName;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetDisplayDNISName()
    {
        $this->displayDNISName = null;
        return $this;
    }

    /**
     * Getter for promoteCallsFromPriority1to0
     *
     * @return bool
     */
    public function getPromoteCallsFromPriority1to0()
    {
        return $this->promoteCallsFromPriority1to0 instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->promoteCallsFromPriority1to0;
    }

    /**
     * Setter for promoteCallsFromPriority1to0
     *
     * @param bool $promoteCallsFromPriority1to0
     * @return $this
     */
    public function setPromoteCallsFromPriority1to0($promoteCallsFromPriority1to0)
    {
        $this->promoteCallsFromPriority1to0 = $promoteCallsFromPriority1to0;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetPromoteCallsFromPriority1to0()
    {
        $this->promoteCallsFromPriority1to0 = null;
        return $this;
    }

    /**
     * Getter for promoteCallsFromPriority2to1
     *
     * @return bool
     */
    public function getPromoteCallsFromPriority2to1()
    {
        return $this->promoteCallsFromPriority2to1 instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->promoteCallsFromPriority2to1;
    }

    /**
     * Setter for promoteCallsFromPriority2to1
     *
     * @param bool $promoteCallsFromPriority2to1
     * @return $this
     */
    public function setPromoteCallsFromPriority2to1($promoteCallsFromPriority2to1)
    {
        $this->promoteCallsFromPriority2to1 = $promoteCallsFromPriority2to1;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetPromoteCallsFromPriority2to1()
    {
        $this->promoteCallsFromPriority2to1 = null;
        return $this;
    }

    /**
     * Getter for promoteCallsFromPriority3to2
     *
     * @return bool
     */
    public function getPromoteCallsFromPriority3to2()
    {
        return $this->promoteCallsFromPriority3to2 instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->promoteCallsFromPriority3to2;
    }

    /**
     * Setter for promoteCallsFromPriority3to2
     *
     * @param bool $promoteCallsFromPriority3to2
     * @return $this
     */
    public function setPromoteCallsFromPriority3to2($promoteCallsFromPriority3to2)
    {
        $this->promoteCallsFromPriority3to2 = $promoteCallsFromPriority3to2;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetPromoteCallsFromPriority3to2()
    {
        $this->promoteCallsFromPriority3to2 = null;
        return $this;
    }

    /**
     * Getter for promoteCallsFromPriority1to0Seconds
     *
     * @return int
     */
    public function getPromoteCallsFromPriority1to0Seconds()
    {
        return $this->promoteCallsFromPriority1to0Seconds instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->promoteCallsFromPriority1to0Seconds;
    }

    /**
     * Setter for promoteCallsFromPriority1to0Seconds
     *
     * @param int $promoteCallsFromPriority1to0Seconds
     * @return $this
     */
    public function setPromoteCallsFromPriority1to0Seconds($promoteCallsFromPriority1to0Seconds)
    {
        $this->promoteCallsFromPriority1to0Seconds = $promoteCallsFromPriority1to0Seconds;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetPromoteCallsFromPriority1to0Seconds()
    {
        $this->promoteCallsFromPriority1to0Seconds = null;
        return $this;
    }

    /**
     * Getter for promoteCallsFromPriority2to1Seconds
     *
     * @return int
     */
    public function getPromoteCallsFromPriority2to1Seconds()
    {
        return $this->promoteCallsFromPriority2to1Seconds instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->promoteCallsFromPriority2to1Seconds;
    }

    /**
     * Setter for promoteCallsFromPriority2to1Seconds
     *
     * @param int $promoteCallsFromPriority2to1Seconds
     * @return $this
     */
    public function setPromoteCallsFromPriority2to1Seconds($promoteCallsFromPriority2to1Seconds)
    {
        $this->promoteCallsFromPriority2to1Seconds = $promoteCallsFromPriority2to1Seconds;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetPromoteCallsFromPriority2to1Seconds()
    {
        $this->promoteCallsFromPriority2to1Seconds = null;
        return $this;
    }

    /**
     * Getter for promoteCallsFromPriority3to2Seconds
     *
     * @return int
     */
    public function getPromoteCallsFromPriority3to2Seconds()
    {
        return $this->promoteCallsFromPriority3to2Seconds instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->promoteCallsFromPriority3to2Seconds;
    }

    /**
     * Setter for promoteCallsFromPriority3to2Seconds
     *
     * @param int $promoteCallsFromPriority3to2Seconds
     * @return $this
     */
    public function setPromoteCallsFromPriority3to2Seconds($promoteCallsFromPriority3to2Seconds)
    {
        $this->promoteCallsFromPriority3to2Seconds = $promoteCallsFromPriority3to2Seconds;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetPromoteCallsFromPriority3to2Seconds()
    {
        $this->promoteCallsFromPriority3to2Seconds = null;
        return $this;
    }

    /**
     * Getter for dnisTable
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
     */
    public function getDnisTable()
    {
        return $this->dnisTable instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->dnisTable;
    }

    /**
     * Setter for dnisTable
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\C\OCITable $dnisTable
     * @return $this
     */
    public function setDnisTable(\CWM\BroadWorksConnector\Ocip\Models\C\OCITable $dnisTable)
    {
        $this->dnisTable = $dnisTable;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetDnisTable()
    {
        $this->dnisTable = null;
        return $this;
    }


}

