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
 * @Groups [{"id":"da582a1f8028404e70d260cf1f891033:12627","type":"sequence"}]
 */
class SystemNetworkClassOfServiceGetCommunicationBarringProfileUsageListRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{
    /**
     * @ElementName name
     * @Type string
     * @Group da582a1f8028404e70d260cf1f891033:12627
     * @MinLength 1
     * @MaxLength 40
     * @var string|null
     */
    protected $name = null;

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

