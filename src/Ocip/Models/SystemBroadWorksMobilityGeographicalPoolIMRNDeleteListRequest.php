<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemBroadWorksMobilityGeographicalPoolIMRNDeleteListRequest
 *
 * Remove BroadWorks Mobility IMRN numbers from a geographical pool. 
 *         The response is either SuccessResponse or ErrorResponse.
 *
 * @see SuccessResponse
 * @see ErrorResponse
 * @Groups [{"id":"9ae9f7d53e566e21347e23e20e2a2a39:829","type":"sequence"}]
 */
class SystemBroadWorksMobilityGeographicalPoolIMRNDeleteListRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{
    /**
     * @ElementName geographicalPoolName
     * @Type string
     * @Group 9ae9f7d53e566e21347e23e20e2a2a39:829
     * @MinLength 1
     * @MaxLength 80
     * @var string|null
     */
    protected $geographicalPoolName = null;

    /**
     * @ElementName imrnNumber
     * @Type string
     * @Array
     * @Group 9ae9f7d53e566e21347e23e20e2a2a39:829
     * @MinLength 1
     * @MaxLength 23
     * @var string[]
     */
    protected $imrnNumber = [
        
    ];

    /**
     * Getter for geographicalPoolName
     *
     * @return string
     */
    public function getGeographicalPoolName()
    {
        return $this->geographicalPoolName instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->geographicalPoolName;
    }

    /**
     * Setter for geographicalPoolName
     *
     * @param string $geographicalPoolName
     * @return $this
     */
    public function setGeographicalPoolName($geographicalPoolName)
    {
        $this->geographicalPoolName = $geographicalPoolName;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetGeographicalPoolName()
    {
        $this->geographicalPoolName = null;
        return $this;
    }

    /**
     * Getter for imrnNumber
     *
     * @return string[]
     */
    public function getImrnNumber()
    {
        return $this->imrnNumber instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->imrnNumber;
    }

    /**
     * Setter for imrnNumber
     *
     * @param string[] $imrnNumber
     * @return $this
     */
    public function setImrnNumber(array $imrnNumber)
    {
        $this->imrnNumber = $imrnNumber;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetImrnNumber()
    {
        $this->imrnNumber = null;
        return $this;
    }

    /**
     * Adder for imrnNumber
     *
     * @param string $imrnNumber
     * @return $this
     */
    public function addImrnNumber(string $imrnNumber)
    {
        $this->imrnNumber[] = $imrnNumber;
        return $this;
    }
}

