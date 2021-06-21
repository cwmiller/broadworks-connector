<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemCallCenterGetResponse
 *
 * Response to SystemCallCenterGetRequest.
 *         Replaced By: SystemCallCenterGetResponse14sp9
 *
 * @see SystemCallCenterGetRequest
 * @see SystemCallCenterGetResponse14sp9
 * @Groups [{"id":"ab0042aa512abc10edb3c55e4b416b0b:20829","type":"sequence"}]
 */
class SystemCallCenterGetResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName defaultFromAddress
     * @Type string
     * @Group ab0042aa512abc10edb3c55e4b416b0b:20829
     * @MinLength 1
     * @MaxLength 80
     * @var string|null
     */
    private $defaultFromAddress = null;

    /**
     * Getter for defaultFromAddress
     *
     * @return string
     */
    public function getDefaultFromAddress()
    {
        return $this->defaultFromAddress instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->defaultFromAddress;
    }

    /**
     * Setter for defaultFromAddress
     *
     * @param string $defaultFromAddress
     * @return $this
     */
    public function setDefaultFromAddress($defaultFromAddress)
    {
        $this->defaultFromAddress = $defaultFromAddress;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetDefaultFromAddress()
    {
        $this->defaultFromAddress = null;
        return $this;
    }


}

