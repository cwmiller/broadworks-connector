<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * PlaceModifyRequest
 *
 * Request to configure a WebEx room/place to have the primary endpoint of WebEx Teams device. 
 *         
 *         placeUserId refers to a WebEx room/place. 
 *         webExSIPAddress specifies the WebEx SIP address of the place. The format of this parameter is: user@domain. 
 *         The user part specified in webExSIPAddress will be set to the lineport of the place’s primary endpoint. The endpoint
 *         will have a static address with URI set to "sip:user@domain". 
 *         The domain specified in webExSIPAddress will be:
 *         - added to the system if it does not exist yet. 
 *         - assigned to the service provider/enterprise which the place belongs to, if it has not been assigned yet.  
 *         - assigned to the group which the place belongs to, if it has not been assigned yet.  
 *
 *         The response is either SuccessResponse or ErrorResponse.
 *
 * @see SuccessResponse
 * @see ErrorResponse
 * @Groups [{"id":"53d18cc797d03d802cbc411ad821f1d4:155","type":"sequence"}]
 */
class PlaceModifyRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName placeUserId
     * @Type string
     * @Group 53d18cc797d03d802cbc411ad821f1d4:155
     * @MinLength 1
     * @MaxLength 161
     * @var string|null
     */
    protected $placeUserId = null;

    /**
     * @ElementName webExSIPAddress
     * @Type string
     * @Optional
     * @Group 53d18cc797d03d802cbc411ad821f1d4:155
     * @MinLength 1
     * @MaxLength 161
     * @var string|null
     */
    protected $webExSIPAddress = null;

    /**
     * Getter for placeUserId
     *
     * @return string
     */
    public function getPlaceUserId()
    {
        return $this->placeUserId instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->placeUserId;
    }

    /**
     * Setter for placeUserId
     *
     * @param string $placeUserId
     * @return $this
     */
    public function setPlaceUserId($placeUserId)
    {
        $this->placeUserId = $placeUserId;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetPlaceUserId()
    {
        $this->placeUserId = null;
        return $this;
    }

    /**
     * Getter for webExSIPAddress
     *
     * @return string
     */
    public function getWebExSIPAddress()
    {
        return $this->webExSIPAddress instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->webExSIPAddress;
    }

    /**
     * Setter for webExSIPAddress
     *
     * @param string $webExSIPAddress
     * @return $this
     */
    public function setWebExSIPAddress($webExSIPAddress)
    {
        $this->webExSIPAddress = $webExSIPAddress;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetWebExSIPAddress()
    {
        $this->webExSIPAddress = null;
        return $this;
    }


}

