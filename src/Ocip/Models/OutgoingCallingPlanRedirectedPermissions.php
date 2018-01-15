<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * OutgoingCallingPlanRedirectedPermissions
 *
 * Outgoing Calling Plan being forwarded/transferred permissions.
 */
class OutgoingCallingPlanRedirectedPermissions
{

    /**
     * @ElementName outsideGroup
     * @var bool|null
     */
    private $outsideGroup = null;

    /**
     * Getter for outsideGroup
     *
     * @ElementName outsideGroup
     * @return bool|null
     */
    public function getOutsideGroup()
    {
        return $this->outsideGroup;
    }

    /**
     * Setter for outsideGroup
     *
     * @ElementName outsideGroup
     * @param bool|null $outsideGroup
     * @return $this
     */
    public function setOutsideGroup($outsideGroup)
    {
        $this->outsideGroup = $outsideGroup;
        return $this;
    }


}

