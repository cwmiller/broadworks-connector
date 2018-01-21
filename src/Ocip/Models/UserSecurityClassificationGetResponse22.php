<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserSecurityClassificationGetResponse22
 *
 * Response to the UserSecurityClassificationGetRequest22.
 *         The following elements are only used in Amplify data mode and not
 * returned in AS and XS data mode:
 *           customizedSecurityClassification
 */
class UserSecurityClassificationGetResponse22 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName securityClassification
     * @var string|null
     */
    private $securityClassification = null;

    /**
     * @ElementName customizedSecurityClassification
     * @var string|null
     */
    private $customizedSecurityClassification = null;

    /**
     * Getter for securityClassification
     *
     * @ElementName securityClassification
     * @return string|null
     */
    public function getSecurityClassification()
    {
        return $this->securityClassification;
    }

    /**
     * Setter for securityClassification
     *
     * @ElementName securityClassification
     * @param string|null $securityClassification
     * @return $this
     */
    public function setSecurityClassification($securityClassification)
    {
        $this->securityClassification = $securityClassification;
        return $this;
    }

    /**
     * Getter for customizedSecurityClassification
     *
     * @ElementName customizedSecurityClassification
     * @return string|null
     */
    public function getCustomizedSecurityClassification()
    {
        return $this->customizedSecurityClassification;
    }

    /**
     * Setter for customizedSecurityClassification
     *
     * @ElementName customizedSecurityClassification
     * @param string|null $customizedSecurityClassification
     * @return $this
     */
    public function setCustomizedSecurityClassification($customizedSecurityClassification)
    {
        $this->customizedSecurityClassification = $customizedSecurityClassification;
        return $this;
    }


}

