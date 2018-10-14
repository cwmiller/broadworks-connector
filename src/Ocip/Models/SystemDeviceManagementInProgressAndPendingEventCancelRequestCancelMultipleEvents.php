<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemDeviceManagementInProgressAndPendingEventCancelRequestCancelMultipleEvents
 */
class SystemDeviceManagementInProgressAndPendingEventCancelRequestCancelMultipleEvents
{

    /**
     * @ElementName dmEventStatusForCancel
     * @var \CWM\BroadWorksConnector\Ocip\Models\DeviceManagementEventStatusForCancel|null
     */
    private $dmEventStatusForCancel = null;

    /**
     * @ElementName dmEventAction
     * @var \CWM\BroadWorksConnector\Ocip\Models\DeviceManagementEventAction|null
     */
    private $dmEventAction = null;

    /**
     * @ElementName dmEventLevel
     * @var \CWM\BroadWorksConnector\Ocip\Models\DeviceManagementEventLevel|null
     */
    private $dmEventLevel = null;

    /**
     * @ElementName dmEventType
     * @var \CWM\BroadWorksConnector\Ocip\Models\DeviceManagementEventType|null
     */
    private $dmEventType = null;

    /**
     * Getter for dmEventStatusForCancel
     *
     * @ElementName dmEventStatusForCancel
     * @return \CWM\BroadWorksConnector\Ocip\Models\DeviceManagementEventStatusForCancel|null
     */
    public function getDmEventStatusForCancel()
    {
        return $this->dmEventStatusForCancel;
    }

    /**
     * Setter for dmEventStatusForCancel
     *
     * @ElementName dmEventStatusForCancel
     * @param \CWM\BroadWorksConnector\Ocip\Models\DeviceManagementEventStatusForCancel|null $dmEventStatusForCancel
     * @return $this
     */
    public function setDmEventStatusForCancel(\CWM\BroadWorksConnector\Ocip\Models\DeviceManagementEventStatusForCancel $dmEventStatusForCancel)
    {
        $this->dmEventStatusForCancel = $dmEventStatusForCancel;
        return $this;
    }

    /**
     * Getter for dmEventAction
     *
     * @ElementName dmEventAction
     * @return \CWM\BroadWorksConnector\Ocip\Models\DeviceManagementEventAction|null
     */
    public function getDmEventAction()
    {
        return $this->dmEventAction;
    }

    /**
     * Setter for dmEventAction
     *
     * @ElementName dmEventAction
     * @param \CWM\BroadWorksConnector\Ocip\Models\DeviceManagementEventAction|null $dmEventAction
     * @return $this
     */
    public function setDmEventAction(\CWM\BroadWorksConnector\Ocip\Models\DeviceManagementEventAction $dmEventAction)
    {
        $this->dmEventAction = $dmEventAction;
        return $this;
    }

    /**
     * Getter for dmEventLevel
     *
     * @ElementName dmEventLevel
     * @return \CWM\BroadWorksConnector\Ocip\Models\DeviceManagementEventLevel|null
     */
    public function getDmEventLevel()
    {
        return $this->dmEventLevel;
    }

    /**
     * Setter for dmEventLevel
     *
     * @ElementName dmEventLevel
     * @param \CWM\BroadWorksConnector\Ocip\Models\DeviceManagementEventLevel|null $dmEventLevel
     * @return $this
     */
    public function setDmEventLevel(\CWM\BroadWorksConnector\Ocip\Models\DeviceManagementEventLevel $dmEventLevel)
    {
        $this->dmEventLevel = $dmEventLevel;
        return $this;
    }

    /**
     * Getter for dmEventType
     *
     * @ElementName dmEventType
     * @return \CWM\BroadWorksConnector\Ocip\Models\DeviceManagementEventType|null
     */
    public function getDmEventType()
    {
        return $this->dmEventType;
    }

    /**
     * Setter for dmEventType
     *
     * @ElementName dmEventType
     * @param \CWM\BroadWorksConnector\Ocip\Models\DeviceManagementEventType|null $dmEventType
     * @return $this
     */
    public function setDmEventType(\CWM\BroadWorksConnector\Ocip\Models\DeviceManagementEventType $dmEventType)
    {
        $this->dmEventType = $dmEventType;
        return $this;
    }


}

