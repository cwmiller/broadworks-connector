<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemAccountingReorderChargingFunctionElementServerRequest
 *
 * Reorder the charging function element servers. You can not add or delete addresses,
 *         only re-ordering the list is allowed. The ordered list of addresses can be obtained
 *         with the SystemAccountingGetChargingFunctionElementServerListRequest command.
 *         The response is either a SuccessResponse or an ErrorResponse.
 *
 * @see SystemAccountingGetChargingFunctionElementServerListRequest
 * @see SuccessResponse
 * @see ErrorResponse
 * @Groups [{"id":"610f84d3e188f0477c3ae1a82ee036da:1606","type":"sequence"}]
 */
class SystemAccountingReorderChargingFunctionElementServerRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName orderedAddressList
     * @Type string
     * @Array
     * @Group 610f84d3e188f0477c3ae1a82ee036da:1606
     * @var string[]
     */
    private $orderedAddressList = array(
        
    );

    /**
     * Getter for orderedAddressList
     *
     * @return string[]
     */
    public function getOrderedAddressList()
    {
        return $this->orderedAddressList instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->orderedAddressList;
    }

    /**
     * Setter for orderedAddressList
     *
     * @param string[] $orderedAddressList
     * @return $this
     */
    public function setOrderedAddressList(array $orderedAddressList)
    {
        $this->orderedAddressList = $orderedAddressList;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetOrderedAddressList()
    {
        $this->orderedAddressList = null;
        return $this;
    }

    /**
     * Adder for orderedAddressList
     *
     * @param string $orderedAddressList
     * @return $this
     */
    public function addOrderedAddressList(string $orderedAddressList)
    {
        $this->orderedAddressList[] = $orderedAddressList;
        return $this;
    }


}

