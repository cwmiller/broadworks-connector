<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemSecurityClassificationGetClassificationRequest
 *
 * Get a system Security Classification.
 *         The response is either SystemSecurityClassificationGetClassificationResponse or ErrorResponse.
 *
 * @see SystemSecurityClassificationGetClassificationResponse
 * @see ErrorResponse
 * @Groups [{"id":"435c279b3e6710f4ada60ed66a93d278:135","type":"sequence"}]
 */
class SystemSecurityClassificationGetClassificationRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{
    /**
     * @ElementName securityClassificationName
     * @Type string
     * @Group 435c279b3e6710f4ada60ed66a93d278:135
     * @MinLength 1
     * @MaxLength 40
     * @var string|null
     */
    protected $securityClassificationName = null;

    /**
     * Getter for securityClassificationName
     *
     * @return string
     */
    public function getSecurityClassificationName()
    {
        return $this->securityClassificationName instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->securityClassificationName;
    }

    /**
     * Setter for securityClassificationName
     *
     * @param string $securityClassificationName
     * @return $this
     */
    public function setSecurityClassificationName($securityClassificationName)
    {
        $this->securityClassificationName = $securityClassificationName;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetSecurityClassificationName()
    {
        $this->securityClassificationName = null;
        return $this;
    }
}

