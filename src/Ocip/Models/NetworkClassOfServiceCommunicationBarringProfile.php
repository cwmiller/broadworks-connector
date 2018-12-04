<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * NetworkClassOfServiceCommunicationBarringProfile
 *
 * Communication Barring Profile defined as part of the Network Class
 *         Of Service. There can be only one primary profile within a Network
 *         Class Of Service.
 *
 * @Groups [{"id":"18b369af88e42ffdb4166615c670ce2c:2527","type":"sequence"}]
 */
class NetworkClassOfServiceCommunicationBarringProfile
{

    /**
     * @ElementName name
     * @Type string
     * @Group 18b369af88e42ffdb4166615c670ce2c:2527
     * @var string|null
     */
    private $name = null;

    /**
     * @ElementName isPrimary
     * @Type bool
     * @Group 18b369af88e42ffdb4166615c670ce2c:2527
     * @var bool|null
     */
    private $isPrimary = null;

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

