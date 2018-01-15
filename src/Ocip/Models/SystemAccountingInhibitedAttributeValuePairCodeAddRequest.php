<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemAccountingInhibitedAttributeValuePairCodeAddRequest
 *
 * Add an Attribute Value Pair (AVP) combination to disable. The AVP
 *         combination includes a diameter AVP and a vendor ID. The response is
 * either
 *         a SuccessResponse or an ErrorResponse.
 */
class SystemAccountingInhibitedAttributeValuePairCodeAddRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName attributeValuePairCode
     * @var int|null
     */
    private $attributeValuePairCode = null;

    /**
     * @ElementName vendorId
     * @var int|null
     */
    private $vendorId = null;

    /**
     * Getter for attributeValuePairCode
     *
     * @ElementName attributeValuePairCode
     * @return int|null
     */
    public function getAttributeValuePairCode()
    {
        return $this->attributeValuePairCode;
    }

    /**
     * Setter for attributeValuePairCode
     *
     * @ElementName attributeValuePairCode
     * @param int|null $attributeValuePairCode
     * @return $this
     */
    public function setAttributeValuePairCode($attributeValuePairCode)
    {
        $this->attributeValuePairCode = $attributeValuePairCode;
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

