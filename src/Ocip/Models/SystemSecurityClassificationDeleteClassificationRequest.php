<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemSecurityClassificationDeleteClassificationRequest
 *
 * Delete a System Security Classification
 *         The response is either a SuccessResponse or an ErrorResponse.
 *
 * @see SuccessResponse
 * @see ErrorResponse
 * @Groups [{"id":"6b3afea8308b7fdaab8d385357ca9c2d:119","type":"sequence"}]
 */
class SystemSecurityClassificationDeleteClassificationRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName securityClassificationName
     * @Type string
     * @Group 6b3afea8308b7fdaab8d385357ca9c2d:119
     * @MinLength 1
     * @MaxLength 40
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

