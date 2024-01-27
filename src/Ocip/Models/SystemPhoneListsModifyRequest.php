<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemPhoneListsModifyRequest
 *
 * Modify system phone list settings.
 *         The response is either a SuccessResponse or ErrorResponse
 *
 * @see SuccessResponse
 * @see ErrorResponse
 * @Groups [{"id":"da582a1f8028404e70d260cf1f891033:14640","type":"sequence"}]
 */
class SystemPhoneListsModifyRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{
    /**
     * @ElementName allowSpecialNumbersInPhoneLists
     * @Type bool
     * @Optional
     * @Group da582a1f8028404e70d260cf1f891033:14640
     * @var bool|null
     */
    protected $allowSpecialNumbersInPhoneLists = null;

    /**
     * Getter for allowSpecialNumbersInPhoneLists
     *
     * @return bool
     */
    public function getAllowSpecialNumbersInPhoneLists()
    {
        return $this->allowSpecialNumbersInPhoneLists instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->allowSpecialNumbersInPhoneLists;
    }

    /**
     * Setter for allowSpecialNumbersInPhoneLists
     *
     * @param bool $allowSpecialNumbersInPhoneLists
     * @return $this
     */
    public function setAllowSpecialNumbersInPhoneLists($allowSpecialNumbersInPhoneLists)
    {
        $this->allowSpecialNumbersInPhoneLists = $allowSpecialNumbersInPhoneLists;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetAllowSpecialNumbersInPhoneLists()
    {
        $this->allowSpecialNumbersInPhoneLists = null;
        return $this;
    }
}

