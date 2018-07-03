<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemBusyLampFieldGetResponse18
 *
 * Response to SystemBusyLampFieldGetRequest18.
 *         
 *         The following elements are only used in AS data mode:
 *          forceUseOfTCP
 *
 * @see SystemBusyLampFieldGetRequest18
 */
class SystemBusyLampFieldGetResponse18 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
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

