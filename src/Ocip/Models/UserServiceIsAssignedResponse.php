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
     * @var bool|null
     */
    private $isAssigned = null;

    /**
     * Getter for isAssigned
     *
     * @ElementName isAssigned
     * @return bool|null
     */
    public function getIsAssigned()
    {
        return $this->isAssigned;
    }

    /**
     * Setter for isAssigned
     *
     * @ElementName isAssigned
     * @param bool|null $isAssigned
     * @return $this
     */
    public function setIsAssigned($isAssigned)
    {
        $this->isAssigned = $isAssigned;
        return $this;
    }


}

