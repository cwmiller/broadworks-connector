<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemPhoneListsGetResponse
 *
 * Response to the SystemPhoneListsGetRequest.
 *
 * @see SystemPhoneListsGetRequest
 * @Groups [{"id":"da582a1f8028404e70d260cf1f891033:14624","type":"sequence"}]
 */
class SystemPhoneListsGetResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{
    /**
     * @ElementName allowSpecialNumbersInPhoneLists
     * @Type bool
     * @Group da582a1f8028404e70d260cf1f891033:14624
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

