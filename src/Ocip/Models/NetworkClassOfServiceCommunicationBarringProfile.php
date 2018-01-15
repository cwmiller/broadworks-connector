<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * NetworkClassOfServiceCommunicationBarringProfile
 *
 * Communication Barring Profile defined as part of the Network Class
 *         Of Service. There can be only one primary profile within a Network
 *         Class Of Service.
 */
class NetworkClassOfServiceCommunicationBarringProfile
{

    /**
     * @ElementName name
     * @var string|null
     */
    private $name = null;

    /**
     * @ElementName isPrimary
     * @var bool|null
     */
    private $isPrimary = null;

    /**
     * Getter for name
     *
     * @ElementName name
     * @return string|null
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Setter for name
     *
     * @ElementName name
     * @param string|null $name
     * @return $this
     */
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }

    /**
     * Getter for isPrimary
     *
     * @ElementName isPrimary
     * @return bool|null
     */
    public function getIsPrimary()
    {
        return $this->isPrimary;
    }

    /**
     * Setter for isPrimary
     *
     * @ElementName isPrimary
     * @param bool|null $isPrimary
     * @return $this
     */
    public function setIsPrimary($isPrimary)
    {
        $this->isPrimary = $isPrimary;
        return $this;
    }


}

