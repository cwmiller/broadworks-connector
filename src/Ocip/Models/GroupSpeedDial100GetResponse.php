<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupSpeedDial100GetResponse
 *
 * Response to the GroupSpeedDial100GetRequest.
 *
 * @see GroupSpeedDial100GetRequest
 * @Groups [{"id":"d8f04177e438f303b41c211e518706bf:13267","type":"sequence"}]
 */
class GroupSpeedDial100GetResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{
    /**
     * @ElementName prefix
     * @Type string
     * @Group d8f04177e438f303b41c211e518706bf:13267
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

