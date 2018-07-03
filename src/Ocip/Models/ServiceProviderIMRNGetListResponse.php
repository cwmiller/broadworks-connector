<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * ServiceProviderIMRNGetListResponse
 *
 * Response to ServiceProviderIMRNGetListRequest.
 *
 * @see ServiceProviderIMRNGetListRequest
 */
class ServiceProviderIMRNGetListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName imrn
     * @var string[]
     */
    private $imrn = array(
        
    );

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
    public function setImrn($imrn)
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
    public function addImrn($imrn)
    {
        $this->imrn []= $imrn;
        return $this;
    }


}

