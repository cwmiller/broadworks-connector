<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemNetworkClassOfServiceGetCommunicationBarringProfileUsageListRequest
 *
 * Get the list of Network Classes of Service that contain a specific
 *         Communication Barring Profile.
 *         The response is either a SystemNetworkClassOfServiceGetCommunicationBarringProfileUsageListResponse
 *         or an ErrorResponse.
 *
 * @see SystemNetworkClassOfServiceGetCommunicationBarringProfileUsageListResponse
 * @see ErrorResponse
 * @Groups [{"id":"b5f5416d9e71f8e4246cda16c4723744:10759","type":"sequence"}]
 */
class SystemNetworkClassOfServiceGetCommunicationBarringProfileUsageListRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName name
     * @Type string
     * @Group b5f5416d9e71f8e4246cda16c4723744:10759
     * @var string|null
     */
    private $name = null;

    /**
     * Getter for name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->name;
    }

    /**
     * Setter for name
     *
     * @param string $name
     * @return $this
     */
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetName()
    {
        $this->name = null;
        return $this;
    }


}

