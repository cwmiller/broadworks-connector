<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * OutgoingCallingPlanAuthorizationCodeEntry
 *
 * Outgoing Calling Plan Authorization Code.
 *
 * @Groups [{"id":"6f793dfca9bd3d121bb35e0f9cf1cb2e:1737","type":"sequence"}]
 */
class OutgoingCallingPlanAuthorizationCodeEntry
{

    /**
     * @ElementName code
     * @Type string
     * @Group 6f793dfca9bd3d121bb35e0f9cf1cb2e:1737
     * @MinLength 2
     * @MaxLength 14
     * @var string|null
     */
    private $code = null;

    /**
     * @ElementName description
     * @Type string
     * @Optional
     * @Group 6f793dfca9bd3d121bb35e0f9cf1cb2e:1737
     * @MinLength 1
     * @MaxLength 80
     * @var string|null
     */
    private $description = null;

    /**
     * Getter for code
     *
     * @return string
     */
    public function getCode()
    {
        return $this->code instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->code;
    }

    /**
     * Setter for code
     *
     * @param string $code
     * @return $this
     */
    public function setCode($code)
    {
        $this->code = $code;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetCode()
    {
        $this->code = null;
        return $this;
    }

    /**
     * Getter for description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->description;
    }

    /**
     * Setter for description
     *
     * @param string $description
     * @return $this
     */
    public function setDescription($description)
    {
        $this->description = $description;
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

