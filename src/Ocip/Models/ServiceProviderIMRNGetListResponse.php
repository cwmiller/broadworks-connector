<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * ServiceProviderIMRNGetListResponse
 *
 * Response to ServiceProviderIMRNGetListRequest.
 *
 * @see ServiceProviderIMRNGetListRequest
 * @Groups [{"id":"f1088f4c5ceb30d524d2ba0f8097c393:3911","type":"sequence"}]
 */
class ServiceProviderIMRNGetListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName imrn
     * @Type string
     * @Array
     * @Optional
     * @Group f1088f4c5ceb30d524d2ba0f8097c393:3911
     * @var string[]
     */
    private $imrn = array(
        
    );

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


}

