<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * ServiceProviderIMRNGetListResponse
 *
 * Response to ServiceProviderIMRNGetListRequest.
 *
 * @see ServiceProviderIMRNGetListRequest
 * @Groups [{"id":"e19a9072c2dad499e9f28837da5768db:4780","type":"sequence"}]
 */
class ServiceProviderIMRNGetListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{
    /**
     * @ElementName imrn
     * @Type string
     * @Array
     * @Optional
     * @Group e19a9072c2dad499e9f28837da5768db:4780
     * @var string[]
     */
    protected $imrn = [
        
    ];

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

