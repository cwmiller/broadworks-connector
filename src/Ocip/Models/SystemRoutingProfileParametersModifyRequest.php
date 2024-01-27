<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemRoutingProfileParametersModifyRequest
 *
 * Request to modify Routing Profile system parameters.
 *         The response is either SuccessResponse or ErrorResponse.
 *
 * @see SuccessResponse
 * @see ErrorResponse
 * @Groups [{"id":"da582a1f8028404e70d260cf1f891033:15773","type":"sequence"}]
 */
class SystemRoutingProfileParametersModifyRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{
    /**
     * @ElementName enablePermissiveRouting
     * @Type bool
     * @Group da582a1f8028404e70d260cf1f891033:15773
     * @var bool|null
     */
    protected $enablePermissiveRouting = null;

    /**
     * Getter for enablePermissiveRouting
     *
     * @return bool
     */
    public function getEnablePermissiveRouting()
    {
        return $this->enablePermissiveRouting instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->enablePermissiveRouting;
    }

    /**
     * Setter for enablePermissiveRouting
     *
     * @param bool $enablePermissiveRouting
     * @return $this
     */
    public function setEnablePermissiveRouting($enablePermissiveRouting)
    {
        $this->enablePermissiveRouting = $enablePermissiveRouting;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetEnablePermissiveRouting()
    {
        $this->enablePermissiveRouting = null;
        return $this;
    }
}

