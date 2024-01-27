<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupServiceIsAssignedResponse
 *
 * Returns true if the GroupService is assigned, otherwise false.
 *
 * @Groups [{"id":"4b0e7857796c636464362260a2f8e5ee:7616","type":"sequence"}]
 */
class GroupServiceIsAssignedResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{
    /**
     * @ElementName isAssigned
     * @Type bool
     * @Group 4b0e7857796c636464362260a2f8e5ee:7616
     * @var bool|null
     */
    protected $isAssigned = null;

    /**
     * Getter for isAssigned
     *
     * @return bool
     */
    public function getIsAssigned()
    {
        return $this->isAssigned instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->isAssigned;
    }

    /**
     * Setter for isAssigned
     *
     * @param bool $isAssigned
     * @return $this
     */
    public function setIsAssigned($isAssigned)
    {
        $this->isAssigned = $isAssigned;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetIsAssigned()
    {
        $this->isAssigned = null;
        return $this;
    }
}

