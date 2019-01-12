<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemSoftwareVersionGetResponse
 *
 * Response to the SystemSoftwareVersionGetRequest.
 *
 * @see SystemSoftwareVersionGetRequest
 * @Groups [{"id":"7f663d5135470c33ca64b0eed3c3aa0c:16112","type":"sequence"}]
 */
class SystemSoftwareVersionGetResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName version
     * @Type string
     * @Group 7f663d5135470c33ca64b0eed3c3aa0c:16112
     * @var string|null
     */
    private $version = null;

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

