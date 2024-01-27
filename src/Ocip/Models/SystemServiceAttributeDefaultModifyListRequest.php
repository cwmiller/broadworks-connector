<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemServiceAttributeDefaultModifyListRequest
 *
 * Request to modify a list of default attributes that are used when assigning the feature.
 *         The response is either a SuccessResponse or an ErrorResponse.
 *
 * @see SuccessResponse
 * @see ErrorResponse
 * @Groups [{"id":"da582a1f8028404e70d260cf1f891033:16271","type":"sequence"}]
 */
class SystemServiceAttributeDefaultModifyListRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{
    /**
     * @ElementName serviceName
     * @Type \CWM\BroadWorksConnector\Ocip\Models\ServiceCategory
     * @Group da582a1f8028404e70d260cf1f891033:16271
     * @var \CWM\BroadWorksConnector\Ocip\Models\ServiceCategory|null
     */
    protected $serviceName = null;

    /**
     * @ElementName serviceAttributeEntry
     * @Type \CWM\BroadWorksConnector\Ocip\Models\ServiceAttributeEntry
     * @Array
     * @Group da582a1f8028404e70d260cf1f891033:16271
     * @var \CWM\BroadWorksConnector\Ocip\Models\ServiceAttributeEntry[]
     */
    protected $serviceAttributeEntry = [
        
    ];

    /**
     * Getter for serviceName
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\ServiceCategory
     */
    public function getServiceName()
    {
        return $this->serviceName instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->serviceName;
    }

    /**
     * Setter for serviceName
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\ServiceCategory $serviceName
     * @return $this
     */
    public function setServiceName(\CWM\BroadWorksConnector\Ocip\Models\ServiceCategory $serviceName)
    {
        $this->serviceName = $serviceName;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetServiceName()
    {
        $this->serviceName = null;
        return $this;
    }

    /**
     * Getter for serviceAttributeEntry
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\ServiceAttributeEntry[]
     */
    public function getServiceAttributeEntry()
    {
        return $this->serviceAttributeEntry instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->serviceAttributeEntry;
    }

    /**
     * Setter for serviceAttributeEntry
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\ServiceAttributeEntry[] $serviceAttributeEntry
     * @return $this
     */
    public function setServiceAttributeEntry(array $serviceAttributeEntry)
    {
        $this->serviceAttributeEntry = $serviceAttributeEntry;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetServiceAttributeEntry()
    {
        $this->serviceAttributeEntry = null;
        return $this;
    }

    /**
     * Adder for serviceAttributeEntry
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\ServiceAttributeEntry $serviceAttributeEntry
     * @return $this
     */
    public function addServiceAttributeEntry($serviceAttributeEntry)
    {
        $this->serviceAttributeEntry[] = $serviceAttributeEntry;
        return $this;
    }
}

