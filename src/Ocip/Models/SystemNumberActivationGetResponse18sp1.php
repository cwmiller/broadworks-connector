<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemNumberActivationGetResponse18sp1
 *
 * Response to SystemNumberActivationGetRequest18sp1.
 *         Contains the system number activation setting.
 *
 * @see SystemNumberActivationGetRequest18sp1
 */
class SystemNumberActivationGetResponse18sp1 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName numberActivationMode
     * @var \CWM\BroadWorksConnector\Ocip\Models\NumberActivationMode|null
     */
    private $numberActivationMode = null;

    /**
     * Getter for numberActivationMode
     *
     * @ElementName numberActivationMode
     * @return \CWM\BroadWorksConnector\Ocip\Models\NumberActivationMode|null
     */
    public function getNumberActivationMode()
    {
        return $this->numberActivationMode;
    }

    /**
     * Setter for numberActivationMode
     *
     * @ElementName numberActivationMode
     * @param \CWM\BroadWorksConnector\Ocip\Models\NumberActivationMode|null $numberActivationMode
     * @return $this
     */
    public function setNumberActivationMode(\CWM\BroadWorksConnector\Ocip\Models\NumberActivationMode $numberActivationMode)
    {
        $this->numberActivationMode = $numberActivationMode;
        return $this;
    }


}

