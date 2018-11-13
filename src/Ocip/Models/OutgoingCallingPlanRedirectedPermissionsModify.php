<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * OutgoingCallingPlanRedirectedPermissionsModify
 *
 * Outgoing Calling Plan being forwarded/transferred permissions.
 */
class OutgoingCallingPlanRedirectedPermissionsModify
{

    /**
     * @ElementName outsideGroup
     * @Type bool
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

