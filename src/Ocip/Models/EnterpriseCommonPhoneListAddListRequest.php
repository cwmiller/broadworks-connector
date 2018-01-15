<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * EnterpriseCommonPhoneListAddListRequest
 *
 * Add one or more entries to an enterprise's common phone list.
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class EnterpriseCommonPhoneListAddListRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName serviceProviderId
     * @var string|null
     */
    private $serviceProviderId = null;

    /**
     * @ElementName entry
     * @var \CWM\BroadWorksConnector\Ocip\Models\PhoneListEntry[]
     */
    private $entry = array(
        
    );

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
     * Getter for entry
     *
     * @ElementName entry
     * @return \CWM\BroadWorksConnector\Ocip\Models\PhoneListEntry[]
     */
    public function getEntry()
    {
        return $this->entry;
    }

    /**
     * Setter for entry
     *
     * @ElementName entry
     * @param \CWM\BroadWorksConnector\Ocip\Models\PhoneListEntry[] $entry
     * @return $this
     */
    public function setEntry($entry)
    {
        $this->entry = $entry;
        return $this;
    }

    /**
     * Adder for entry
     *
     * @ElementName entry
     * @param \CWM\BroadWorksConnector\Ocip\Models\PhoneListEntry $entry
     * @return $this
     */
    public function addEntry($entry)
    {
        $this->entry []= $entry;
        return $this;
    }


}

