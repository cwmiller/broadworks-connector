<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemNumberActivationModifyRequest
 *
 * Request to modify system number activation setting.
 *         The response is either SuccessResponse or ErrorResponse.
 */
class SystemNumberActivationModifyRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName useNumberActivation
     * @var bool|null
     */
    private $useNumberActivation = null;

    /**
     * Getter for useNumberActivation
     *
     * @ElementName useNumberActivation
     * @return bool|null
     */
    public function getUseNumberActivation()
    {
        return $this->useNumberActivation;
    }

    /**
     * Setter for useNumberActivation
     *
     * @ElementName useNumberActivation
     * @param bool|null $useNumberActivation
     * @return $this
     */
    public function setUseNumberActivation($useNumberActivation)
    {
        $this->useNumberActivation = $useNumberActivation;
        return $this;
    }


}

