<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * ServiceProviderApplicationServerSetModifyRequest
 *
 * Modify the Application Server set assigned to the service provider or
 * enterprise.
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class ServiceProviderApplicationServerSetModifyRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName serviceProviderId
     * @var string|null
     */
    private $serviceProviderId = null;

    /**
     * @ElementName applicationServerSetName
     * @var string|null
     */
    private $applicationServerSetName = null;

    /**
     * Getter for serviceProviderId
     *
     * @ElementName serviceProviderId
     * @return string|null
     */
    public function getServiceProviderId()
    {
        return $this->serviceProviderId;
    }

    /**
     * Setter for serviceProviderId
     *
     * @ElementName serviceProviderId
     * @param string|null $serviceProviderId
     * @return $this
     */
    public function setServiceProviderId($serviceProviderId)
    {
        $this->serviceProviderId = $serviceProviderId;
        return $this;
    }

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

