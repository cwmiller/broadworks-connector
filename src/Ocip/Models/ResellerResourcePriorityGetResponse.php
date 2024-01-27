<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * ResellerResourcePriorityGetResponse
 *
 * Response to the ResellerResourcePriorityGetRequest.
 *         The response contains the reseller Resource Priority service attributes.
 *         If useSystemSettings is true, the parameters sendResourcePriorityToNetwork and 
 *         resourcePriority will not be returned in the response.
 *
 * @see ResellerResourcePriorityGetRequest
 * @Groups [{"id":"1eceb69ac1f6f751a3ee0dce729e5cc2:63","type":"sequence"}]
 */
class ResellerResourcePriorityGetResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{
    /**
     * @ElementName useSystemSettings
     * @Type bool
     * @Group 1eceb69ac1f6f751a3ee0dce729e5cc2:63
     * @var bool|null
     */
    protected $useSystemSettings = null;

    /**
     * @ElementName sendResourcePriorityToNetwork
     * @Type bool
     * @Group 1eceb69ac1f6f751a3ee0dce729e5cc2:63
     * @var bool|null
     */
    protected $sendResourcePriorityToNetwork = null;

    /**
     * @ElementName resourcePriority
     * @Type \CWM\BroadWorksConnector\Ocip\Models\ResourcePriorityValue
     * @Group 1eceb69ac1f6f751a3ee0dce729e5cc2:63
     * @var \CWM\BroadWorksConnector\Ocip\Models\ResourcePriorityValue|null
     */
    protected $resourcePriority = null;

    /**
     * Getter for useSystemSettings
     *
     * @return bool
     */
    public function getUseSystemSettings()
    {
        return $this->useSystemSettings instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->useSystemSettings;
    }

    /**
     * Setter for useSystemSettings
     *
     * @param bool $useSystemSettings
     * @return $this
     */
    public function setUseSystemSettings($useSystemSettings)
    {
        $this->useSystemSettings = $useSystemSettings;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetUseSystemSettings()
    {
        $this->useSystemSettings = null;
        return $this;
    }

    /**
     * Getter for sendResourcePriorityToNetwork
     *
     * @return bool
     */
    public function getSendResourcePriorityToNetwork()
    {
        return $this->sendResourcePriorityToNetwork instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->sendResourcePriorityToNetwork;
    }

    /**
     * Setter for sendResourcePriorityToNetwork
     *
     * @param bool $sendResourcePriorityToNetwork
     * @return $this
     */
    public function setSendResourcePriorityToNetwork($sendResourcePriorityToNetwork)
    {
        $this->sendResourcePriorityToNetwork = $sendResourcePriorityToNetwork;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetSendResourcePriorityToNetwork()
    {
        $this->sendResourcePriorityToNetwork = null;
        return $this;
    }

    /**
     * Getter for resourcePriority
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\ResourcePriorityValue
     */
    public function getResourcePriority()
    {
        return $this->resourcePriority instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->resourcePriority;
    }

    /**
     * Setter for resourcePriority
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\ResourcePriorityValue $resourcePriority
     * @return $this
     */
    public function setResourcePriority(\CWM\BroadWorksConnector\Ocip\Models\ResourcePriorityValue $resourcePriority)
    {
        $this->resourcePriority = $resourcePriority;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetResourcePriority()
    {
        $this->resourcePriority = null;
        return $this;
    }
}

