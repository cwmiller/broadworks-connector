<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * EnterpriseVoiceVPNTreatmentEntry
 *
 * Enterprise Voice VPN Treatment entry
 */
class EnterpriseVoiceVPNTreatmentEntry
{

    /**
     * @ElementName id
     * @var string|null
     */
    private $id = null;

    /**
     * @ElementName description
     * @var string|null
     */
    private $description = null;

    /**
     * Getter for id
     *
     * @ElementName id
     * @return string|null
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Setter for id
     *
     * @ElementName id
     * @param string|null $id
     * @return $this
     */
    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }

    /**
     * Getter for description
     *
     * @ElementName description
     * @return string|null
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Setter for description
     *
     * @ElementName description
     * @param string|null $description
     * @return $this
     */
    public function setDescription($description)
    {
        $this->description = $description;
        return $this;
    }


}

