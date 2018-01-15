<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemCallCenterGetResponse
 *
 * Response to SystemCallCenterGetRequest.
 *         Replaced By: SystemCallCenterGetResponse14sp9
 */
class SystemCallCenterGetResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName defaultFromAddress
     * @var string|null
     */
    private $defaultFromAddress = null;

    /**
     * Getter for defaultFromAddress
     *
     * @ElementName defaultFromAddress
     * @return string|null
     */
    public function getDefaultFromAddress()
    {
        return $this->defaultFromAddress;
    }

    /**
     * Setter for defaultFromAddress
     *
     * @ElementName defaultFromAddress
     * @param string|null $defaultFromAddress
     * @return $this
     */
    public function setDefaultFromAddress($defaultFromAddress)
    {
        $this->defaultFromAddress = $defaultFromAddress;
        return $this;
    }


}

