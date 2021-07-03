<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemDeviceManagementInProgressAndPendingEventCancelRequestCancelMultipleEvents
 *
 * @Groups [{"id":"7f663d5135470c33ca64b0eed3c3aa0c:7871","type":"sequence"}]
 */
class SystemDeviceManagementInProgressAndPendingEventCancelRequestCancelMultipleEvents
{

    /**
     * @ElementName dmEventStatusForCancel
     * @Type \CWM\BroadWorksConnector\Ocip\Models\DeviceManagementEventStatusForCancel
     * @Optional
     * @Group 7f663d5135470c33ca64b0eed3c3aa0c:7871
     * @var \CWM\BroadWorksConnector\Ocip\Models\DeviceManagementEventStatusForCancel|null
     */
    private $dmEventStatusForCancel = null;

    /**
     * @ElementName dmEventAction
     * @Type \CWM\BroadWorksConnector\Ocip\Models\DeviceManagementEventAction
     * @Optional
     * @Group 7f663d5135470c33ca64b0eed3c3aa0c:7871
     * @var \CWM\BroadWorksConnector\Ocip\Models\DeviceManagementEventAction|null
     */
    private $dmEventAction = null;

    /**
     * @ElementName dmEventLevel
     * @Type \CWM\BroadWorksConnector\Ocip\Models\DeviceManagementEventLevel
     * @Optional
     * @Group 7f663d5135470c33ca64b0eed3c3aa0c:7871
     * @var \CWM\BroadWorksConnector\Ocip\Models\DeviceManagementEventLevel|null
     */
    private $dmEventLevel = null;

    /**
     * @ElementName dmEventType
     * @Type \CWM\BroadWorksConnector\Ocip\Models\DeviceManagementEventType
     * @Optional
     * @Group 7f663d5135470c33ca64b0eed3c3aa0c:7871
     * @var \CWM\BroadWorksConnector\Ocip\Models\DeviceManagementEventType|null
     */
    private $dmEventType = null;

    /**
     * Getter for dmEventStatusForCancel
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\DeviceManagementEventStatusForCancel
     */
    public function getDmEventStatusForCancel()
    {
        return $this->dmEventStatusForCancel instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->dmEventStatusForCancel;
    }

    /**
     * Setter for dmEventStatusForCancel
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\DeviceManagementEventStatusForCancel $dmEventStatusForCancel
     * @return $this
     */
    public function setDmEventStatusForCancel(\CWM\BroadWorksConnector\Ocip\Models\DeviceManagementEventStatusForCancel $dmEventStatusForCancel)
    {
        $this->dmEventStatusForCancel = $dmEventStatusForCancel;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetDmEventStatusForCancel()
    {
        $this->dmEventStatusForCancel = null;
        return $this;
    }

    /**
     * Getter for dmEventAction
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\DeviceManagementEventAction
     */
    public function getDmEventAction()
    {
        return $this->dmEventAction instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->dmEventAction;
    }

    /**
     * Setter for dmEventAction
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\DeviceManagementEventAction $dmEventAction
     * @return $this
     */
    public function setDmEventAction(\CWM\BroadWorksConnector\Ocip\Models\DeviceManagementEventAction $dmEventAction)
    {
        $this->dmEventAction = $dmEventAction;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetDmEventAction()
    {
        $this->dmEventAction = null;
        return $this;
    }

    /**
     * Getter for dmEventLevel
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\DeviceManagementEventLevel
     */
    public function getDmEventLevel()
    {
        return $this->dmEventLevel instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->dmEventLevel;
    }

    /**
     * Setter for dmEventLevel
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\DeviceManagementEventLevel $dmEventLevel
     * @return $this
     */
    public function setDmEventLevel(\CWM\BroadWorksConnector\Ocip\Models\DeviceManagementEventLevel $dmEventLevel)
    {
        $this->dmEventLevel = $dmEventLevel;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetDmEventLevel()
    {
        $this->dmEventLevel = null;
        return $this;
    }

    /**
     * Getter for dmEventType
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\DeviceManagementEventType
     */
    public function getDmEventType()
    {
        return $this->dmEventType instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->dmEventType;
    }

    /**
     * Setter for dmEventType
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\DeviceManagementEventType $dmEventType
     * @return $this
     */
    public function setDmEventType(\CWM\BroadWorksConnector\Ocip\Models\DeviceManagementEventType $dmEventType)
    {
        $this->dmEventType = $dmEventType;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetDmEventType()
    {
        $this->dmEventType = null;
        return $this;
    }


}

