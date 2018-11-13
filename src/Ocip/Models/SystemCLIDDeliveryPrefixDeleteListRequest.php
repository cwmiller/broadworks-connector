<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemCLIDDeliveryPrefixDeleteListRequest
 *
 * Request to delete one or more prefixes from the system.
 *         Prefix 00X must be sent using uppercase X.
 *         
 *         The response is either a SuccessResponse or an ErrorResponse.
 *
 * @see SuccessResponse
 * @see ErrorResponse
 */
class SystemCLIDDeliveryPrefixDeleteListRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName prefix
     * @Type \CWM\BroadWorksConnector\Ocip\Models\CLIDDeliveryPrefix
     * @Array
     * @var \CWM\BroadWorksConnector\Ocip\Models\CLIDDeliveryPrefix[]
     */
    private $prefix = array(
        
    );

    /**
     * Getter for prefix
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\CLIDDeliveryPrefix[]
     */
    public function getPrefix()
    {
        return $this->prefix instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->prefix;
    }

    /**
     * Setter for prefix
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\CLIDDeliveryPrefix[] $prefix
     * @return $this
     */
    public function setPrefix(array $prefix)
    {
        $this->prefix = $prefix;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetPrefix()
    {
        $this->prefix = null;
        return $this;
    }

    /**
     * Adder for prefix
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\CLIDDeliveryPrefix $prefix
     * @return $this
     */
    public function addPrefix($prefix)
    {
        $this->prefix[] = $prefix;
        return $this;
    }


}

