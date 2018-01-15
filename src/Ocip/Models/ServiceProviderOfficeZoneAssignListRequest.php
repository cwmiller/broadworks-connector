<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * ServiceProviderOfficeZoneAssignListRequest
 *
 * Assign a list of Office Zones to a service provider.
 *         The Element defaultOfficeZone is required only for the first assignment,
 * for subsequent assignments it is optional.
 *         Office Zones can only be assigned if the Location-Based Calling
 * Restrictions has been authorized to the service provider otherwise the request
 * will fail.
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class ServiceProviderOfficeZoneAssignListRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName serviceProviderId
     * @var string|null
     */
    private $serviceProviderId = null;

    /**
     * @ElementName officeZoneName
     * @var string[]
     */
    private $officeZoneName = array(
        
    );

    /**
     * @ElementName defaultOfficeZoneName
     * @var string|null
     */
    private $defaultOfficeZoneName = null;

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
     * Getter for officeZoneName
     *
     * @ElementName officeZoneName
     * @return string[]
     */
    public function getOfficeZoneName()
    {
        return $this->officeZoneName;
    }

    /**
     * Setter for officeZoneName
     *
     * @ElementName officeZoneName
     * @param string[] $officeZoneName
     * @return $this
     */
    public function setOfficeZoneName($officeZoneName)
    {
        $this->officeZoneName = $officeZoneName;
        return $this;
    }

    /**
     * Adder for officeZoneName
     *
     * @ElementName officeZoneName
     * @param string $officeZoneName
     * @return $this
     */
    public function addOfficeZoneName($officeZoneName)
    {
        $this->officeZoneName []= $officeZoneName;
        return $this;
    }

    /**
     * Getter for defaultOfficeZoneName
     *
     * @ElementName defaultOfficeZoneName
     * @return string|null
     */
    public function getDefaultOfficeZoneName()
    {
        return $this->defaultOfficeZoneName;
    }

    /**
     * Setter for defaultOfficeZoneName
     *
     * @ElementName defaultOfficeZoneName
     * @param string|null $defaultOfficeZoneName
     * @return $this
     */
    public function setDefaultOfficeZoneName($defaultOfficeZoneName)
    {
        $this->defaultOfficeZoneName = $defaultOfficeZoneName;
        return $this;
    }


}

