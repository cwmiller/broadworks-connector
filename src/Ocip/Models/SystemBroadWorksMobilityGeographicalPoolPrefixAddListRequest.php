<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemBroadWorksMobilityGeographicalPoolPrefixAddListRequest
 *
 * Add a list of geographical prefixes.
 *         The response is either a SuccessResponse or an ErrorResponse.
 *
 * @see SuccessResponse
 * @see ErrorResponse
 * @Groups [{"id":"9ae9f7d53e566e21347e23e20e2a2a39:899","type":"sequence"}]
 */
class SystemBroadWorksMobilityGeographicalPoolPrefixAddListRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{
    /**
     * @ElementName geographicalPoolName
     * @Type string
     * @Group 9ae9f7d53e566e21347e23e20e2a2a39:899
     * @MinLength 1
     * @MaxLength 80
     * @var string|null
     */
    protected $geographicalPoolName = null;

    /**
     * @ElementName prefix
     * @Type string
     * @Array
     * @Group 9ae9f7d53e566e21347e23e20e2a2a39:899
     * @MinLength 2
     * @MaxLength 5
     * @var string[]
     */
    protected $prefix = [
        
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
     * Getter for prefix
     *
     * @return string[]
     */
    public function getPrefix()
    {
        return $this->prefix instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->prefix;
    }

    /**
     * Setter for prefix
     *
     * @param string[] $prefix
     * @return $this
     */
    public function setPrefix(array $prefix)
    {
        $this->prefix = $prefix;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetPrefix()
    {
        $this->prefix = null;
        return $this;
    }

    /**
     * Adder for prefix
     *
     * @param string $prefix
     * @return $this
     */
    public function addPrefix(string $prefix)
    {
        $this->prefix[] = $prefix;
        return $this;
    }
}

