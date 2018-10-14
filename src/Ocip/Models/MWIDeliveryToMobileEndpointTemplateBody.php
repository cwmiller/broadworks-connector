<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * MWIDeliveryToMobileEndpointTemplateBody
 *
 * MWI Delivery To Mobile Endpoint template body.
 */
class MWIDeliveryToMobileEndpointTemplateBody
{

    /**
     * @ElementName line
     * @var \CWM\BroadWorksConnector\Ocip\Models\MWIDeliveryToMobileEndpointTemplateLine[]
     */
    private $line = array(
        
    );

    /**
     * Getter for line
     *
     * @ElementName line
     * @return \CWM\BroadWorksConnector\Ocip\Models\MWIDeliveryToMobileEndpointTemplateLine[]
     */
    public function getLine()
    {
        return $this->line;
    }

    /**
     * Setter for line
     *
     * @ElementName line
     * @param \CWM\BroadWorksConnector\Ocip\Models\MWIDeliveryToMobileEndpointTemplateLine[] $line
     * @return $this
     */
    public function setLine(array $line)
    {
        $this->line = $line;
        return $this;
    }

    /**
     * Adder for line
     *
     * @ElementName line
     * @param \CWM\BroadWorksConnector\Ocip\Models\MWIDeliveryToMobileEndpointTemplateLine $line
     * @return $this
     */
    public function addLine($line)
    {
        $this->line []= $line;
        return $this;
    }


}

