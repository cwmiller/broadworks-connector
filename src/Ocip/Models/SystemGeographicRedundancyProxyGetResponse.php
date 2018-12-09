<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemGeographicRedundancyProxyGetResponse
 *
 * Response to SystemGeographicRedundancyProxyGetRequest.
 *         Contains a list of Geographic Redundancy Proxy system parameters.
 *
 * @see SystemGeographicRedundancyProxyGetRequest
 * @Groups [{"id":"b5f5416d9e71f8e4246cda16c4723744:8975","type":"sequence"}]
 */
class SystemGeographicRedundancyProxyGetResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName enabled
     * @Type bool
     * @Group b5f5416d9e71f8e4246cda16c4723744:8975
     * @var bool|null
     */
    private $enabled = null;

    /**
     * Getter for enabled
     *
     * @return bool
     */
    public function getEnabled()
    {
        return $this->enabled instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->enabled;
    }

    /**
     * Setter for enabled
     *
     * @param bool $enabled
     * @return $this
     */
    public function setEnabled($enabled)
    {
        $this->enabled = $enabled;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetEnabled()
    {
        $this->enabled = null;
        return $this;
    }


}

