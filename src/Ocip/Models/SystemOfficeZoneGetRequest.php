<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemOfficeZoneGetRequest
 *
 * Get an existing Office Zone.
 *         The response is either a SystemOfficeZoneGetResponse
 *         or an ErrorResponse.
 *
 * @see SystemOfficeZoneGetResponse
 * @see ErrorResponse
 * @Groups [{"id":"da582a1f8028404e70d260cf1f891033:14135","type":"sequence"}]
 */
class SystemOfficeZoneGetRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{
    /**
     * @ElementName officeZoneName
     * @Type string
     * @Group da582a1f8028404e70d260cf1f891033:14135
     * @MinLength 1
     * @MaxLength 40
     * @var string|null
     */
    protected $officeZoneName = null;

    /**
     * Getter for officeZoneName
     *
     * @return string
     */
    public function getOfficeZoneName()
    {
        return $this->officeZoneName instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->officeZoneName;
    }

    /**
     * Setter for officeZoneName
     *
     * @param string $officeZoneName
     * @return $this
     */
    public function setOfficeZoneName($officeZoneName)
    {
        $this->officeZoneName = $officeZoneName;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetOfficeZoneName()
    {
        $this->officeZoneName = null;
        return $this;
    }
}

