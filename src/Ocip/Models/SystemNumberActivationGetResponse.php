<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemNumberActivationGetResponse
 *
 * Response to SystemNumberActivationGetRequest.
 *         Contains the system number activation setting.
 *
 * @see SystemNumberActivationGetRequest
 * @Groups [{"id":"d8f04177e438f303b41c211e518706bf:28520","type":"sequence"}]
 */
class SystemNumberActivationGetResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{
    /**
     * @ElementName useNumberActivation
     * @Type bool
     * @Group d8f04177e438f303b41c211e518706bf:28520
     * @var bool|null
     */
    protected $useNumberActivation = null;

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

