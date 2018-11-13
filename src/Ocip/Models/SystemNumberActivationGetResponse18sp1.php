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
     * @Type \CWM\BroadWorksConnector\Ocip\Models\NumberActivationMode
     * @var \CWM\BroadWorksConnector\Ocip\Models\NumberActivationMode|null
     */
    private $numberActivationMode = null;

    /**
     * Getter for numberActivationMode
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\NumberActivationMode
     */
    public function getNumberActivationMode()
    {
        return $this->numberActivationMode instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->numberActivationMode;
    }

    /**
     * Setter for numberActivationMode
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\NumberActivationMode $numberActivationMode
     * @return $this
     */
    public function setNumberActivationMode(\CWM\BroadWorksConnector\Ocip\Models\NumberActivationMode $numberActivationMode)
    {
        $this->numberActivationMode = $numberActivationMode;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetNumberActivationMode()
    {
        $this->numberActivationMode = null;
        return $this;
    }


}

