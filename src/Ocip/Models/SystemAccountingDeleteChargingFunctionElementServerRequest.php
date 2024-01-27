<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemAccountingDeleteChargingFunctionElementServerRequest
 *
 * Request to delete a ChargingFunctionElementServer from the system.
 *         The response is either a SuccessResponse or an ErrorResponse.
 *
 * @see SuccessResponse
 * @see ErrorResponse
 * @Groups [{"id":"da582a1f8028404e70d260cf1f891033:1895","type":"sequence"}]
 */
class SystemAccountingDeleteChargingFunctionElementServerRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{
    /**
     * @ElementName address
     * @Type string
     * @Group da582a1f8028404e70d260cf1f891033:1895
     * @MinLength 1
     * @MaxLength 256
     * @var string|null
     */
    protected $address = null;

    /**
     * Getter for address
     *
     * @return string
     */
    public function getAddress()
    {
        return $this->address instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->address;
    }

    /**
     * Setter for address
     *
     * @param string $address
     * @return $this
     */
    public function setAddress($address)
    {
        $this->address = $address;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetAddress()
    {
        $this->address = null;
        return $this;
    }
}

