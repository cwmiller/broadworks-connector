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
 *
 * @see SuccessResponse
 * @see ErrorResponse
 */
class SystemBusyLampFieldModifyRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName displayLocalUserIdentityLastNameFirst
     * @Type bool
     * @var bool|null
     */
    private $displayLocalUserIdentityLastNameFirst = null;

    /**
     * @ElementName forceUseOfTCP
     * @Type bool
     * @var bool|null
     */
    private $forceUseOfTCP = null;

    /**
     * Getter for displayLocalUserIdentityLastNameFirst
     *
     * @return bool
     */
    public function getDisplayLocalUserIdentityLastNameFirst()
    {
        return $this->displayLocalUserIdentityLastNameFirst instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->displayLocalUserIdentityLastNameFirst;
    }

    /**
     * Setter for displayLocalUserIdentityLastNameFirst
     *
     * @param bool $displayLocalUserIdentityLastNameFirst
     * @return $this
     */
    public function setDisplayLocalUserIdentityLastNameFirst($displayLocalUserIdentityLastNameFirst)
    {
        $this->displayLocalUserIdentityLastNameFirst = $displayLocalUserIdentityLastNameFirst;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetDisplayLocalUserIdentityLastNameFirst()
    {
        $this->displayLocalUserIdentityLastNameFirst = null;
        return $this;
    }

    /**
     * Getter for forceUseOfTCP
     *
     * @return bool
     */
    public function getForceUseOfTCP()
    {
        return $this->forceUseOfTCP instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->forceUseOfTCP;
    }

    /**
     * Setter for forceUseOfTCP
     *
     * @param bool $forceUseOfTCP
     * @return $this
     */
    public function setForceUseOfTCP($forceUseOfTCP)
    {
        $this->forceUseOfTCP = $forceUseOfTCP;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetForceUseOfTCP()
    {
        $this->forceUseOfTCP = null;
        return $this;
    }


}

