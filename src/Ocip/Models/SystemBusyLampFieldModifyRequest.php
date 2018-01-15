<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemBusyLampFieldModifyRequest
 *
 * Modify the system level data associated with the Busy Lamp Field
 *         Service. The response is either a SuccessResponse or an 
 *         ErrorResponse.
 *         
 *         The following elements are only used in AS data mode:
 *          forceUseOfTCP
 */
class SystemBusyLampFieldModifyRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName displayLocalUserIdentityLastNameFirst
     * @var bool|null
     */
    private $displayLocalUserIdentityLastNameFirst = null;

    /**
     * @ElementName forceUseOfTCP
     * @var bool|null
     */
    private $forceUseOfTCP = null;

    /**
     * Getter for displayLocalUserIdentityLastNameFirst
     *
     * @ElementName displayLocalUserIdentityLastNameFirst
     * @return bool|null
     */
    public function getDisplayLocalUserIdentityLastNameFirst()
    {
        return $this->displayLocalUserIdentityLastNameFirst;
    }

    /**
     * Setter for displayLocalUserIdentityLastNameFirst
     *
     * @ElementName displayLocalUserIdentityLastNameFirst
     * @param bool|null $displayLocalUserIdentityLastNameFirst
     * @return $this
     */
    public function setDisplayLocalUserIdentityLastNameFirst($displayLocalUserIdentityLastNameFirst)
    {
        $this->displayLocalUserIdentityLastNameFirst = $displayLocalUserIdentityLastNameFirst;
        return $this;
    }

    /**
     * Getter for forceUseOfTCP
     *
     * @ElementName forceUseOfTCP
     * @return bool|null
     */
    public function getForceUseOfTCP()
    {
        return $this->forceUseOfTCP;
    }

    /**
     * Setter for forceUseOfTCP
     *
     * @ElementName forceUseOfTCP
     * @param bool|null $forceUseOfTCP
     * @return $this
     */
    public function setForceUseOfTCP($forceUseOfTCP)
    {
        $this->forceUseOfTCP = $forceUseOfTCP;
        return $this;
    }


}

