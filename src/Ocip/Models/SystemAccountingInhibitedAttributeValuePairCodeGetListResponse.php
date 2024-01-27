<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemAccountingInhibitedAttributeValuePairCodeGetListResponse
 *
 * Response to
 *         SystemAccountingInhibitedAttributeValuePairCodeGetListRequest. Contains a 2 column
 *         table with column headings "Attribute Value Pair Code" and "Vendor Id".
 *
 * @see SystemAccountingInhibitedAttributeValuePairCodeGetListRequest
 * @Groups [{"id":"da582a1f8028404e70d260cf1f891033:2041","type":"sequence"}]
 */
class SystemAccountingInhibitedAttributeValuePairCodeGetListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{
    /**
     * @ElementName inhibitedAttributeValuePairCodeTable
     * @Type \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
     * @Group da582a1f8028404e70d260cf1f891033:2041
     * @var \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    protected $inhibitedAttributeValuePairCodeTable = null;

    /**
     * Getter for inhibitedAttributeValuePairCodeTable
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
     */
    public function getInhibitedAttributeValuePairCodeTable()
    {
        return $this->inhibitedAttributeValuePairCodeTable instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->inhibitedAttributeValuePairCodeTable;
    }

    /**
     * Setter for inhibitedAttributeValuePairCodeTable
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\C\OCITable $inhibitedAttributeValuePairCodeTable
     * @return $this
     */
    public function setInhibitedAttributeValuePairCodeTable(\CWM\BroadWorksConnector\Ocip\Models\C\OCITable $inhibitedAttributeValuePairCodeTable)
    {
        $this->inhibitedAttributeValuePairCodeTable = $inhibitedAttributeValuePairCodeTable;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetInhibitedAttributeValuePairCodeTable()
    {
        $this->inhibitedAttributeValuePairCodeTable = null;
        return $this;
    }
}

