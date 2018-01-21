<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GETSInhibitedAvpCodeKey
 *
 * The GETS inhibited Avp code entry.
 */
class GETSInhibitedAvpCodeKey
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

