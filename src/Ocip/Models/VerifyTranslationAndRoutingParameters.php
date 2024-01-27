<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * VerifyTranslationAndRoutingParameters
 *
 * Verification Translation and Routing parameters
 *         for creating a Verify Translation and Routing request from
 *         parameters.
 *                 
 *         The following data elements are only used in AS data mode and ignored in XS data mode:
 *           contact
 *           diversion       
 *                 
 *         The following data elements are only used in XS data mode and ignored in AS data mode:
 *           imsCallType
 *           sipInstance
 *           viaAddress
 *
 * @Groups [{"id":"6337d0cfba4de1c83587203c5b0bae54:5778","type":"sequence"}]
 */
class VerifyTranslationAndRoutingParameters
{
    /**
     * @ElementName origination
     * @Type \CWM\BroadWorksConnector\Ocip\Models\VerifyTranslationAndRoutingOrigination
     * @Group 6337d0cfba4de1c83587203c5b0bae54:5778
     * @var \CWM\BroadWorksConnector\Ocip\Models\VerifyTranslationAndRoutingOrigination|null
     */
    protected $origination = null;

    /**
     * @ElementName destination
     * @Type string
     * @Group 6337d0cfba4de1c83587203c5b0bae54:5778
     * @MinLength 1
     * @MaxLength 500
     * @var string|null
     */
    protected $destination = null;

    /**
     * @ElementName contact
     * @Type string
     * @Optional
     * @Group 6337d0cfba4de1c83587203c5b0bae54:5778
     * @MinLength 1
     * @MaxLength 256
     * @var string|null
     */
    protected $contact = null;

    /**
     * @ElementName diversion
     * @Type string
     * @Optional
     * @Group 6337d0cfba4de1c83587203c5b0bae54:5778
     * @MinLength 1
     * @MaxLength 256
     * @var string|null
     */
    protected $diversion = null;

    /**
     * @ElementName imsCallType
     * @Type \CWM\BroadWorksConnector\Ocip\Models\IMSCallType
     * @Optional
     * @Group 6337d0cfba4de1c83587203c5b0bae54:5778
     * @var \CWM\BroadWorksConnector\Ocip\Models\IMSCallType|null
     */
    protected $imsCallType = null;

    /**
     * @ElementName sipInstance
     * @Type string
     * @Optional
     * @Group 6337d0cfba4de1c83587203c5b0bae54:5778
     * @MinLength 1
     * @MaxLength 161
     * @var string|null
     */
    protected $sipInstance = null;

    /**
     * @ElementName viaAddress
     * @Type string
     * @Optional
     * @Group 6337d0cfba4de1c83587203c5b0bae54:5778
     * @MinLength 1
     * @MaxLength 80
     * @var string|null
     */
    protected $viaAddress = null;

    /**
     * Getter for origination
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\VerifyTranslationAndRoutingOrigination
     */
    public function getOrigination()
    {
        return $this->origination instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->origination;
    }

    /**
     * Setter for origination
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\VerifyTranslationAndRoutingOrigination $origination
     * @return $this
     */
    public function setOrigination(\CWM\BroadWorksConnector\Ocip\Models\VerifyTranslationAndRoutingOrigination $origination)
    {
        $this->origination = $origination;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetOrigination()
    {
        $this->origination = null;
        return $this;
    }

    /**
     * Getter for destination
     *
     * @return string
     */
    public function getDestination()
    {
        return $this->destination instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->destination;
    }

    /**
     * Setter for destination
     *
     * @param string $destination
     * @return $this
     */
    public function setDestination($destination)
    {
        $this->destination = $destination;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetDestination()
    {
        $this->destination = null;
        return $this;
    }

    /**
     * Getter for contact
     *
     * @return string
     */
    public function getContact()
    {
        return $this->contact instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->contact;
    }

    /**
     * Setter for contact
     *
     * @param string $contact
     * @return $this
     */
    public function setContact($contact)
    {
        $this->contact = $contact;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetContact()
    {
        $this->contact = null;
        return $this;
    }

    /**
     * Getter for diversion
     *
     * @return string
     */
    public function getDiversion()
    {
        return $this->diversion instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->diversion;
    }

    /**
     * Setter for diversion
     *
     * @param string $diversion
     * @return $this
     */
    public function setDiversion($diversion)
    {
        $this->diversion = $diversion;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetDiversion()
    {
        $this->diversion = null;
        return $this;
    }

    /**
     * Getter for imsCallType
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\IMSCallType
     */
    public function getImsCallType()
    {
        return $this->imsCallType instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->imsCallType;
    }

    /**
     * Setter for imsCallType
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\IMSCallType $imsCallType
     * @return $this
     */
    public function setImsCallType(\CWM\BroadWorksConnector\Ocip\Models\IMSCallType $imsCallType)
    {
        $this->imsCallType = $imsCallType;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetImsCallType()
    {
        $this->imsCallType = null;
        return $this;
    }

    /**
     * Getter for sipInstance
     *
     * @return string
     */
    public function getSipInstance()
    {
        return $this->sipInstance instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->sipInstance;
    }

    /**
     * Setter for sipInstance
     *
     * @param string $sipInstance
     * @return $this
     */
    public function setSipInstance($sipInstance)
    {
        $this->sipInstance = $sipInstance;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetSipInstance()
    {
        $this->sipInstance = null;
        return $this;
    }

    /**
     * Getter for viaAddress
     *
     * @return string
     */
    public function getViaAddress()
    {
        return $this->viaAddress instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->viaAddress;
    }

    /**
     * Setter for viaAddress
     *
     * @param string $viaAddress
     * @return $this
     */
    public function setViaAddress($viaAddress)
    {
        $this->viaAddress = $viaAddress;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetViaAddress()
    {
        $this->viaAddress = null;
        return $this;
    }
}

