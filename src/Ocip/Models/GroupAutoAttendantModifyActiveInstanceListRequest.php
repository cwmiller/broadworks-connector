<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupAutoAttendantModifyActiveInstanceListRequest
 *
 * Request to set the active status of Auto Attendant instances.
 *         The response is either SuccessResponse or ErrorResponse.
 *
 * @see SuccessResponse
 * @see ErrorResponse
 * @Groups [{"id":"ed0640d8ef49eb8b4eaa14d7c6f6c033:388","type":"sequence"}]
 */
class GroupAutoAttendantModifyActiveInstanceListRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName serviceActivation
     * @Type \CWM\BroadWorksConnector\Ocip\Models\ServiceActivation
     * @Array
     * @Optional
     * @Group ed0640d8ef49eb8b4eaa14d7c6f6c033:388
     * @var \CWM\BroadWorksConnector\Ocip\Models\ServiceActivation[]
     */
    protected $serviceActivation = array(
        
    );

    /**
     * Getter for serviceActivation
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\ServiceActivation[]
     */
    public function getServiceActivation()
    {
        return $this->serviceActivation instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->serviceActivation;
    }

    /**
     * Setter for serviceActivation
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\ServiceActivation[] $serviceActivation
     * @return $this
     */
    public function setServiceActivation(array $serviceActivation)
    {
        $this->serviceActivation = $serviceActivation;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetServiceActivation()
    {
        $this->serviceActivation = null;
        return $this;
    }

    /**
     * Adder for serviceActivation
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\ServiceActivation $serviceActivation
     * @return $this
     */
    public function addServiceActivation($serviceActivation)
    {
        $this->serviceActivation[] = $serviceActivation;
        return $this;
    }


}

