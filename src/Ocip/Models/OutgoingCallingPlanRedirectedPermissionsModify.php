<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * OutgoingCallingPlanRedirectedPermissionsModify
 *
 * Outgoing Calling Plan being forwarded/transferred permissions.
 *
 * @Groups [{"id":"6f793dfca9bd3d121bb35e0f9cf1cb2e:2124","type":"sequence"}]
 */
class OutgoingCallingPlanRedirectedPermissionsModify
{

    /**
     * @ElementName outsideGroup
     * @Type bool
     * @Optional
     * @Group 6f793dfca9bd3d121bb35e0f9cf1cb2e:2124
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

