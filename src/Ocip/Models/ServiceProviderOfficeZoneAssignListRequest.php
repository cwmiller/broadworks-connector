<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * ServiceProviderOfficeZoneAssignListRequest
 *
 * Assign a list of Office Zones to a service provider.
 *         The Element defaultOfficeZone is required only for the first assignment, for subsequent assignments it is optional.
 *         Office Zones can only be assigned if the Location-Based Calling Restrictions has been authorized to the service provider otherwise the request will fail.
 *         The response is either a SuccessResponse or an ErrorResponse.
 *
 * @see SuccessResponse
 * @see ErrorResponse
 * @Groups [{"id":"e19a9072c2dad499e9f28837da5768db:5242","type":"sequence"}]
 */
class ServiceProviderOfficeZoneAssignListRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{
    /**
     * @ElementName serviceProviderId
     * @Type string
     * @Group e19a9072c2dad499e9f28837da5768db:5242
     * @MinLength 1
     * @MaxLength 30
     * @var string|null
     */
    protected $serviceProviderId = null;

    /**
     * @ElementName officeZoneName
     * @Type string
     * @Array
     * @Optional
     * @Group e19a9072c2dad499e9f28837da5768db:5242
     * @MinLength 1
     * @MaxLength 40
     * @var string[]
     */
    protected $officeZoneName = [
        
    ];

    /**
     * @ElementName defaultOfficeZoneName
     * @Type string
     * @Optional
     * @Group e19a9072c2dad499e9f28837da5768db:5242
     * @MinLength 1
     * @MaxLength 40
     * @var string|null
     */
    protected $defaultOfficeZoneName = null;

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
     * Getter for officeZoneName
     *
     * @return string[]
     */
    public function getOfficeZoneName()
    {
        return $this->officeZoneName instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->officeZoneName;
    }

    /**
     * Setter for officeZoneName
     *
     * @param string[] $officeZoneName
     * @return $this
     */
    public function setOfficeZoneName(array $officeZoneName)
    {
        $this->officeZoneName = $officeZoneName;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetOfficeZoneName()
    {
        $this->officeZoneName = null;
        return $this;
    }

    /**
     * Adder for officeZoneName
     *
     * @param string $officeZoneName
     * @return $this
     */
    public function addOfficeZoneName(string $officeZoneName)
    {
        $this->officeZoneName[] = $officeZoneName;
        return $this;
    }

    /**
     * Getter for defaultOfficeZoneName
     *
     * @return string
     */
    public function getDefaultOfficeZoneName()
    {
        return $this->defaultOfficeZoneName instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->defaultOfficeZoneName;
    }

    /**
     * Setter for defaultOfficeZoneName
     *
     * @param string $defaultOfficeZoneName
     * @return $this
     */
    public function setDefaultOfficeZoneName($defaultOfficeZoneName)
    {
        $this->defaultOfficeZoneName = $defaultOfficeZoneName;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetDefaultOfficeZoneName()
    {
        $this->defaultOfficeZoneName = null;
        return $this;
    }
}

