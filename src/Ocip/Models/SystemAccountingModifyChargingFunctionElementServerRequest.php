<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemAccountingModifyChargingFunctionElementServerRequest
 *
 * Request to modify a ChargingFunctionElementServer in the system.
 *         The response is either a SuccessResponse or an ErrorResponse.
 *
 * @see SuccessResponse
 * @see ErrorResponse
 * @Groups [{"id":"7f663d5135470c33ca64b0eed3c3aa0c:1576","type":"sequence"}]
 */
class SystemAccountingModifyChargingFunctionElementServerRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName address
     * @Type string
     * @Group 7f663d5135470c33ca64b0eed3c3aa0c:1576
     * @var string|null
     */
    private $address = null;

    /**
     * @ElementName type
     * @Type \CWM\BroadWorksConnector\Ocip\Models\ChargingFunctionElementServerType
     * @Optional
     * @Group 7f663d5135470c33ca64b0eed3c3aa0c:1576
     * @var \CWM\BroadWorksConnector\Ocip\Models\ChargingFunctionElementServerType|null
     */
    private $type = null;

    /**
     * @ElementName description
     * @Type string
     * @Nillable
     * @Optional
     * @Group 7f663d5135470c33ca64b0eed3c3aa0c:1576
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
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
     * @return string|null
     */
    public function getDescription()
    {
        return $this->description instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->description;
    }

    /**
     * Setter for description
     *
     * @param string|null $description
     * @return $this
     */
    public function setDescription($description = null)
    {
        if ($description === null) {
            $this->description = new \CWM\BroadWorksConnector\Ocip\Nil;
        } else {
            $this->description = $description;
        }
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

