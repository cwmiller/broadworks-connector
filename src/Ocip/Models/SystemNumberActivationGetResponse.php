<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemNumberActivationGetResponse
 *
 * Response to SystemNumberActivationGetRequest.
 *         Contains the system number activation setting.
 *
 * @see SystemNumberActivationGetRequest
 * @Groups [{"id":"1a79c7896cb04feac6eff47a5321756e:23227","type":"sequence"}]
 */
class SystemNumberActivationGetResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName useNumberActivation
     * @Type bool
     * @Group 1a79c7896cb04feac6eff47a5321756e:23227
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

