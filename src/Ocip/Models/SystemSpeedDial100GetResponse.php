<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemSpeedDial100GetResponse
 *
 * Response to the SystemSpeedDial100GetRequest.
 *         
 *         Replaced by: SystemSpeedDial100GetResponse17sp1
 *
 * @see SystemSpeedDial100GetRequest
 * @see SystemSpeedDial100GetResponse17sp1
 * @Groups [{"id":"ab0042aa512abc10edb3c55e4b416b0b:34963","type":"sequence"}]
 */
class SystemSpeedDial100GetResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName prefix
     * @Type string
     * @Group ab0042aa512abc10edb3c55e4b416b0b:34963
     * @MinLength 1
     * @MaxLength 2
     * @var string|null
     */
    private $prefix = null;

    /**
     * Getter for prefix
     *
     * @return string
     */
    public function getPrefix()
    {
        return $this->prefix instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->prefix;
    }

    /**
     * Setter for prefix
     *
     * @param string $prefix
     * @return $this
     */
    public function setPrefix($prefix)
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


}

