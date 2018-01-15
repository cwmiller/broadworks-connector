<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemGeographicRedundancyProxyGetResponse
 *
 * Response to SystemGeographicRedundancyProxyGetRequest.
 *         Contains a list of Geographic Redundancy Proxy system parameters.
 */
class SystemGeographicRedundancyProxyGetResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName enabled
     * @var bool|null
     */
    private $enabled = null;

    /**
     * Getter for enabled
     *
     * @ElementName enabled
     * @return bool|null
     */
    public function getEnabled()
    {
        return $this->enabled;
    }

    /**
     * Setter for enabled
     *
     * @ElementName enabled
     * @param bool|null $enabled
     * @return $this
     */
    public function setEnabled($enabled)
    {
        $this->enabled = $enabled;
        return $this;
    }


}

