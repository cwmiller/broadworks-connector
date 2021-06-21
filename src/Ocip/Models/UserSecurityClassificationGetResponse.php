<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserSecurityClassificationGetResponse
 *
 * Response to the UserSecurityClassificationGetRequest.
 *
 * @see UserSecurityClassificationGetRequest
 * @Groups [{"id":"ab0042aa512abc10edb3c55e4b416b0b:45810","type":"sequence"}]
 */
class UserSecurityClassificationGetResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName securityClassification
     * @Type string
     * @Optional
     * @Group ab0042aa512abc10edb3c55e4b416b0b:45810
     * @MinLength 1
     * @MaxLength 40
     * @var string|null
     */
    private $securityClassification = null;

    /**
     * Getter for securityClassification
     *
     * @return string
     */
    public function getSecurityClassification()
    {
        return $this->securityClassification instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->securityClassification;
    }

    /**
     * Setter for securityClassification
     *
     * @param string $securityClassification
     * @return $this
     */
    public function setSecurityClassification($securityClassification)
    {
        $this->securityClassification = $securityClassification;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetSecurityClassification()
    {
        $this->securityClassification = null;
        return $this;
    }


}

