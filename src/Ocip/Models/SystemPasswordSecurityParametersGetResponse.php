<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemPasswordSecurityParametersGetResponse
 *
 * Response to the SystemPasswordSecurityParametersGetResponse.
 *         The response contains the password security parameters for the system.
 */
class SystemPasswordSecurityParametersGetResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName useExistingHashing
     * @var bool|null
     */
    private $useExistingHashing = null;

    /**
     * @ElementName enforcePasswordChangeOnExpiry
     * @var bool|null
     */
    private $enforcePasswordChangeOnExpiry = null;

    /**
     * Getter for useExistingHashing
     *
     * @ElementName useExistingHashing
     * @return bool|null
     */
    public function getUseExistingHashing()
    {
        return $this->useExistingHashing;
    }

    /**
     * Setter for useExistingHashing
     *
     * @ElementName useExistingHashing
     * @param bool|null $useExistingHashing
     * @return $this
     */
    public function setUseExistingHashing($useExistingHashing)
    {
        $this->useExistingHashing = $useExistingHashing;
        return $this;
    }

    /**
     * Getter for enforcePasswordChangeOnExpiry
     *
     * @ElementName enforcePasswordChangeOnExpiry
     * @return bool|null
     */
    public function getEnforcePasswordChangeOnExpiry()
    {
        return $this->enforcePasswordChangeOnExpiry;
    }

    /**
     * Setter for enforcePasswordChangeOnExpiry
     *
     * @ElementName enforcePasswordChangeOnExpiry
     * @param bool|null $enforcePasswordChangeOnExpiry
     * @return $this
     */
    public function setEnforcePasswordChangeOnExpiry($enforcePasswordChangeOnExpiry)
    {
        $this->enforcePasswordChangeOnExpiry = $enforcePasswordChangeOnExpiry;
        return $this;
    }


}

