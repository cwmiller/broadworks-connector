<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemThirdPartyVoiceMailSupportGetDnListResponse
 *
 * Response to SystemThirdPartyVoiceMailSupportGetDnListRequest.
 *        Contains a table with a row for each ThirdPartyVoiceMailSupport User DN and column headings:
 *        "Phone Number", "Description"
 *
 * @see SystemThirdPartyVoiceMailSupportGetDnListRequest
 * @Groups [{"id":"21e97b8199c6e7eff29a84874335b46e:157","type":"sequence"}]
 */
class SystemThirdPartyVoiceMailSupportGetDnListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{
    /**
     * @ElementName thirdPartyVoiceMailSupportTable
     * @Type \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
     * @Group 21e97b8199c6e7eff29a84874335b46e:157
     * @var \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    protected $thirdPartyVoiceMailSupportTable = null;

    /**
     * Getter for thirdPartyVoiceMailSupportTable
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
     */
    public function getThirdPartyVoiceMailSupportTable()
    {
        return $this->thirdPartyVoiceMailSupportTable instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->thirdPartyVoiceMailSupportTable;
    }

    /**
     * Setter for thirdPartyVoiceMailSupportTable
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\C\OCITable $thirdPartyVoiceMailSupportTable
     * @return $this
     */
    public function setThirdPartyVoiceMailSupportTable(\CWM\BroadWorksConnector\Ocip\Models\C\OCITable $thirdPartyVoiceMailSupportTable)
    {
        $this->thirdPartyVoiceMailSupportTable = $thirdPartyVoiceMailSupportTable;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetThirdPartyVoiceMailSupportTable()
    {
        $this->thirdPartyVoiceMailSupportTable = null;
        return $this;
    }
}

