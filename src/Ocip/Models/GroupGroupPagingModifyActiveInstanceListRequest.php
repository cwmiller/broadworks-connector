<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupGroupPagingModifyActiveInstanceListRequest
 *
 * Request to set the active status of Group Paging instances.
 *         The response is either SuccessResponse or ErrorResponse.
 *
 * @see SuccessResponse
 * @see ErrorResponse
 */
class GroupGroupPagingModifyActiveInstanceListRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName serviceActivation
     * @var \CWM\BroadWorksConnector\Ocip\Models\ServiceActivation[]
     */
    private $serviceActivation = array(
        
    );

    /**
     * Getter for serviceActivation
     *
     * @ElementName serviceActivation
     * @return \CWM\BroadWorksConnector\Ocip\Models\ServiceActivation[]
     */
    public function getServiceActivation()
    {
        return $this->serviceActivation;
    }

    /**
     * Setter for serviceActivation
     *
     * @ElementName serviceActivation
     * @param \CWM\BroadWorksConnector\Ocip\Models\ServiceActivation[] $serviceActivation
     * @return $this
     */
    public function setServiceActivation($serviceActivation)
    {
        $this->serviceActivation = $serviceActivation;
        return $this;
    }

    /**
     * Adder for serviceActivation
     *
     * @ElementName serviceActivation
     * @param \CWM\BroadWorksConnector\Ocip\Models\ServiceActivation $serviceActivation
     * @return $this
     */
    public function addServiceActivation($serviceActivation)
    {
        $this->serviceActivation []= $serviceActivation;
        return $this;
    }


}

