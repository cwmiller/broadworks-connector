<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserSecurityClassificationGetResponse22
 *
 * Response to the UserSecurityClassificationGetRequest22.
 *         The following elements are only used in Amplify data mode and not returned in AS and XS data mode:
 *           customizedSecurityClassification
 *
 * @see UserSecurityClassificationGetRequest22
 * @Groups [{"id":"6b3afea8308b7fdaab8d385357ca9c2d:329","type":"sequence"}]
 */
class UserSecurityClassificationGetResponse22 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName securityClassification
     * @Type string
     * @Optional
     * @Group 6b3afea8308b7fdaab8d385357ca9c2d:329
     * @MinLength 1
     * @MaxLength 40
     * @var string|null
     */
    private $securityClassification = null;

    /**
     * @ElementName customizedSecurityClassification
     * @Type string
     * @Optional
     * @Group 6b3afea8308b7fdaab8d385357ca9c2d:329
     * @MinLength 1
     * @MaxLength 40
     * @var string|null
     */
    private $customizedSecurityClassification = null;

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

    /**
     * Getter for customizedSecurityClassification
     *
     * @return string
     */
    public function getCustomizedSecurityClassification()
    {
        return $this->customizedSecurityClassification instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->customizedSecurityClassification;
    }

    /**
     * Setter for customizedSecurityClassification
     *
     * @param string $customizedSecurityClassification
     * @return $this
     */
    public function setCustomizedSecurityClassification($customizedSecurityClassification)
    {
        $this->customizedSecurityClassification = $customizedSecurityClassification;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetCustomizedSecurityClassification()
    {
        $this->customizedSecurityClassification = null;
        return $this;
    }


}

