<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupServiceIsAssignedResponse
 *
 * Returns true if the GroupService is assigned, otherwise false.
 *
 * @Groups [{"id":"f3a93cf15de4abd7903673e44ee3e07b:7878","type":"sequence"}]
 */
class GroupServiceIsAssignedResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName isAssigned
     * @Type bool
     * @Group f3a93cf15de4abd7903673e44ee3e07b:7878
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

