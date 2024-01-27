<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupServiceAuthorizationAndAssignment
 *
 * Authorize (with quantity) a group service, and optionally 
 *         assign the service.
 *
 * @Groups [{"id":"6337d0cfba4de1c83587203c5b0bae54:3385","type":"sequence"}]
 */
class GroupServiceAuthorizationAndAssignment
{
    /**
     * @ElementName serviceName
     * @Type \CWM\BroadWorksConnector\Ocip\Models\GroupService
     * @Group 6337d0cfba4de1c83587203c5b0bae54:3385
     * @var \CWM\BroadWorksConnector\Ocip\Models\GroupService|null
     */
    protected $serviceName = null;

    /**
     * @ElementName authorizedQuantity
     * @Type \CWM\BroadWorksConnector\Ocip\Models\UnboundedPositiveInt
     * @Optional
     * @Group 6337d0cfba4de1c83587203c5b0bae54:3385
     * @var \CWM\BroadWorksConnector\Ocip\Models\UnboundedPositiveInt|null
     */
    protected $authorizedQuantity = null;

    /**
     * @ElementName assign
     * @Type bool
     * @Optional
     * @Group 6337d0cfba4de1c83587203c5b0bae54:3385
     * @var bool|null
     */
    protected $assign = null;

    /**
     * Getter for serviceName
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\GroupService
     */
    public function getServiceName()
    {
        return $this->serviceName instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->serviceName;
    }

    /**
     * Setter for serviceName
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\GroupService $serviceName
     * @return $this
     */
    public function setServiceName(\CWM\BroadWorksConnector\Ocip\Models\GroupService $serviceName)
    {
        $this->serviceName = $serviceName;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetServiceName()
    {
        $this->serviceName = null;
        return $this;
    }

    /**
     * Getter for authorizedQuantity
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\UnboundedPositiveInt
     */
    public function getAuthorizedQuantity()
    {
        return $this->authorizedQuantity instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->authorizedQuantity;
    }

    /**
     * Setter for authorizedQuantity
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\UnboundedPositiveInt $authorizedQuantity
     * @return $this
     */
    public function setAuthorizedQuantity(\CWM\BroadWorksConnector\Ocip\Models\UnboundedPositiveInt $authorizedQuantity)
    {
        $this->authorizedQuantity = $authorizedQuantity;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetAuthorizedQuantity()
    {
        $this->authorizedQuantity = null;
        return $this;
    }

    /**
     * Getter for assign
     *
     * @return bool
     */
    public function getAssign()
    {
        return $this->assign instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->assign;
    }

    /**
     * Setter for assign
     *
     * @param bool $assign
     * @return $this
     */
    public function setAssign($assign)
    {
        $this->assign = $assign;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetAssign()
    {
        $this->assign = null;
        return $this;
    }
}

