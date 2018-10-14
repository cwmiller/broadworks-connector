<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * ServiceProviderIMRNUnassignListRequest
 *
 * Unassign a list of service provider DNs from the service provider IMRN pool. The
 * DNs then become available for
 *         assignment to groups. It is possible to delete either: a single DN,
 *         or a list of DNs, or a range of DNs, or any combination thereof.
 *         The response is either SuccessResponse or ErrorResponse.
 *
 * @see SuccessResponse
 * @see ErrorResponse
 */
class ServiceProviderIMRNUnassignListRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName serviceProviderId
     * @var string|null
     */
    private $serviceProviderId = null;

    /**
     * @ElementName imrn
     * @var string[]
     */
    private $imrn = array(
        
    );

    /**
     * @ElementName imrnRange
     * @var \CWM\BroadWorksConnector\Ocip\Models\DNRange[]
     */
    private $imrnRange = array(
        
    );

    /**
     * Getter for serviceProviderId
     *
     * @ElementName serviceProviderId
     * @return string|null
     */
    public function getServiceProviderId()
    {
        return $this->serviceProviderId;
    }

    /**
     * Setter for serviceProviderId
     *
     * @ElementName serviceProviderId
     * @param string|null $serviceProviderId
     * @return $this
     */
    public function setServiceProviderId($serviceProviderId)
    {
        $this->serviceProviderId = $serviceProviderId;
        return $this;
    }

    /**
     * Getter for imrn
     *
     * @ElementName imrn
     * @return string[]
     */
    public function getImrn()
    {
        return $this->imrn;
    }

    /**
     * Setter for imrn
     *
     * @ElementName imrn
     * @param string[] $imrn
     * @return $this
     */
    public function setImrn(array $imrn)
    {
        $this->imrn = $imrn;
        return $this;
    }

    /**
     * Adder for imrn
     *
     * @ElementName imrn
     * @param string $imrn
     * @return $this
     */
    public function addImrn(string $imrn)
    {
        $this->imrn []= $imrn;
        return $this;
    }

    /**
     * Getter for imrnRange
     *
     * @ElementName imrnRange
     * @return \CWM\BroadWorksConnector\Ocip\Models\DNRange[]
     */
    public function getImrnRange()
    {
        return $this->imrnRange;
    }

    /**
     * Setter for imrnRange
     *
     * @ElementName imrnRange
     * @param \CWM\BroadWorksConnector\Ocip\Models\DNRange[] $imrnRange
     * @return $this
     */
    public function setImrnRange(array $imrnRange)
    {
        $this->imrnRange = $imrnRange;
        return $this;
    }

    /**
     * Adder for imrnRange
     *
     * @ElementName imrnRange
     * @param \CWM\BroadWorksConnector\Ocip\Models\DNRange $imrnRange
     * @return $this
     */
    public function addImrnRange($imrnRange)
    {
        $this->imrnRange []= $imrnRange;
        return $this;
    }


}

