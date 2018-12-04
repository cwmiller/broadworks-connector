<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupServiceIsAssignedResponse
 *
 * Returns true if the GroupService is assigned, otherwise false.
 *
 * @Groups [{"id":"7a7d0e1e7f776baf61f0645bc15cbe16:6562","type":"sequence"}]
 */
class GroupServiceIsAssignedResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName isAssigned
     * @Type bool
     * @Group 7a7d0e1e7f776baf61f0645bc15cbe16:6562
     * @var bool|null
     */
    private $isAssigned = null;

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

