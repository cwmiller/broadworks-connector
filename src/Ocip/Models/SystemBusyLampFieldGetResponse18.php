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
 *         Replaced by: SystemBusyLampFieldGetResponse23 in AS data mode.
 *
 * @see SystemBusyLampFieldGetRequest18
 * @see SystemBusyLampFieldGetResponse23
 * @Groups [{"id":"240b50f54d060859e5e275082fdf49f9:8376","type":"sequence"}]
 */
class SystemBusyLampFieldGetResponse18 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{
    /**
     * @ElementName displayLocalUserIdentityLastNameFirst
     * @Type bool
     * @Group 240b50f54d060859e5e275082fdf49f9:8376
     * @var bool|null
     */
    protected $displayLocalUserIdentityLastNameFirst = null;

    /**
     * @ElementName forceUseOfTCP
     * @Type bool
     * @Group 240b50f54d060859e5e275082fdf49f9:8376
     * @var bool|null
     */
    protected $forceUseOfTCP = null;

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

