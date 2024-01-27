<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemResourcePriorityModifyRequest
 *
 * Modify the system Resource Priority service attributes.
 *         The response is either a SuccessResponse or an ErrorResponse.
 *
 * @see SuccessResponse
 * @see ErrorResponse
 * @Groups [{"id":"1eceb69ac1f6f751a3ee0dce729e5cc2:129","type":"sequence"}]
 */
class SystemResourcePriorityModifyRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{
    /**
     * @ElementName sendResourcePriorityToNetwork
     * @Type bool
     * @Optional
     * @Group 1eceb69ac1f6f751a3ee0dce729e5cc2:129
     * @var bool|null
     */
    protected $sendResourcePriorityToNetwork = null;

    /**
     * @ElementName resourcePriority
     * @Type \CWM\BroadWorksConnector\Ocip\Models\ResourcePriorityValue
     * @Optional
     * @Group 1eceb69ac1f6f751a3ee0dce729e5cc2:129
     * @var \CWM\BroadWorksConnector\Ocip\Models\ResourcePriorityValue|null
     */
    protected $resourcePriority = null;

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

