<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * OutgoingCallingPlanRedirectedPermissions
 *
 * Outgoing Calling Plan being forwarded/transferred permissions.
 *
 * @Groups [{"id":"6f793dfca9bd3d121bb35e0f9cf1cb2e:2113","type":"sequence"}]
 */
class OutgoingCallingPlanRedirectedPermissions
{

    /**
     * @ElementName outsideGroup
     * @Type bool
     * @Group 6f793dfca9bd3d121bb35e0f9cf1cb2e:2113
     * @var bool|null
     */
    private $outsideGroup = null;

    /**
     * Getter for outsideGroup
     *
     * @return bool
     */
    public function getOutsideGroup()
    {
        return $this->outsideGroup instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->outsideGroup;
    }

    /**
     * Setter for outsideGroup
     *
     * @param bool $outsideGroup
     * @return $this
     */
    public function setOutsideGroup($outsideGroup)
    {
        $this->outsideGroup = $outsideGroup;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetOutsideGroup()
    {
        $this->outsideGroup = null;
        return $this;
    }


}

