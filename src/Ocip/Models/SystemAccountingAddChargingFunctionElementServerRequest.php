<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemAccountingAddChargingFunctionElementServerRequest
 *
 * Request to add a ChargingFunctionElement Server to the system.
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class SystemAccountingAddChargingFunctionElementServerRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName address
     * @var string|null
     */
    private $address = null;

    /**
     * @ElementName isNetAddressExtended
     * @var bool|null
     */
    private $isNetAddressExtended = null;

    /**
     * @ElementName type
     * @var string|null
     */
    private $type = null;

    /**
     * @ElementName description
     * @var string|null
     */
    private $description = null;

    /**
     * Getter for address
     *
     * @ElementName address
     * @return string|null
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * Setter for address
     *
     * @ElementName address
     * @param string|null $address
     * @return $this
     */
    public function setAddress($address)
    {
        $this->address = $address;
        return $this;
    }

    /**
     * Getter for isNetAddressExtended
     *
     * @ElementName isNetAddressExtended
     * @return bool|null
     */
    public function getIsNetAddressExtended()
    {
        return $this->isNetAddressExtended;
    }

    /**
     * Setter for isNetAddressExtended
     *
     * @ElementName isNetAddressExtended
     * @param bool|null $isNetAddressExtended
     * @return $this
     */
    public function setIsNetAddressExtended($isNetAddressExtended)
    {
        $this->isNetAddressExtended = $isNetAddressExtended;
        return $this;
    }

    /**
     * Getter for type
     *
     * @ElementName type
     * @return string|null
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Setter for type
     *
     * @ElementName type
     * @param string|null $type
     * @return $this
     */
    public function setType($type)
    {
        $this->type = $type;
        return $this;
    }

    /**
     * Getter for description
     *
     * @ElementName description
     * @return string|null
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Setter for description
     *
     * @ElementName description
     * @param string|null $description
     * @return $this
     */
    public function setDescription($description)
    {
        $this->description = $description;
        return $this;
    }


}

