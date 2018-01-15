<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemNetworkClassOfServiceGetCommunicationBarringProfileUsageListRequest
 *
 * Get the list of Network Classes of Service that contain a specific
 *         Communication Barring Profile.
 *         The response is either a
 * SystemNetworkClassOfServiceGetCommunicationBarringProfileUsageListResponse
 *         or an ErrorResponse.
 */
class SystemNetworkClassOfServiceGetCommunicationBarringProfileUsageListRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName name
     * @var string|null
     */
    private $name = null;

    /**
     * Getter for name
     *
     * @ElementName name
     * @return string|null
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Setter for name
     *
     * @ElementName name
     * @param string|null $name
     * @return $this
     */
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }


}

