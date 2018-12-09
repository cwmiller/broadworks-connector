<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * DNISKey
 *
 * Uniquely identifies a Call Center DNIS.
 *
 * @Groups [{"id":"8e629edbac315ae7889caca732382c44:1791","type":"sequence"}]
 */
class DNISKey
{

    /**
     * @ElementName serviceUserId
     * @Type string
     * @Group 8e629edbac315ae7889caca732382c44:1791
     * @var string|null
     */
    private $serviceUserId = null;

    /**
     * @ElementName name
     * @Type string
     * @Group 8e629edbac315ae7889caca732382c44:1791
     * @var string|null
     */
    private $name = null;

    /**
     * Getter for serviceUserId
     *
     * @return string
     */
    public function getServiceUserId()
    {
        return $this->serviceUserId instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->serviceUserId;
    }

    /**
     * Setter for serviceUserId
     *
     * @param string $serviceUserId
     * @return $this
     */
    public function setServiceUserId($serviceUserId)
    {
        $this->serviceUserId = $serviceUserId;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetServiceUserId()
    {
        $this->serviceUserId = null;
        return $this;
    }

    /**
     * Getter for name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->name;
    }

    /**
     * Setter for name
     *
     * @param string $name
     * @return $this
     */
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetName()
    {
        $this->name = null;
        return $this;
    }


}

