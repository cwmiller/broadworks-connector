<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * CallCenterScheduledReportDNISSelectionRead
 *
 * Either all DNIS under the specified Call Center or 2 lists of DNIS, one for current one for past (deleted).
 *
 * @Groups [{"id":"4d65d3449061c568639c8cc1e2492285:7651","type":"sequence","children":[{"id":"4d65d3449061c568639c8cc1e2492285:7654","type":"choice","children":[{"id":"4d65d3449061c568639c8cc1e2492285:7656","type":"sequence"}]}]}]
 */
class CallCenterScheduledReportDNISSelectionRead
{
    /**
     * @ElementName serviceUserId
     * @Type string
     * @Group 4d65d3449061c568639c8cc1e2492285:7651
     * @MinLength 1
     * @MaxLength 161
     * @var string|null
     */
    protected $serviceUserId = null;

    /**
     * @ElementName deleted
     * @Type bool
     * @Optional
     * @Group 4d65d3449061c568639c8cc1e2492285:7651
     * @var bool|null
     */
    protected $deleted = null;

    /**
     * @ElementName allDNIS
     * @Type bool
     * @Group 4d65d3449061c568639c8cc1e2492285:7654
     * @var bool|null
     */
    protected $allDNIS = null;

    /**
     * @ElementName currentName
     * @Type string
     * @Array
     * @Optional
     * @Group 4d65d3449061c568639c8cc1e2492285:7656
     * @MinLength 1
     * @MaxLength 40
     * @var string[]
     */
    protected $currentName = [
        
    ];

    /**
     * @ElementName pastName
     * @Type string
     * @Array
     * @Optional
     * @Group 4d65d3449061c568639c8cc1e2492285:7656
     * @MinLength 1
     * @MaxLength 40
     * @var string[]
     */
    protected $pastName = [
        
    ];

    /**
     * Getter for serviceUserId
     *
     * @return string
     */
    public function getServiceUserId()
    {
        return $this->serviceUserId instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->serviceUserId;
    }

    /**
     * Setter for serviceUserId
     *
     * @param string $serviceUserId
     * @return $this
     */
    public function setServiceUserId($serviceUserId)
    {
        $this->serviceUserId = $serviceUserId;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetServiceUserId()
    {
        $this->serviceUserId = null;
        return $this;
    }

    /**
     * Getter for deleted
     *
     * @return bool
     */
    public function getDeleted()
    {
        return $this->deleted instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->deleted;
    }

    /**
     * Setter for deleted
     *
     * @param bool $deleted
     * @return $this
     */
    public function setDeleted($deleted)
    {
        $this->deleted = $deleted;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetDeleted()
    {
        $this->deleted = null;
        return $this;
    }

    /**
     * Getter for allDNIS
     *
     * @return bool
     */
    public function getAllDNIS()
    {
        return $this->allDNIS instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->allDNIS;
    }

    /**
     * Setter for allDNIS
     *
     * @param bool $allDNIS
     * @return $this
     */
    public function setAllDNIS($allDNIS)
    {
        $this->allDNIS = $allDNIS;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetAllDNIS()
    {
        $this->allDNIS = null;
        return $this;
    }

    /**
     * Getter for currentName
     *
     * @return string[]
     */
    public function getCurrentName()
    {
        return $this->currentName instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->currentName;
    }

    /**
     * Setter for currentName
     *
     * @param string[] $currentName
     * @return $this
     */
    public function setCurrentName(array $currentName)
    {
        $this->currentName = $currentName;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetCurrentName()
    {
        $this->currentName = null;
        return $this;
    }

    /**
     * Adder for currentName
     *
     * @param string $currentName
     * @return $this
     */
    public function addCurrentName(string $currentName)
    {
        $this->currentName[] = $currentName;
        return $this;
    }

    /**
     * Getter for pastName
     *
     * @return string[]
     */
    public function getPastName()
    {
        return $this->pastName instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->pastName;
    }

    /**
     * Setter for pastName
     *
     * @param string[] $pastName
     * @return $this
     */
    public function setPastName(array $pastName)
    {
        $this->pastName = $pastName;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetPastName()
    {
        $this->pastName = null;
        return $this;
    }

    /**
     * Adder for pastName
     *
     * @param string $pastName
     * @return $this
     */
    public function addPastName(string $pastName)
    {
        $this->pastName[] = $pastName;
        return $this;
    }
}

