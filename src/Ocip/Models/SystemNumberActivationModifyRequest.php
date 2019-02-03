<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemNumberActivationModifyRequest
 *
 * Request to modify system number activation setting.
 *                 The response is either SuccessResponse or ErrorResponse.
 *
 * @see SuccessResponse
 * @see ErrorResponse
 * @Groups [{"id":"ab0042aa512abc10edb3c55e4b416b0b:26313","type":"sequence"}]
 */
class SystemNumberActivationModifyRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName useNumberActivation
     * @Type bool
     * @Optional
     * @Group ab0042aa512abc10edb3c55e4b416b0b:26313
     * @var bool|null
     */
    private $useNumberActivation = null;

    /**
     * Getter for useNumberActivation
     *
     * @return bool
     */
    public function getUseNumberActivation()
    {
        return $this->useNumberActivation instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->useNumberActivation;
    }

    /**
     * Setter for useNumberActivation
     *
     * @param bool $useNumberActivation
     * @return $this
     */
    public function setUseNumberActivation($useNumberActivation)
    {
        $this->useNumberActivation = $useNumberActivation;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetUseNumberActivation()
    {
        $this->useNumberActivation = null;
        return $this;
    }


}

