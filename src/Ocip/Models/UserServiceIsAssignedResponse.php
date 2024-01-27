<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserServiceIsAssignedResponse
 *
 * Returns true if the UserService or service pack is assigned, otherwise false.
 *
 * @Groups [{"id":"fb73488c2ef4ac4400ab213b637d79a9:3929","type":"sequence"}]
 */
class UserServiceIsAssignedResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{
    /**
     * @ElementName isAssigned
     * @Type bool
     * @Group fb73488c2ef4ac4400ab213b637d79a9:3929
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

