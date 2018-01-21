<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * ServiceCodeEntry
 *
 * The service code entry.
 */
class ServiceCodeEntry
{

    /**
     * @ElementName serviceCode
     * @var string|null
     */
    private $serviceCode = null;

    /**
     * @ElementName description
     * @var string|null
     */
    private $description = null;

    /**
     * Getter for serviceCode
     *
     * @ElementName serviceCode
     * @return string|null
     */
    public function getServiceCode()
    {
        return $this->serviceCode;
    }

    /**
     * Setter for serviceCode
     *
     * @ElementName serviceCode
     * @param string|null $serviceCode
     * @return $this
     */
    public function setServiceCode($serviceCode)
    {
        $this->serviceCode = $serviceCode;
        return $this;
    }

    /**
     * Getter for description
     *
     * @ElementName description
     * @return string|null
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Setter for description
     *
     * @ElementName description
     * @param string|null $description
     * @return $this
     */
    public function setDescription($description)
    {
        $this->description = $description;
        return $this;
    }


}

