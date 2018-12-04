<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * ServiceProviderIMRNAssignListRequest
 *
 * Assign a list of service provider DNs to the IMRN pool. It is possible to assign either: a single DN,
 *         or a list of DNs, or a range of DNs, or any combination thereof.
 *         The response is either SuccessResponse or ErrorResponse.
 *
 * @see SuccessResponse
 * @see ErrorResponse
 * @Groups [{"id":"8f3ed38751e86ebcc639b5bc5cdef0ec:3681","type":"sequence"}]
 */
class ServiceProviderIMRNAssignListRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName serviceProviderId
     * @Type string
     * @Group 8f3ed38751e86ebcc639b5bc5cdef0ec:3681
     * @var string|null
     */
    private $serviceProviderId = null;

    /**
     * @ElementName imrn
     * @Type string
     * @Array
     * @Optional
     * @Group 8f3ed38751e86ebcc639b5bc5cdef0ec:3681
     * @var string[]
     */
    private $imrn = array(
        
    );

    /**
     * @ElementName imrnRange
     * @Type \CWM\BroadWorksConnector\Ocip\Models\DNRange
     * @Array
     * @Optional
     * @Group 8f3ed38751e86ebcc639b5bc5cdef0ec:3681
     * @var \CWM\BroadWorksConnector\Ocip\Models\DNRange[]
     */
    private $imrnRange = array(
        
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
     * Getter for imrn
     *
     * @return string[]
     */
    public function getImrn()
    {
        return $this->imrn instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->imrn;
    }

    /**
     * Setter for imrn
     *
     * @param string[] $imrn
     * @return $this
     */
    public function setImrn(array $imrn)
    {
        $this->imrn = $imrn;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetImrn()
    {
        $this->imrn = null;
        return $this;
    }

    /**
     * Adder for imrn
     *
     * @param string $imrn
     * @return $this
     */
    public function addImrn(string $imrn)
    {
        $this->imrn[] = $imrn;
        return $this;
    }

    /**
     * Getter for imrnRange
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\DNRange[]
     */
    public function getImrnRange()
    {
        return $this->imrnRange instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->imrnRange;
    }

    /**
     * Setter for imrnRange
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\DNRange[] $imrnRange
     * @return $this
     */
    public function setImrnRange(array $imrnRange)
    {
        $this->imrnRange = $imrnRange;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetImrnRange()
    {
        $this->imrnRange = null;
        return $this;
    }

    /**
     * Adder for imrnRange
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\DNRange $imrnRange
     * @return $this
     */
    public function addImrnRange($imrnRange)
    {
        $this->imrnRange[] = $imrnRange;
        return $this;
    }


}

