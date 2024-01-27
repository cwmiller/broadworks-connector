<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupIMRNGetListResponse
 *
 * Response to GroupIMRNGetListRequest.
 *
 * @see GroupIMRNGetListRequest
 * @Groups [{"id":"4b0e7857796c636464362260a2f8e5ee:6116","type":"sequence"}]
 */
class GroupIMRNGetListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{
    /**
     * @ElementName imrn
     * @Type string
     * @Array
     * @Optional
     * @Group 4b0e7857796c636464362260a2f8e5ee:6116
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

