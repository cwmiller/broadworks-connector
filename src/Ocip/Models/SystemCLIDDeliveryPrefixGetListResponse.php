<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemCLIDDeliveryPrefixGetListResponse
 *
 * Response to SystemCLIDDeliveryPrefixGetListRequest.
 */
class SystemCLIDDeliveryPrefixGetListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName prefix
     * @var string[]
     */
    private $prefix = array(
        
    );

    /**
     * Getter for prefix
     *
     * @ElementName prefix
     * @return string[]
     */
    public function getPrefix()
    {
        return $this->prefix;
    }

    /**
     * Setter for prefix
     *
     * @ElementName prefix
     * @param string[] $prefix
     * @return $this
     */
    public function setPrefix($prefix)
    {
        $this->prefix = $prefix;
        return $this;
    }

    /**
     * Adder for prefix
     *
     * @ElementName prefix
     * @param string $prefix
     * @return $this
     */
    public function addPrefix($prefix)
    {
        $this->prefix []= $prefix;
        return $this;
    }


}

