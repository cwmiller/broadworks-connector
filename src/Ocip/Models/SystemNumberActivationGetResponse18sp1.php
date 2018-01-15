<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemNumberActivationGetResponse18sp1
 *
 * Response to SystemNumberActivationGetRequest18sp1.
 *         Contains the system number activation setting.
 */
class SystemNumberActivationGetResponse18sp1 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName numberActivationMode
     * @var string|null
     */
    private $numberActivationMode = null;

    /**
     * Getter for numberActivationMode
     *
     * @ElementName numberActivationMode
     * @return string|null
     */
    public function getNumberActivationMode()
    {
        return $this->numberActivationMode;
    }

    /**
     * Setter for numberActivationMode
     *
     * @ElementName numberActivationMode
     * @param string|null $numberActivationMode
     * @return $this
     */
    public function setNumberActivationMode($numberActivationMode)
    {
        $this->numberActivationMode = $numberActivationMode;
        return $this;
    }


}

