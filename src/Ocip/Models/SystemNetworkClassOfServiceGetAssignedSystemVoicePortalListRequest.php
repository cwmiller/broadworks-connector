<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemNetworkClassOfServiceGetAssignedSystemVoicePortalListRequest
 *
 * Request a list of system voice portals that have a given Network Class
 *         of Service assigned.
 *         The response is either a SystemNetworkClassOfServiceGetAssignedSystemVoicePortalListResponse or ErrorResponse.
 *
 * @see SystemNetworkClassOfServiceGetAssignedSystemVoicePortalListResponse
 * @see ErrorResponse
 * @Groups [{"id":"da582a1f8028404e70d260cf1f891033:12590","type":"sequence"}]
 */
class SystemNetworkClassOfServiceGetAssignedSystemVoicePortalListRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{
    /**
     * @ElementName name
     * @Type string
     * @Group da582a1f8028404e70d260cf1f891033:12590
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

