<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemDialableCallerIDModifyRequest
 *
 * Modify the system level Dialable Caller ID criteria list.
 *         The response is either a SuccessResponse or an ErrorResponse.
 *
 * @see SuccessResponse
 * @see ErrorResponse
 * @Groups [{"id":"da582a1f8028404e70d260cf1f891033:9145","type":"sequence"}]
 */
class SystemDialableCallerIDModifyRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{
    /**
     * @ElementName criteriaPriorityOrder
     * @Type \CWM\BroadWorksConnector\Ocip\Models\DialableCallerIDCriteriaPriorityOrder
     * @Array
     * @Optional
     * @Group da582a1f8028404e70d260cf1f891033:9145
     * @var \CWM\BroadWorksConnector\Ocip\Models\DialableCallerIDCriteriaPriorityOrder[]
     */
    protected $criteriaPriorityOrder = [
        
    ];

    /**
     * Getter for criteriaPriorityOrder
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\DialableCallerIDCriteriaPriorityOrder[]
     */
    public function getCriteriaPriorityOrder()
    {
        return $this->criteriaPriorityOrder instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->criteriaPriorityOrder;
    }

    /**
     * Setter for criteriaPriorityOrder
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\DialableCallerIDCriteriaPriorityOrder[] $criteriaPriorityOrder
     * @return $this
     */
    public function setCriteriaPriorityOrder(array $criteriaPriorityOrder)
    {
        $this->criteriaPriorityOrder = $criteriaPriorityOrder;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetCriteriaPriorityOrder()
    {
        $this->criteriaPriorityOrder = null;
        return $this;
    }

    /**
     * Adder for criteriaPriorityOrder
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\DialableCallerIDCriteriaPriorityOrder $criteriaPriorityOrder
     * @return $this
     */
    public function addCriteriaPriorityOrder($criteriaPriorityOrder)
    {
        $this->criteriaPriorityOrder[] = $criteriaPriorityOrder;
        return $this;
    }
}

