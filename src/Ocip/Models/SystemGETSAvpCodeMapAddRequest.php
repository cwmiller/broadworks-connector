<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemGETSAvpCodeMapAddRequest
 *
 * Add a GETS AVP Code map at the system level.  It maps a Diameter AVP Code with a
 * vendor ID for.
 *         The response is either SuccessResponse or ErrorResponse.
 *
 * @see SuccessResponse
 * @see ErrorResponse
 */
class SystemGETSAvpCodeMapAddRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName avpCode
     * @var int|null
     */
    private $avpCode = null;

    /**
     * @ElementName vendorId
     * @var int|null
     */
    private $vendorId = null;

    /**
     * Getter for avpCode
     *
     * @ElementName avpCode
     * @return int|null
     */
    public function getAvpCode()
    {
        return $this->avpCode;
    }

    /**
     * Setter for avpCode
     *
     * @ElementName avpCode
     * @param int|null $avpCode
     * @return $this
     */
    public function setAvpCode($avpCode)
    {
        $this->avpCode = $avpCode;
        return $this;
    }

    /**
     * Getter for vendorId
     *
     * @ElementName vendorId
     * @return int|null
     */
    public function getVendorId()
    {
        return $this->vendorId;
    }

    /**
     * Setter for vendorId
     *
     * @ElementName vendorId
     * @param int|null $vendorId
     * @return $this
     */
    public function setVendorId($vendorId)
    {
        $this->vendorId = $vendorId;
        return $this;
    }


}

