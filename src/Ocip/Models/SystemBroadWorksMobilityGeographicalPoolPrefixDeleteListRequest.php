<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemBroadWorksMobilityGeographicalPoolPrefixDeleteListRequest
 *
 * Delete a list of geographical prefixes from a pool.
 *         The response is either a SuccessResponse or an ErrorResponse.
 *
 * @see SuccessResponse
 * @see ErrorResponse
 * @Groups [{"id":"f7ae3539fd471e995b07dc1bf8836e2d:916","type":"sequence"}]
 */
class SystemBroadWorksMobilityGeographicalPoolPrefixDeleteListRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName geographicalPoolName
     * @Type string
     * @Group f7ae3539fd471e995b07dc1bf8836e2d:916
     * @MinLength 1
     * @MaxLength 80
     * @var string|null
     */
    private $geographicalPoolName = null;

    /**
     * @ElementName prefix
     * @Type string
     * @Array
     * @Group f7ae3539fd471e995b07dc1bf8836e2d:916
     * @MinLength 2
     * @MaxLength 5
     * @var string[]
     */
    private $prefix = array(
        
    );

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

