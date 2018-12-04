<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * ServiceProviderApplicationServerSetGetResponse
 *
 * Response to the ServiceProviderApplicationServerSetGetRequest.
 *         The response contains the service provider or enterprise's Application Server set information.
 *
 * @see ServiceProviderApplicationServerSetGetRequest
 * @Groups [{"id":"8f3ed38751e86ebcc639b5bc5cdef0ec:1213","type":"sequence"}]
 */
class ServiceProviderApplicationServerSetGetResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName applicationServerSetName
     * @Type string
     * @Optional
     * @Group 8f3ed38751e86ebcc639b5bc5cdef0ec:1213
     * @var string|null
     */
    private $applicationServerSetName = null;

    /**
     * Getter for applicationServerSetName
     *
     * @return string
     */
    public function getApplicationServerSetName()
    {
        return $this->applicationServerSetName instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->applicationServerSetName;
    }

    /**
     * Setter for applicationServerSetName
     *
     * @param string $applicationServerSetName
     * @return $this
     */
    public function setApplicationServerSetName($applicationServerSetName)
    {
        $this->applicationServerSetName = $applicationServerSetName;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetApplicationServerSetName()
    {
        $this->applicationServerSetName = null;
        return $this;
    }


}

