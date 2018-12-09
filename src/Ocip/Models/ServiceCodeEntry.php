<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * ServiceCodeEntry
 *
 * The service code entry.
 *
 * @Groups [{"id":"b5f5416d9e71f8e4246cda16c4723744:17513","type":"sequence"}]
 */
class ServiceCodeEntry
{

    /**
     * @ElementName serviceCode
     * @Type string
     * @Group b5f5416d9e71f8e4246cda16c4723744:17513
     * @var string|null
     */
    private $serviceCode = null;

    /**
     * @ElementName description
     * @Type string
     * @Group b5f5416d9e71f8e4246cda16c4723744:17513
     * @var string|null
     */
    private $description = null;

    /**
     * Getter for serviceCode
     *
     * @return string
     */
    public function getServiceCode()
    {
        return $this->serviceCode instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->serviceCode;
    }

    /**
     * Setter for serviceCode
     *
     * @param string $serviceCode
     * @return $this
     */
    public function setServiceCode($serviceCode)
    {
        $this->serviceCode = $serviceCode;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetServiceCode()
    {
        $this->serviceCode = null;
        return $this;
    }

    /**
     * Getter for description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->description;
    }

    /**
     * Setter for description
     *
     * @param string $description
     * @return $this
     */
    public function setDescription($description)
    {
        $this->description = $description;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetDescription()
    {
        $this->description = null;
        return $this;
    }


}

