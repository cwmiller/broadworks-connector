<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemCLIDDeliveryPrefixGetListResponse
 *
 * Response to SystemCLIDDeliveryPrefixGetListRequest.
 *
 * @see SystemCLIDDeliveryPrefixGetListRequest
 * @Groups [{"id":"da582a1f8028404e70d260cf1f891033:5426","type":"sequence"}]
 */
class SystemCLIDDeliveryPrefixGetListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{
    /**
     * @ElementName prefix
     * @Type \CWM\BroadWorksConnector\Ocip\Models\CLIDDeliveryPrefix
     * @Array
     * @Optional
     * @Group da582a1f8028404e70d260cf1f891033:5426
     * @var \CWM\BroadWorksConnector\Ocip\Models\CLIDDeliveryPrefix[]
     */
    protected $prefix = [
        
    ];

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

