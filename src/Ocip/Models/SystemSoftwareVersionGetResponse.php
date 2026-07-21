<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemSoftwareVersionGetResponse
 *
 * Response to the SystemSoftwareVersionGetRequest.
 *         
 *         Replaced by: SystemSoftwareVersionGetResponseRI in AS data mode
 *
 * @see SystemSoftwareVersionGetRequest
 * @Groups [{"id":"240b50f54d060859e5e275082fdf49f9:16626","type":"sequence"}]
 */
class SystemSoftwareVersionGetResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{
    /**
     * @ElementName version
     * @Type string
     * @Group 240b50f54d060859e5e275082fdf49f9:16626
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

