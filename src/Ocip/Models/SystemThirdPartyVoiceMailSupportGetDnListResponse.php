<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemThirdPartyVoiceMailSupportGetDnListResponse
 *
 * Response to SystemThirdPartyVoiceMailSupportGetDnListRequest.
 *        Contains a table with a row for each ThirdPartyVoiceMailSupport User DN
 * and column headings:
 *        "Phone Number", "Description"
 *
 * @see SystemThirdPartyVoiceMailSupportGetDnListRequest
 */
class SystemThirdPartyVoiceMailSupportGetDnListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName thirdPartyVoiceMailSupportTable
     * @var \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    private $thirdPartyVoiceMailSupportTable = null;

    /**
     * Getter for thirdPartyVoiceMailSupportTable
     *
     * @ElementName thirdPartyVoiceMailSupportTable
     * @return \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    public function getThirdPartyVoiceMailSupportTable()
    {
        return $this->thirdPartyVoiceMailSupportTable;
    }

    /**
     * Setter for thirdPartyVoiceMailSupportTable
     *
     * @ElementName thirdPartyVoiceMailSupportTable
     * @param \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null $thirdPartyVoiceMailSupportTable
     * @return $this
     */
    public function setThirdPartyVoiceMailSupportTable($thirdPartyVoiceMailSupportTable)
    {
        $this->thirdPartyVoiceMailSupportTable = $thirdPartyVoiceMailSupportTable;
        return $this;
    }


}

