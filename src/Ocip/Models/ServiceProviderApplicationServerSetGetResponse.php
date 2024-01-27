<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * ServiceProviderApplicationServerSetGetResponse
 *
 * Response to the ServiceProviderApplicationServerSetGetRequest.
 *         The response contains the service provider or enterprise's Application Server set information.
 *
 * @see ServiceProviderApplicationServerSetGetRequest
 * @Groups [{"id":"e19a9072c2dad499e9f28837da5768db:1815","type":"sequence"}]
 */
class ServiceProviderApplicationServerSetGetResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{
    /**
     * @ElementName applicationServerSetName
     * @Type string
     * @Optional
     * @Group e19a9072c2dad499e9f28837da5768db:1815
     * @MinLength 1
     * @MaxLength 80
     * @var string|null
     */
    protected $applicationServerSetName = null;

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

