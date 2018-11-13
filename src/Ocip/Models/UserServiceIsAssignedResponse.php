<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserServiceIsAssignedResponse
 *
 * Returns true if the UserService or service pack is assigned, otherwise false.
 */
class UserServiceIsAssignedResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName isAssigned
     * @Type bool
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

