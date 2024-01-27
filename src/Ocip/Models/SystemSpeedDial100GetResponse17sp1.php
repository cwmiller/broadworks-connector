<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemSpeedDial100GetResponse17sp1
 *
 * Response to the SystemSpeedDial100GetRequest17sp1.
 *
 * @see SystemSpeedDial100GetRequest17sp1
 * @Groups [{"id":"e084de202cf726c3202fca43390f9ec5:111","type":"sequence"}]
 */
class SystemSpeedDial100GetResponse17sp1 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{
    /**
     * @ElementName prefix
     * @Type string
     * @Optional
     * @Group e084de202cf726c3202fca43390f9ec5:111
     * @MinLength 1
     * @MaxLength 2
     * @var string|null
     */
    protected $prefix = null;

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

