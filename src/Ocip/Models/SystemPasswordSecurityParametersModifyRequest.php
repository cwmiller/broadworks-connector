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
 * @Groups [{"id":"7f663d5135470c33ca64b0eed3c3aa0c:12618","type":"sequence"}]
 */
class SystemPasswordSecurityParametersModifyRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName useExistingHashing
     * @Type bool
     * @Optional
     * @Group 7f663d5135470c33ca64b0eed3c3aa0c:12618
     * @var bool|null
     */
    private $useExistingHashing = null;

    /**
     * @ElementName enforcePasswordChangeOnExpiry
     * @Type bool
     * @Optional
     * @Group 7f663d5135470c33ca64b0eed3c3aa0c:12618
     * @var bool|null
     */
    private $enforcePasswordChangeOnExpiry = null;

    /**
     * Getter for useExistingHashing
     *
     * @return bool
     */
    public function getUseExistingHashing()
    {
        return $this->useExistingHashing instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->useExistingHashing;
    }

    /**
     * Setter for useExistingHashing
     *
     * @param bool $useExistingHashing
     * @return $this
     */
    public function setUseExistingHashing($useExistingHashing)
    {
        $this->useExistingHashing = $useExistingHashing;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetUseExistingHashing()
    {
        $this->useExistingHashing = null;
        return $this;
    }

    /**
     * Getter for enforcePasswordChangeOnExpiry
     *
     * @return bool
     */
    public function getEnforcePasswordChangeOnExpiry()
    {
        return $this->enforcePasswordChangeOnExpiry instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->enforcePasswordChangeOnExpiry;
    }

    /**
     * Setter for enforcePasswordChangeOnExpiry
     *
     * @param bool $enforcePasswordChangeOnExpiry
     * @return $this
     */
    public function setEnforcePasswordChangeOnExpiry($enforcePasswordChangeOnExpiry)
    {
        $this->enforcePasswordChangeOnExpiry = $enforcePasswordChangeOnExpiry;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetEnforcePasswordChangeOnExpiry()
    {
        $this->enforcePasswordChangeOnExpiry = null;
        return $this;
    }


}

