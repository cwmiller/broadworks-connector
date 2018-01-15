<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemSubscriberModifyProvisioningParametersRequest
 *
 * Modify the system provisioning configuration for all subscribers.
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class SystemSubscriberModifyProvisioningParametersRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
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

