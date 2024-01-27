<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemOfficeZoneDeleteRequest
 *
 * Delete an Office Zone.
 *         The response is either a SuccessResponse or an ErrorResponse.
 *
 * @see SuccessResponse
 * @see ErrorResponse
 * @Groups [{"id":"da582a1f8028404e70d260cf1f891033:14053","type":"sequence"}]
 */
class SystemOfficeZoneDeleteRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{
    /**
     * @ElementName officeZoneName
     * @Type string
     * @Group da582a1f8028404e70d260cf1f891033:14053
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

