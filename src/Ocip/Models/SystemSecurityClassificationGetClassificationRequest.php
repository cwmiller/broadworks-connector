<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemSecurityClassificationGetClassificationRequest
 *
 * Get a system Security Classification.
 *         The response is either
 * SystemSecurityClassificationGetClassificationResponse or ErrorResponse.
 */
class SystemSecurityClassificationGetClassificationRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName securityClassificationName
     * @var string|null
     */
    private $securityClassificationName = null;

    /**
     * Getter for securityClassificationName
     *
     * @ElementName securityClassificationName
     * @return string|null
     */
    public function getSecurityClassificationName()
    {
        return $this->securityClassificationName;
    }

    /**
     * Setter for securityClassificationName
     *
     * @ElementName securityClassificationName
     * @param string|null $securityClassificationName
     * @return $this
     */
    public function setSecurityClassificationName($securityClassificationName)
    {
        $this->securityClassificationName = $securityClassificationName;
        return $this;
    }


}

