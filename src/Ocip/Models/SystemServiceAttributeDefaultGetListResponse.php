<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemServiceAttributeDefaultGetListResponse
 *
 * Response to SystemServiceAttributeDefaultGetListRequest.
 *         Contains an array Service Attribute entries.
 *
 * @see SystemServiceAttributeDefaultGetListRequest
 * @Groups [{"id":"da582a1f8028404e70d260cf1f891033:16255","type":"sequence"}]
 */
class SystemServiceAttributeDefaultGetListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{
    /**
     * @ElementName serviceAttributeEntry
     * @Type \CWM\BroadWorksConnector\Ocip\Models\ServiceAttributeEntryRead
     * @Array
     * @Group da582a1f8028404e70d260cf1f891033:16255
     * @var \CWM\BroadWorksConnector\Ocip\Models\ServiceAttributeEntryRead[]
     */
    protected $serviceAttributeEntry = [
        
    ];

    /**
     * Getter for serviceAttributeEntry
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\ServiceAttributeEntryRead[]
     */
    public function getServiceAttributeEntry()
    {
        return $this->serviceAttributeEntry instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->serviceAttributeEntry;
    }

    /**
     * Setter for serviceAttributeEntry
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\ServiceAttributeEntryRead[] $serviceAttributeEntry
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
     * @param \CWM\BroadWorksConnector\Ocip\Models\ServiceAttributeEntryRead $serviceAttributeEntry
     * @return $this
     */
    public function addServiceAttributeEntry($serviceAttributeEntry)
    {
        $this->serviceAttributeEntry[] = $serviceAttributeEntry;
        return $this;
    }
}

