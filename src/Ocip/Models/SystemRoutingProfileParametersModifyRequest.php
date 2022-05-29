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
 * @Groups [{"id":"7f663d5135470c33ca64b0eed3c3aa0c:15557","type":"sequence"}]
 */
class SystemRoutingProfileParametersModifyRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName enablePermissiveRouting
     * @Type bool
     * @Group 7f663d5135470c33ca64b0eed3c3aa0c:15557
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

