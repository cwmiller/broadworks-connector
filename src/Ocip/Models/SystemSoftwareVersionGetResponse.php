<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemSoftwareVersionGetResponse
 *
 * Response to the SystemSoftwareVersionGetRequest.
 *
 * @see SystemSoftwareVersionGetRequest
 */
class SystemSoftwareVersionGetResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName version
     * @var string|null
     */
    private $version = null;

    /**
     * Getter for version
     *
     * @ElementName version
     * @return string|null
     */
    public function getVersion()
    {
        return $this->version;
    }

    /**
     * Setter for version
     *
     * @ElementName version
     * @param string|null $version
     * @return $this
     */
    public function setVersion($version)
    {
        $this->version = $version;
        return $this;
    }


}

