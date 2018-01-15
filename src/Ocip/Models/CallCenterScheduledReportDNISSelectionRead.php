<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * CallCenterScheduledReportDNISSelectionRead
 *
 * Either all DNIS under the specified Call Center or 2 lists of DNIS, one for
 * current one for past (deleted).
 */
class CallCenterScheduledReportDNISSelectionRead
{

    /**
     * @ElementName serviceUserId
     * @var string|null
     */
    private $serviceUserId = null;

    /**
     * @ElementName deleted
     * @var bool|null
     */
    private $deleted = null;

    /**
     * @ElementName allDNIS
     * @var bool|null
     */
    private $allDNIS = null;

    /**
     * @ElementName currentName
     * @var string[]
     */
    private $currentName = array(
        
    );

    /**
     * @ElementName pastName
     * @var string[]
     */
    private $pastName = array(
        
    );

    /**
     * Getter for serviceUserId
     *
     * @ElementName serviceUserId
     * @return string|null
     */
    public function getServiceUserId()
    {
        return $this->serviceUserId;
    }

    /**
     * Setter for serviceUserId
     *
     * @ElementName serviceUserId
     * @param string|null $serviceUserId
     * @return $this
     */
    public function setServiceUserId($serviceUserId)
    {
        $this->serviceUserId = $serviceUserId;
        return $this;
    }

    /**
     * Getter for deleted
     *
     * @ElementName deleted
     * @return bool|null
     */
    public function getDeleted()
    {
        return $this->deleted;
    }

    /**
     * Setter for deleted
     *
     * @ElementName deleted
     * @param bool|null $deleted
     * @return $this
     */
    public function setDeleted($deleted)
    {
        $this->deleted = $deleted;
        return $this;
    }

    /**
     * Getter for allDNIS
     *
     * @ElementName allDNIS
     * @return bool|null
     */
    public function getAllDNIS()
    {
        return $this->allDNIS;
    }

    /**
     * Setter for allDNIS
     *
     * @ElementName allDNIS
     * @param bool|null $allDNIS
     * @return $this
     */
    public function setAllDNIS($allDNIS)
    {
        $this->allDNIS = $allDNIS;
        return $this;
    }

    /**
     * Getter for currentName
     *
     * @ElementName currentName
     * @return string[]
     */
    public function getCurrentName()
    {
        return $this->currentName;
    }

    /**
     * Setter for currentName
     *
     * @ElementName currentName
     * @param string[] $currentName
     * @return $this
     */
    public function setCurrentName($currentName)
    {
        $this->currentName = $currentName;
        return $this;
    }

    /**
     * Adder for currentName
     *
     * @ElementName currentName
     * @param string $currentName
     * @return $this
     */
    public function addCurrentName($currentName)
    {
        $this->currentName []= $currentName;
        return $this;
    }

    /**
     * Getter for pastName
     *
     * @ElementName pastName
     * @return string[]
     */
    public function getPastName()
    {
        return $this->pastName;
    }

    /**
     * Setter for pastName
     *
     * @ElementName pastName
     * @param string[] $pastName
     * @return $this
     */
    public function setPastName($pastName)
    {
        $this->pastName = $pastName;
        return $this;
    }

    /**
     * Adder for pastName
     *
     * @ElementName pastName
     * @param string $pastName
     * @return $this
     */
    public function addPastName($pastName)
    {
        $this->pastName []= $pastName;
        return $this;
    }


}

