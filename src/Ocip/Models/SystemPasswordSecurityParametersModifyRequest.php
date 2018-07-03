<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemPasswordSecurityParametersModifyRequest
 *
 * Modify the password security settings for the system.
 *         The response is either a SuccessResponse or an ErrorResponse.
 *
 * @see SuccessResponse
 * @see ErrorResponse
 */
class SystemPasswordSecurityParametersModifyRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
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

