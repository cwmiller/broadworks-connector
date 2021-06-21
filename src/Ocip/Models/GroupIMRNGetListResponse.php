<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupIMRNGetListResponse
 *
 * Response to GroupIMRNGetListRequest.
 *
 * @see GroupIMRNGetListRequest
 * @Groups [{"id":"f3a93cf15de4abd7903673e44ee3e07b:6374","type":"sequence"}]
 */
class GroupIMRNGetListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName imrn
     * @Type string
     * @Array
     * @Optional
     * @Group f3a93cf15de4abd7903673e44ee3e07b:6374
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

