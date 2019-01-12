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
 * @Groups [{"id":"7f663d5135470c33ca64b0eed3c3aa0c:10944","type":"sequence"}]
 */
class SystemNetworkClassOfServiceGetCommunicationBarringProfileUsageListRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName name
     * @Type string
     * @Group 7f663d5135470c33ca64b0eed3c3aa0c:10944
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

