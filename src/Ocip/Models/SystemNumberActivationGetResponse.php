<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemNumberActivationGetResponse
 *
 * Response to SystemNumberActivationGetRequest.
 *         Contains the system number activation setting.
 *
 * @see SystemNumberActivationGetRequest
 */
class SystemNumberActivationGetResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
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

