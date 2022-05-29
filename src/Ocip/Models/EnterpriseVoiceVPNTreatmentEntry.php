<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * EnterpriseVoiceVPNTreatmentEntry
 *
 * Enterprise Voice VPN Treatment entry
 *
 * @Groups [{"id":"5395c7df0157d44aa22f3351d1a5f3da:1654","type":"sequence"}]
 */
class EnterpriseVoiceVPNTreatmentEntry
{

    /**
     * @ElementName id
     * @Type string
     * @Group 5395c7df0157d44aa22f3351d1a5f3da:1654
     * @MinLength 1
     * @MaxLength 30
     * @var string|null
     */
    protected $id = null;

    /**
     * @ElementName description
     * @Type string
     * @Nillable
     * @Optional
     * @Group 5395c7df0157d44aa22f3351d1a5f3da:1654
     * @MinLength 1
     * @MaxLength 30
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    protected $description = null;

    /**
     * Getter for id
     *
     * @return string
     */
    public function getId()
    {
        return $this->id instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->id;
    }

    /**
     * Setter for id
     *
     * @param string $id
     * @return $this
     */
    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetId()
    {
        $this->id = null;
        return $this;
    }

    /**
     * Getter for description
     *
     * @return string|null
     */
    public function getDescription()
    {
        return $this->description instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->description;
    }

    /**
     * Setter for description
     *
     * @param string|null $description
     * @return $this
     */
    public function setDescription($description = null)
    {
        if ($description === null) {
            $this->description = new \CWM\BroadWorksConnector\Ocip\Nil;
        } else {
            $this->description = $description;
        }
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetDescription()
    {
        $this->description = null;
        return $this;
    }


}

