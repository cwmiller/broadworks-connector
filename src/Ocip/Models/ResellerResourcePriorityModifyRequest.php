<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * ResellerResourcePriorityModifyRequest
 *
 * Modify the Resource Priority service attributes for the reseller.
 *         The response is either a SuccessResponse or an ErrorResponse.
 *
 * @see SuccessResponse
 * @see ErrorResponse
 * @Groups [{"id":"1eceb69ac1f6f751a3ee0dce729e5cc2:81","type":"sequence"}]
 */
class ResellerResourcePriorityModifyRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{
    /**
     * @ElementName resellerId
     * @Type string
     * @Group 1eceb69ac1f6f751a3ee0dce729e5cc2:81
     * @MinLength 1
     * @MaxLength 36
     * @var string|null
     */
    protected $resellerId = null;

    /**
     * @ElementName useSystemSettings
     * @Type bool
     * @Optional
     * @Group 1eceb69ac1f6f751a3ee0dce729e5cc2:81
     * @var bool|null
     */
    protected $useSystemSettings = null;

    /**
     * @ElementName sendResourcePriorityToNetwork
     * @Type bool
     * @Optional
     * @Group 1eceb69ac1f6f751a3ee0dce729e5cc2:81
     * @var bool|null
     */
    protected $sendResourcePriorityToNetwork = null;

    /**
     * @ElementName resourcePriority
     * @Type \CWM\BroadWorksConnector\Ocip\Models\ResourcePriorityValue
     * @Optional
     * @Group 1eceb69ac1f6f751a3ee0dce729e5cc2:81
     * @var \CWM\BroadWorksConnector\Ocip\Models\ResourcePriorityValue|null
     */
    protected $resourcePriority = null;

    /**
     * Getter for resellerId
     *
     * @return string
     */
    public function getResellerId()
    {
        return $this->resellerId instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->resellerId;
    }

    /**
     * Setter for resellerId
     *
     * @param string $resellerId
     * @return $this
     */
    public function setResellerId($resellerId)
    {
        $this->resellerId = $resellerId;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetResellerId()
    {
        $this->resellerId = null;
        return $this;
    }

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

