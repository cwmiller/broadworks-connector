<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * ServiceProviderFileRepositoryDeviceUserGetListRequest
 *
 * Request the list of service provider users for a file repository in the system.
 *         The response is either a
 * ServiceProviderFileRepositoryDeviceUserGetListResponse or an ErrorResponse.
 *
 * @see ServiceProviderFileRepositoryDeviceUserGetListResponse
 * @see ErrorResponse
 */
class ServiceProviderFileRepositoryDeviceUserGetListRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName serviceProviderId
     * @var string|null
     */
    private $serviceProviderId = null;

    /**
     * @ElementName fileRepositoryName
     * @var string|null
     */
    private $fileRepositoryName = null;

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
     * Getter for fileRepositoryName
     *
     * @ElementName fileRepositoryName
     * @return string|null
     */
    public function getFileRepositoryName()
    {
        return $this->fileRepositoryName;
    }

    /**
     * Setter for fileRepositoryName
     *
     * @ElementName fileRepositoryName
     * @param string|null $fileRepositoryName
     * @return $this
     */
    public function setFileRepositoryName($fileRepositoryName)
    {
        $this->fileRepositoryName = $fileRepositoryName;
        return $this;
    }


}

