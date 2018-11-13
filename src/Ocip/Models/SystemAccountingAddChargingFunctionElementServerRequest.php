<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemAccountingAddChargingFunctionElementServerRequest
 *
 * Request to add a ChargingFunctionElement Server to the system.
 *         The response is either a SuccessResponse or an ErrorResponse.
 *
 * @see SuccessResponse
 * @see ErrorResponse
 */
class SystemAccountingAddChargingFunctionElementServerRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName address
     * @Type string
     * @var string|null
     */
    private $address = null;

    /**
     * @ElementName isNetAddressExtended
     * @Type bool
     * @var bool|null
     */
    private $isNetAddressExtended = null;

    /**
     * @ElementName type
     * @Type \CWM\BroadWorksConnector\Ocip\Models\ChargingFunctionElementServerType
     * @var \CWM\BroadWorksConnector\Ocip\Models\ChargingFunctionElementServerType|null
     */
    private $type = null;

    /**
     * @ElementName description
     * @Type string
     * @var string|null
     */
    private $description = null;

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

    /**
     * Getter for isNetAddressExtended
     *
     * @return bool
     */
    public function getIsNetAddressExtended()
    {
        return $this->isNetAddressExtended instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->isNetAddressExtended;
    }

    /**
     * Setter for isNetAddressExtended
     *
     * @param bool $isNetAddressExtended
     * @return $this
     */
    public function setIsNetAddressExtended($isNetAddressExtended)
    {
        $this->isNetAddressExtended = $isNetAddressExtended;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetIsNetAddressExtended()
    {
        $this->isNetAddressExtended = null;
        return $this;
    }

    /**
     * Getter for type
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\ChargingFunctionElementServerType
     */
    public function getType()
    {
        return $this->type instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->type;
    }

    /**
     * Setter for type
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\ChargingFunctionElementServerType $type
     * @return $this
     */
    public function setType(\CWM\BroadWorksConnector\Ocip\Models\ChargingFunctionElementServerType $type)
    {
        $this->type = $type;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetType()
    {
        $this->type = null;
        return $this;
    }

    /**
     * Getter for description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->description;
    }

    /**
     * Setter for description
     *
     * @param string $description
     * @return $this
     */
    public function setDescription($description)
    {
        $this->description = $description;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetDescription()
    {
        $this->description = null;
        return $this;
    }


}

