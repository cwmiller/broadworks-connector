<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * ServiceProviderApplicationServerSetModifyRequest
 *
 * Modify the Application Server set assigned to the service provider or enterprise.
 *         The response is either a SuccessResponse or an ErrorResponse.
 *
 * @see SuccessResponse
 * @see ErrorResponse
 * @Groups [{"id":"f1088f4c5ceb30d524d2ba0f8097c393:1284","type":"sequence"}]
 */
class ServiceProviderApplicationServerSetModifyRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName serviceProviderId
     * @Type string
     * @Group f1088f4c5ceb30d524d2ba0f8097c393:1284
     * @MinLength 1
     * @MaxLength 30
     * @var string|null
     */
    private $serviceProviderId = null;

    /**
     * @ElementName applicationServerSetName
     * @Type string
     * @Nillable
     * @Optional
     * @Group f1088f4c5ceb30d524d2ba0f8097c393:1284
     * @MinLength 1
     * @MaxLength 80
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $applicationServerSetName = null;

    /**
     * Getter for serviceProviderId
     *
     * @return string
     */
    public function getServiceProviderId()
    {
        return $this->serviceProviderId instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->serviceProviderId;
    }

    /**
     * Setter for serviceProviderId
     *
     * @param string $serviceProviderId
     * @return $this
     */
    public function setServiceProviderId($serviceProviderId)
    {
        $this->serviceProviderId = $serviceProviderId;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetServiceProviderId()
    {
        $this->serviceProviderId = null;
        return $this;
    }

    /**
     * Getter for applicationServerSetName
     *
     * @return string|null
     */
    public function getApplicationServerSetName()
    {
        return $this->applicationServerSetName instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->applicationServerSetName;
    }

    /**
     * Setter for applicationServerSetName
     *
     * @param string|null $applicationServerSetName
     * @return $this
     */
    public function setApplicationServerSetName($applicationServerSetName = null)
    {
        if ($applicationServerSetName === null) {
            $this->applicationServerSetName = new \CWM\BroadWorksConnector\Ocip\Nil;
        } else {
            $this->applicationServerSetName = $applicationServerSetName;
        }
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

