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
 * @Groups [{"id":"1a79c7896cb04feac6eff47a5321756e:28185","type":"sequence"}]
 */
class SystemSpeedDial100GetResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName prefix
     * @Type string
     * @Group 1a79c7896cb04feac6eff47a5321756e:28185
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

