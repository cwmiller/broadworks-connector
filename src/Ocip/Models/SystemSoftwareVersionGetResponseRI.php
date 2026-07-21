<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemSoftwareVersionGetResponseRI
 *
 * Response to the SystemSoftwareVersionGetRequestRI.
 *         
 *         The following elements are only used in AS data mode and not returned in XS data mode:
 *         releaseAnchor
 *
 * @Groups [{"id":"da582a1f8028404e70d260cf1f891033:18373","type":"sequence"}]
 */
class SystemSoftwareVersionGetResponseRI extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{
    /**
     * @ElementName version
     * @Type string
     * @Group da582a1f8028404e70d260cf1f891033:18373
     * @var string|null
     */
    protected $version = null;

    /**
     * @ElementName releaseAnchor
     * @Type string
     * @Group da582a1f8028404e70d260cf1f891033:18373
     * @var string|null
     */
    protected $releaseAnchor = null;

    /**
     * Getter for version
     *
     * @return string
     */
    public function getVersion()
    {
        return $this->version instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->version;
    }

    /**
     * Setter for version
     *
     * @param string $version
     * @return $this
     */
    public function setVersion($version)
    {
        $this->version = $version;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetVersion()
    {
        $this->version = null;
        return $this;
    }

    /**
     * Getter for releaseAnchor
     *
     * @return string
     */
    public function getReleaseAnchor()
    {
        return $this->releaseAnchor instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->releaseAnchor;
    }

    /**
     * Setter for releaseAnchor
     *
     * @param string $releaseAnchor
     * @return $this
     */
    public function setReleaseAnchor($releaseAnchor)
    {
        $this->releaseAnchor = $releaseAnchor;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetReleaseAnchor()
    {
        $this->releaseAnchor = null;
        return $this;
    }
}

