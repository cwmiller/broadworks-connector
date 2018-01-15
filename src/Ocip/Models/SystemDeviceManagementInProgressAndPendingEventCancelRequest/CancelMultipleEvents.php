<?php

namespace CWM\BroadWorksConnector\Ocip\Models\SystemDeviceManagementInProgressAndPendingEventCancelRequest;

/**
 * CancelMultipleEvents
 */
class CancelMultipleEvents
{

    /**
     * @ElementName dmEventStatusForCancel
     * @var string|null
     */
    private $dmEventStatusForCancel = null;

    /**
     * @ElementName dmEventAction
     * @var string|null
     */
    private $dmEventAction = null;

    /**
     * @ElementName dmEventLevel
     * @var string|null
     */
    private $dmEventLevel = null;

    /**
     * @ElementName dmEventType
     * @var string|null
     */
    private $dmEventType = null;

    /**
     * Getter for dmEventStatusForCancel
     *
     * @ElementName dmEventStatusForCancel
     * @return string|null
     */
    public function getDmEventStatusForCancel()
    {
        return $this->dmEventStatusForCancel;
    }

    /**
     * Setter for dmEventStatusForCancel
     *
     * @ElementName dmEventStatusForCancel
     * @param string|null $dmEventStatusForCancel
     * @return $this
     */
    public function setDmEventStatusForCancel($dmEventStatusForCancel)
    {
        $this->dmEventStatusForCancel = $dmEventStatusForCancel;
        return $this;
    }

    /**
     * Getter for dmEventAction
     *
     * @ElementName dmEventAction
     * @return string|null
     */
    public function getDmEventAction()
    {
        return $this->dmEventAction;
    }

    /**
     * Setter for dmEventAction
     *
     * @ElementName dmEventAction
     * @param string|null $dmEventAction
     * @return $this
     */
    public function setDmEventAction($dmEventAction)
    {
        $this->dmEventAction = $dmEventAction;
        return $this;
    }

    /**
     * Getter for dmEventLevel
     *
     * @ElementName dmEventLevel
     * @return string|null
     */
    public function getDmEventLevel()
    {
        return $this->dmEventLevel;
    }

    /**
     * Setter for dmEventLevel
     *
     * @ElementName dmEventLevel
     * @param string|null $dmEventLevel
     * @return $this
     */
    public function setDmEventLevel($dmEventLevel)
    {
        $this->dmEventLevel = $dmEventLevel;
        return $this;
    }

    /**
     * Getter for dmEventType
     *
     * @ElementName dmEventType
     * @return string|null
     */
    public function getDmEventType()
    {
        return $this->dmEventType;
    }

    /**
     * Setter for dmEventType
     *
     * @ElementName dmEventType
     * @param string|null $dmEventType
     * @return $this
     */
    public function setDmEventType($dmEventType)
    {
        $this->dmEventType = $dmEventType;
        return $this;
    }


}

