<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * MWIDeliveryToMobileEndpointTemplateBody23
 *
 * MWI Delivery To Mobile Endpoint template body.
 *
 * @Groups [{"id":"1ea80c1e18c25d0eed23dbc7bd18f1dc:442","type":"sequence"}]
 */
class MWIDeliveryToMobileEndpointTemplateBody23
{
    /**
     * @ElementName line
     * @Type \CWM\BroadWorksConnector\Ocip\Models\MWIDeliveryToMobileEndpointTemplateLine23
     * @Array
     * @Group 1ea80c1e18c25d0eed23dbc7bd18f1dc:442
     * @var \CWM\BroadWorksConnector\Ocip\Models\MWIDeliveryToMobileEndpointTemplateLine23[]
     */
    protected $line = [
        
    ];

    /**
     * Getter for line
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\MWIDeliveryToMobileEndpointTemplateLine23[]
     */
    public function getLine()
    {
        return $this->line instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->line;
    }

    /**
     * Setter for line
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\MWIDeliveryToMobileEndpointTemplateLine23[] $line
     * @return $this
     */
    public function setLine(array $line)
    {
        $this->line = $line;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetLine()
    {
        $this->line = null;
        return $this;
    }

    /**
     * Adder for line
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\MWIDeliveryToMobileEndpointTemplateLine23 $line
     * @return $this
     */
    public function addLine($line)
    {
        $this->line[] = $line;
        return $this;
    }
}

