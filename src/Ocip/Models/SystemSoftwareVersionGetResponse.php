<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemSoftwareVersionGetResponse
 *
 * Response to the SystemSoftwareVersionGetRequest.
 *
 * @see SystemSoftwareVersionGetRequest
 * @Groups [{"id":"da582a1f8028404e70d260cf1f891033:18062","type":"sequence"}]
 */
class SystemSoftwareVersionGetResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{
    /**
     * @ElementName version
     * @Type string
     * @Group da582a1f8028404e70d260cf1f891033:18062
     * @var string|null
     */
    protected $version = null;

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
}

