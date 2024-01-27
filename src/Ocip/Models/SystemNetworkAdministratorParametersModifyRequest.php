<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemNetworkAdministratorParametersModifyRequest
 *
 * Modify the network administrator settings for the system.
 *         The response is either a SuccessResponse or an ErrorResponse.
 *
 * @see SuccessResponse
 * @see ErrorResponse
 * @Groups [{"id":"da582a1f8028404e70d260cf1f891033:12488","type":"sequence"}]
 */
class SystemNetworkAdministratorParametersModifyRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{
    /**
     * @ElementName enabled
     * @Type bool
     * @Optional
     * @Group da582a1f8028404e70d260cf1f891033:12488
     * @var bool|null
     */
    protected $enabled = null;

    /**
     * @ElementName cacheRefreshIntervalInMinutes
     * @Type int
     * @Optional
     * @Group da582a1f8028404e70d260cf1f891033:12488
     * @MinInclusive 1
     * @MaxInclusive 1440
     * @var int|null
     */
    protected $cacheRefreshIntervalInMinutes = null;

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

    /**
     * Getter for cacheRefreshIntervalInMinutes
     *
     * @return int
     */
    public function getCacheRefreshIntervalInMinutes()
    {
        return $this->cacheRefreshIntervalInMinutes instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->cacheRefreshIntervalInMinutes;
    }

    /**
     * Setter for cacheRefreshIntervalInMinutes
     *
     * @param int $cacheRefreshIntervalInMinutes
     * @return $this
     */
    public function setCacheRefreshIntervalInMinutes($cacheRefreshIntervalInMinutes)
    {
        $this->cacheRefreshIntervalInMinutes = $cacheRefreshIntervalInMinutes;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetCacheRefreshIntervalInMinutes()
    {
        $this->cacheRefreshIntervalInMinutes = null;
        return $this;
    }
}

