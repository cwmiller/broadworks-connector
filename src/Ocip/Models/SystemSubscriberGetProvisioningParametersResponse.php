<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemSubscriberGetProvisioningParametersResponse
 *
 * Response to the SystemSubscriberGetProvisioningParametersRequest.
 *         
 *         Replaced by: SystemSubscriberGetProvisioningParametersResponse24
 *
 * @see SystemSubscriberGetProvisioningParametersRequest
 * @see SystemSubscriberGetProvisioningParametersResponse24
 * @Groups [{"id":"ab0042aa512abc10edb3c55e4b416b0b:35272","type":"sequence"}]
 */
class SystemSubscriberGetProvisioningParametersResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName configurableCLIDNormalization
     * @Type bool
     * @Group ab0042aa512abc10edb3c55e4b416b0b:35272
     * @var bool|null
     */
    private $configurableCLIDNormalization = null;

    /**
     * Getter for configurableCLIDNormalization
     *
     * @return bool
     */
    public function getConfigurableCLIDNormalization()
    {
        return $this->configurableCLIDNormalization instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->configurableCLIDNormalization;
    }

    /**
     * Setter for configurableCLIDNormalization
     *
     * @param bool $configurableCLIDNormalization
     * @return $this
     */
    public function setConfigurableCLIDNormalization($configurableCLIDNormalization)
    {
        $this->configurableCLIDNormalization = $configurableCLIDNormalization;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetConfigurableCLIDNormalization()
    {
        $this->configurableCLIDNormalization = null;
        return $this;
    }


}

