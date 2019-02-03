<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * EnterpriseCallCenterCallDispositionCodeModifyActiveListRequest
 *
 * Request to set the active status of Call Center Call Disposition Codes.      
 *         The response is either a SuccessResponse or an ErrorResponse.
 *
 * @see SuccessResponse
 * @see ErrorResponse
 * @Groups [{"id":"e2c537e3e39483b96620673a7012ffdd:1055","type":"sequence"}]
 */
class EnterpriseCallCenterCallDispositionCodeModifyActiveListRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName serviceProviderId
     * @Type string
     * @Group e2c537e3e39483b96620673a7012ffdd:1055
     * @var string|null
     */
    private $serviceProviderId = null;

    /**
     * @ElementName callDispositionCodeActivation
     * @Type \CWM\BroadWorksConnector\Ocip\Models\CallDispositionCodeActivation
     * @Array
     * @Optional
     * @Group e2c537e3e39483b96620673a7012ffdd:1055
     * @var \CWM\BroadWorksConnector\Ocip\Models\CallDispositionCodeActivation[]
     */
    private $callDispositionCodeActivation = array(
        
    );

    /**
     * Getter for serviceProviderId
     *
     * @return string
     */
    public function getServiceProviderId()
    {
        return $this->serviceProviderId instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->serviceProviderId;
    }

    /**
     * Setter for serviceProviderId
     *
     * @param string $serviceProviderId
     * @return $this
     */
    public function setServiceProviderId($serviceProviderId)
    {
        $this->serviceProviderId = $serviceProviderId;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetServiceProviderId()
    {
        $this->serviceProviderId = null;
        return $this;
    }

    /**
     * Getter for callDispositionCodeActivation
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\CallDispositionCodeActivation[]
     */
    public function getCallDispositionCodeActivation()
    {
        return $this->callDispositionCodeActivation instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->callDispositionCodeActivation;
    }

    /**
     * Setter for callDispositionCodeActivation
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\CallDispositionCodeActivation[] $callDispositionCodeActivation
     * @return $this
     */
    public function setCallDispositionCodeActivation(array $callDispositionCodeActivation)
    {
        $this->callDispositionCodeActivation = $callDispositionCodeActivation;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetCallDispositionCodeActivation()
    {
        $this->callDispositionCodeActivation = null;
        return $this;
    }

    /**
     * Adder for callDispositionCodeActivation
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\CallDispositionCodeActivation $callDispositionCodeActivation
     * @return $this
     */
    public function addCallDispositionCodeActivation($callDispositionCodeActivation)
    {
        $this->callDispositionCodeActivation[] = $callDispositionCodeActivation;
        return $this;
    }


}

