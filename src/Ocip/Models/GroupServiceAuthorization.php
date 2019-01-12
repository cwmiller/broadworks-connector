<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupServiceAuthorization
 *
 * Authorize (with quantity) or unauthorize a group service.
 *
 * @Groups [{"id":"c0d21ef9ba207c335d8347e5172fce1d:2295","type":"sequence","children":[{"id":"c0d21ef9ba207c335d8347e5172fce1d:2297","type":"choice"}]}]
 */
class GroupServiceAuthorization
{

    /**
     * @ElementName serviceName
     * @Type \CWM\BroadWorksConnector\Ocip\Models\GroupService
     * @Group c0d21ef9ba207c335d8347e5172fce1d:2295
     * @var \CWM\BroadWorksConnector\Ocip\Models\GroupService|null
     */
    private $serviceName = null;

    /**
     * @ElementName authorizedQuantity
     * @Type \CWM\BroadWorksConnector\Ocip\Models\UnboundedPositiveInt
     * @Group c0d21ef9ba207c335d8347e5172fce1d:2297
     * @var \CWM\BroadWorksConnector\Ocip\Models\UnboundedPositiveInt|null
     */
    private $authorizedQuantity = null;

    /**
     * @ElementName unauthorized
     * @Type bool
     * @Group c0d21ef9ba207c335d8347e5172fce1d:2297
     * @var bool|null
     */
    private $unauthorized = null;

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
     * Getter for unauthorized
     *
     * @return bool
     */
    public function getUnauthorized()
    {
        return $this->unauthorized instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->unauthorized;
    }

    /**
     * Setter for unauthorized
     *
     * @param bool $unauthorized
     * @return $this
     */
    public function setUnauthorized($unauthorized)
    {
        $this->unauthorized = $unauthorized;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetUnauthorized()
    {
        $this->unauthorized = null;
        return $this;
    }


}

