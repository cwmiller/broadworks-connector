<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupIMRNGetListResponse
 *
 * Response to GroupIMRNGetListRequest.
 *
 * @see GroupIMRNGetListRequest
 */
class GroupIMRNGetListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName imrn
     * @Type string
     * @Array
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

