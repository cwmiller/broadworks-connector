<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemBroadWorksMobilityServiceAccessCodeListModifyRequest
 *
 * Modify a Service Access Code list.
 *         The response is either SuccessResponse or ErrorResponse.
 *
 * @see SuccessResponse
 * @see ErrorResponse
 * @Groups [{"id":"9ae9f7d53e566e21347e23e20e2a2a39:1410","type":"sequence"}]
 */
class SystemBroadWorksMobilityServiceAccessCodeListModifyRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{
    /**
     * @ElementName name
     * @Type string
     * @Group 9ae9f7d53e566e21347e23e20e2a2a39:1410
     * @MinLength 1
     * @MaxLength 80
     * @var string|null
     */
    protected $name = null;

    /**
     * @ElementName newName
     * @Type string
     * @Optional
     * @Group 9ae9f7d53e566e21347e23e20e2a2a39:1410
     * @MinLength 1
     * @MaxLength 80
     * @var string|null
     */
    protected $newName = null;

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

    /**
     * Getter for newName
     *
     * @return string
     */
    public function getNewName()
    {
        return $this->newName instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->newName;
    }

    /**
     * Setter for newName
     *
     * @param string $newName
     * @return $this
     */
    public function setNewName($newName)
    {
        $this->newName = $newName;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetNewName()
    {
        $this->newName = null;
        return $this;
    }
}

