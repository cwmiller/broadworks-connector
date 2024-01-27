<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * OutgoingCallingPlanRedirectedPermissionsModify
 *
 * Outgoing Calling Plan being forwarded/transferred permissions.
 *
 * @Groups [{"id":"a63afa661ee5c74f4700e562e88c66d0:2123","type":"sequence"}]
 */
class OutgoingCallingPlanRedirectedPermissionsModify
{
    /**
     * @ElementName outsideGroup
     * @Type bool
     * @Optional
     * @Group a63afa661ee5c74f4700e562e88c66d0:2123
     * @var bool|null
     */
    protected $outsideGroup = null;

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

