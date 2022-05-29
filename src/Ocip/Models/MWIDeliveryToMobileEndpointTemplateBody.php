<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * MWIDeliveryToMobileEndpointTemplateBody
 *
 * MWI Delivery To Mobile Endpoint template body.
 *
 * @Groups [{"id":"958b78cc2a785d78259c1e8a474eb40d:420","type":"sequence"}]
 */
class MWIDeliveryToMobileEndpointTemplateBody
{

    /**
     * @ElementName line
     * @Type \CWM\BroadWorksConnector\Ocip\Models\MWIDeliveryToMobileEndpointTemplateLine
     * @Array
     * @Group 958b78cc2a785d78259c1e8a474eb40d:420
     * @var \CWM\BroadWorksConnector\Ocip\Models\MWIDeliveryToMobileEndpointTemplateLine[]
     */
    protected $line = array(
        
    );

    /**
     * Getter for line
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\MWIDeliveryToMobileEndpointTemplateLine[]
     */
    public function getLine()
    {
        return $this->line instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->line;
    }

    /**
     * Setter for line
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\MWIDeliveryToMobileEndpointTemplateLine[] $line
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
     * @param \CWM\BroadWorksConnector\Ocip\Models\MWIDeliveryToMobileEndpointTemplateLine $line
     * @return $this
     */
    public function addLine($line)
    {
        $this->line[] = $line;
        return $this;
    }


}

