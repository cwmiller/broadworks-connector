<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * CallCenterScheduledReportDNISSelection
 *
 * Either all DNIS under the specified Call Center or list of DNIS.
 */
class CallCenterScheduledReportDNISSelection
{

    /**
     * @ElementName serviceUserId
     * @Type string
     * @var string|null
     */
    private $serviceUserId = null;

    /**
     * @ElementName allDNIS
     * @Type bool
     * @var bool|null
     */
    private $allDNIS = null;

    /**
     * @ElementName name
     * @Type string
     * @Array
     * @var string[]
     */
    private $name = array(
        
    );

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
     * Getter for name
     *
     * @return string[]
     */
    public function getName()
    {
        return $this->name instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->name;
    }

    /**
     * Setter for name
     *
     * @param string[] $name
     * @return $this
     */
    public function setName(array $name)
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetName()
    {
        $this->name = null;
        return $this;
    }

    /**
     * Adder for name
     *
     * @param string $name
     * @return $this
     */
    public function addName(string $name)
    {
        $this->name[] = $name;
        return $this;
    }


}

