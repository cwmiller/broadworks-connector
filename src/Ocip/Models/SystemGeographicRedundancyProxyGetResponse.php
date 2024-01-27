<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemGeographicRedundancyProxyGetResponse
 *
 * Response to SystemGeographicRedundancyProxyGetRequest.
 *         Contains a list of Geographic Redundancy Proxy system parameters.
 *
 * @see SystemGeographicRedundancyProxyGetRequest
 * @Groups [{"id":"da582a1f8028404e70d260cf1f891033:10687","type":"sequence"}]
 */
class SystemGeographicRedundancyProxyGetResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{
    /**
     * @ElementName enabled
     * @Type bool
     * @Group da582a1f8028404e70d260cf1f891033:10687
     * @var bool|null
     */
    protected $enabled = null;

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

