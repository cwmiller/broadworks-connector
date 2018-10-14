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


}

