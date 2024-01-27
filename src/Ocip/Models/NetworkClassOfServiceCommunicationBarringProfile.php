<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * NetworkClassOfServiceCommunicationBarringProfile
 *
 * Communication Barring Profile defined as part of the Network Class
 *         Of Service. There can be only one primary profile within a Network
 *         Class Of Service.
 *
 * @Groups [{"id":"6337d0cfba4de1c83587203c5b0bae54:3954","type":"sequence"}]
 */
class NetworkClassOfServiceCommunicationBarringProfile
{
    /**
     * @ElementName name
     * @Type string
     * @Group 6337d0cfba4de1c83587203c5b0bae54:3954
     * @MinLength 1
     * @MaxLength 40
     * @var string|null
     */
    protected $name = null;

    /**
     * @ElementName isPrimary
     * @Type bool
     * @Group 6337d0cfba4de1c83587203c5b0bae54:3954
     * @var bool|null
     */
    protected $isPrimary = null;

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
     * Getter for isPrimary
     *
     * @return bool
     */
    public function getIsPrimary()
    {
        return $this->isPrimary instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->isPrimary;
    }

    /**
     * Setter for isPrimary
     *
     * @param bool $isPrimary
     * @return $this
     */
    public function setIsPrimary($isPrimary)
    {
        $this->isPrimary = $isPrimary;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetIsPrimary()
    {
        $this->isPrimary = null;
        return $this;
    }
}

