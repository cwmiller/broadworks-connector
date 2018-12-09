<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupSpeedDial100GetResponse
 *
 * Response to the GroupSpeedDial100GetRequest.
 *
 * @see GroupSpeedDial100GetRequest
 * @Groups [{"id":"4f0fb68b4d4b3ac50a70eeb01a628dce:11235","type":"sequence"}]
 */
class GroupSpeedDial100GetResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName prefix
     * @Type string
     * @Group 4f0fb68b4d4b3ac50a70eeb01a628dce:11235
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

