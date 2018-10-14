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
     * @var string|null
     */
    private $serviceUserId = null;

    /**
     * @ElementName allDNIS
     * @var bool|null
     */
    private $allDNIS = null;

    /**
     * @ElementName name
     * @var string[]
     */
    private $name = array(
        
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
     * Getter for name
     *
     * @ElementName name
     * @return string[]
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Setter for name
     *
     * @ElementName name
     * @param string[] $name
     * @return $this
     */
    public function setName(array $name)
    {
        $this->name = $name;
        return $this;
    }

    /**
     * Adder for name
     *
     * @ElementName name
     * @param string $name
     * @return $this
     */
    public function addName(string $name)
    {
        $this->name []= $name;
        return $this;
    }


}

