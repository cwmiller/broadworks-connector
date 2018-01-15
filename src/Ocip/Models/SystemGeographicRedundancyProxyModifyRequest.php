<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemGeographicRedundancyProxyModifyRequest
 *
 * Modify the list of Geographic Redundancy Proxysystem parameters
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class SystemGeographicRedundancyProxyModifyRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
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

