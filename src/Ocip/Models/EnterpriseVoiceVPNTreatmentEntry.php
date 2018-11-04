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
     * @Nillable
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
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
     * @Nillable
     * @return string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Setter for description
     *
     * @ElementName description
     * @Nillable
     * @param string|null|\CWM\BroadWorksConnector\Ocip\Nil $description
     * @return $this
     */
    public function setDescription($description)
    {
        $this->description = $description;
        return $this;
    }


}

