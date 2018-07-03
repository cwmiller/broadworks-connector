<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemSubscriberGetProvisioningParametersResponse
 *
 * Response to the SystemSubscriberGetProvisioningParametersRequest.
 *
 * @see SystemSubscriberGetProvisioningParametersRequest
 */
class SystemSubscriberGetProvisioningParametersResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName configurableCLIDNormalization
     * @var bool|null
     */
    private $configurableCLIDNormalization = null;

    /**
     * Getter for configurableCLIDNormalization
     *
     * @ElementName configurableCLIDNormalization
     * @return bool|null
     */
    public function getConfigurableCLIDNormalization()
    {
        return $this->configurableCLIDNormalization;
    }

    /**
     * Setter for configurableCLIDNormalization
     *
     * @ElementName configurableCLIDNormalization
     * @param bool|null $configurableCLIDNormalization
     * @return $this
     */
    public function setConfigurableCLIDNormalization($configurableCLIDNormalization)
    {
        $this->configurableCLIDNormalization = $configurableCLIDNormalization;
        return $this;
    }


}

