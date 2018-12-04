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
 * @Groups [{"id":"b91fcb7aba1afd62c15b3e7e36708d08:135","type":"sequence"}]
 */
class SystemSecurityClassificationGetClassificationRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName securityClassificationName
     * @Type string
     * @Group b91fcb7aba1afd62c15b3e7e36708d08:135
     * @var string|null
     */
    private $securityClassificationName = null;

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

