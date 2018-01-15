<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemAccountingReorderChargingFunctionElementServerRequest
 *
 * Reorder the charging function element servers. You can not add or delete
 * addresses,
 *         only re-ordering the list is allowed. The ordered list of addresses can
 * be obtained
 *         with the SystemAccountingGetChargingFunctionElementServerListRequest
 * command.
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class SystemAccountingReorderChargingFunctionElementServerRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName orderedAddressList
     * @var string[]
     */
    private $orderedAddressList = array(
        
    );

    /**
     * Getter for orderedAddressList
     *
     * @ElementName orderedAddressList
     * @return string[]
     */
    public function getOrderedAddressList()
    {
        return $this->orderedAddressList;
    }

    /**
     * Setter for orderedAddressList
     *
     * @ElementName orderedAddressList
     * @param string[] $orderedAddressList
     * @return $this
     */
    public function setOrderedAddressList($orderedAddressList)
    {
        $this->orderedAddressList = $orderedAddressList;
        return $this;
    }

    /**
     * Adder for orderedAddressList
     *
     * @ElementName orderedAddressList
     * @param string $orderedAddressList
     * @return $this
     */
    public function addOrderedAddressList($orderedAddressList)
    {
        $this->orderedAddressList []= $orderedAddressList;
        return $this;
    }


}

