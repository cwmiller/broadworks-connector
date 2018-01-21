<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemCLIDDeliveryPrefixDeleteListRequest
 *
 * Request to delete one or more prefixes from the system.
 *         Prefix 00X must be sent using uppercase X.
 *         
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class SystemCLIDDeliveryPrefixDeleteListRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
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

