<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * ServiceProviderFileRepositoryDeviceUserGetListRequest
 *
 * Request the list of service provider users for a file repository in the system.
 *         The response is either a ServiceProviderFileRepositoryDeviceUserGetListResponse or an ErrorResponse.
 *
 * @see ServiceProviderFileRepositoryDeviceUserGetListResponse
 * @see ErrorResponse
 * @Groups [{"id":"f1088f4c5ceb30d524d2ba0f8097c393:3580","type":"sequence"}]
 */
class ServiceProviderFileRepositoryDeviceUserGetListRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName serviceProviderId
     * @Type string
     * @Group f1088f4c5ceb30d524d2ba0f8097c393:3580
     * @var string|null
     */
    private $serviceProviderId = null;

    /**
     * @ElementName fileRepositoryName
     * @Type string
     * @Group f1088f4c5ceb30d524d2ba0f8097c393:3580
     * @var string|null
     */
    private $fileRepositoryName = null;

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
     * Getter for fileRepositoryName
     *
     * @return string
     */
    public function getFileRepositoryName()
    {
        return $this->fileRepositoryName instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->fileRepositoryName;
    }

    /**
     * Setter for fileRepositoryName
     *
     * @param string $fileRepositoryName
     * @return $this
     */
    public function setFileRepositoryName($fileRepositoryName)
    {
        $this->fileRepositoryName = $fileRepositoryName;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetFileRepositoryName()
    {
        $this->fileRepositoryName = null;
        return $this;
    }


}

