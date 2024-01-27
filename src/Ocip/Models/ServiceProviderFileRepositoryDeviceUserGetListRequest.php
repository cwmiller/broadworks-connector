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
 * @Groups [{"id":"e19a9072c2dad499e9f28837da5768db:4370","type":"sequence"}]
 */
class ServiceProviderFileRepositoryDeviceUserGetListRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{
    /**
     * @ElementName serviceProviderId
     * @Type string
     * @Group e19a9072c2dad499e9f28837da5768db:4370
     * @MinLength 1
     * @MaxLength 30
     * @var string|null
     */
    protected $serviceProviderId = null;

    /**
     * @ElementName fileRepositoryName
     * @Type string
     * @Group e19a9072c2dad499e9f28837da5768db:4370
     * @MinLength 1
     * @MaxLength 40
     * @var string|null
     */
    protected $fileRepositoryName = null;

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

