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
 * @Groups [{"id":"7f663d5135470c33ca64b0eed3c3aa0c:1560","type":"sequence"}]
 */
class SystemAccountingInhibitedAttributeValuePairCodeGetListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName inhibitedAttributeValuePairCodeTable
     * @Type \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
     * @Group 7f663d5135470c33ca64b0eed3c3aa0c:1560
     * @var \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    private $inhibitedAttributeValuePairCodeTable = null;

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

