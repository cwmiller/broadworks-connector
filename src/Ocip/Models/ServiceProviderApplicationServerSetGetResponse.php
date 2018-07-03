<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * ServiceProviderApplicationServerSetGetResponse
 *
 * Response to the ServiceProviderApplicationServerSetGetRequest.
 *         The response contains the service provider or enterprise's Application
 * Server set information.
 *
 * @see ServiceProviderApplicationServerSetGetRequest
 */
class ServiceProviderApplicationServerSetGetResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName applicationServerSetName
     * @var string|null
     */
    private $applicationServerSetName = null;

    /**
     * Getter for applicationServerSetName
     *
     * @ElementName applicationServerSetName
     * @return string|null
     */
    public function getApplicationServerSetName()
    {
        return $this->applicationServerSetName;
    }

    /**
     * Setter for applicationServerSetName
     *
     * @ElementName applicationServerSetName
     * @param string|null $applicationServerSetName
     * @return $this
     */
    public function setApplicationServerSetName($applicationServerSetName)
    {
        $this->applicationServerSetName = $applicationServerSetName;
        return $this;
    }


}

