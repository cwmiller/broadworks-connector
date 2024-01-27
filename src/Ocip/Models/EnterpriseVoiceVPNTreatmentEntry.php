<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * EnterpriseVoiceVPNTreatmentEntry
 *
 * Enterprise Voice VPN Treatment entry
 *
 * @Groups [{"id":"405ec18fe08719ecf74e749d7e18c88f:1314","type":"sequence"}]
 */
class EnterpriseVoiceVPNTreatmentEntry
{
    /**
     * @ElementName id
     * @Type string
     * @Group 405ec18fe08719ecf74e749d7e18c88f:1314
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
     * @Group 405ec18fe08719ecf74e749d7e18c88f:1314
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

