<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemAccountingInhibitedAttributeValuePairCodeDeleteRequest
 *
 * Remove an Attribute Value Pair (AVP) combination from the list of disabled AVP
 *         codes. The response is either a SuccessResponse or an ErrorResponse.
 *
 * @see SuccessResponse
 * @see ErrorResponse
 * @Groups [{"id":"da582a1f8028404e70d260cf1f891033:2008","type":"sequence"}]
 */
class SystemAccountingInhibitedAttributeValuePairCodeDeleteRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{
    /**
     * @ElementName attributeValuePairCode
     * @Type int
     * @Group da582a1f8028404e70d260cf1f891033:2008
     * @var int|null
     */
    protected $attributeValuePairCode = null;

    /**
     * @ElementName vendorId
     * @Type int
     * @Group da582a1f8028404e70d260cf1f891033:2008
     * @var int|null
     */
    protected $vendorId = null;

    /**
     * Getter for attributeValuePairCode
     *
     * @return int
     */
    public function getAttributeValuePairCode()
    {
        return $this->attributeValuePairCode instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->attributeValuePairCode;
    }

    /**
     * Setter for attributeValuePairCode
     *
     * @param int $attributeValuePairCode
     * @return $this
     */
    public function setAttributeValuePairCode($attributeValuePairCode)
    {
        $this->attributeValuePairCode = $attributeValuePairCode;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetAttributeValuePairCode()
    {
        $this->attributeValuePairCode = null;
        return $this;
    }

    /**
     * Getter for vendorId
     *
     * @return int
     */
    public function getVendorId()
    {
        return $this->vendorId instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->vendorId;
    }

    /**
     * Setter for vendorId
     *
     * @param int $vendorId
     * @return $this
     */
    public function setVendorId($vendorId)
    {
        $this->vendorId = $vendorId;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetVendorId()
    {
        $this->vendorId = null;
        return $this;
    }
}

