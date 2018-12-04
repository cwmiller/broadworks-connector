<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * EnterpriseVoiceVPNTreatmentEntry
 *
 * Enterprise Voice VPN Treatment entry
 *
 * @Groups [{"id":"b561eca19800e0898f471e5e91eb3baa:1634","type":"sequence"}]
 */
class EnterpriseVoiceVPNTreatmentEntry
{

    /**
     * @ElementName id
     * @Type string
     * @Group b561eca19800e0898f471e5e91eb3baa:1634
     * @var string|null
     */
    private $id = null;

    /**
     * @ElementName description
     * @Type string
     * @Nillable
     * @Optional
     * @Group b561eca19800e0898f471e5e91eb3baa:1634
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $description = null;

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
    public function setDescription($description)
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

