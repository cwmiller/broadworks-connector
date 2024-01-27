<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * ServiceProviderServicePackGetDetailListRequest
 *
 * Request to get a service pack details.
 *         The response is either ServiceProviderServicePackGetDetailListResponse or ErrorResponse.
 *
 * @see ServiceProviderServicePackGetDetailListResponse
 * @see ErrorResponse
 * @Groups [{"id":"e19a9072c2dad499e9f28837da5768db:6175","type":"sequence"}]
 */
class ServiceProviderServicePackGetDetailListRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{
    /**
     * @ElementName serviceProviderId
     * @Type string
     * @Group e19a9072c2dad499e9f28837da5768db:6175
     * @MinLength 1
     * @MaxLength 30
     * @var string|null
     */
    protected $serviceProviderId = null;

    /**
     * @ElementName servicePackName
     * @Type string
     * @Group e19a9072c2dad499e9f28837da5768db:6175
     * @MinLength 1
     * @MaxLength 80
     * @var string|null
     */
    protected $servicePackName = null;

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
     * Getter for servicePackName
     *
     * @return string
     */
    public function getServicePackName()
    {
        return $this->servicePackName instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->servicePackName;
    }

    /**
     * Setter for servicePackName
     *
     * @param string $servicePackName
     * @return $this
     */
    public function setServicePackName($servicePackName)
    {
        $this->servicePackName = $servicePackName;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetServicePackName()
    {
        $this->servicePackName = null;
        return $this;
    }
}

