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
 */
class SystemSpeedDial100GetResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName prefix
     * @var string|null
     */
    private $prefix = null;

    /**
     * Getter for prefix
     *
     * @ElementName prefix
     * @return string|null
     */
    public function getPrefix()
    {
        return $this->prefix;
    }

    /**
     * Setter for prefix
     *
     * @ElementName prefix
     * @param string|null $prefix
     * @return $this
     */
    public function setPrefix($prefix)
    {
        $this->prefix = $prefix;
        return $this;
    }


}

