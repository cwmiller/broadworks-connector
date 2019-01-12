<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserIntegratedIMPGetResponse21sp1
 *
 * Response to the UserIntegratedIMPGetRequest21sp1.
 *         The response contains the Integrated IMP specific service attributes for the user.
 *         The following elements are only used in AS data mode and not returned in XS data mode:
 *           impId
 *           isAlternateImpId
 *
 * @see UserIntegratedIMPGetRequest21sp1
 * @Groups [{"id":"23389100b68cef3aa07ee12ac7a2bd16:351","type":"sequence"}]
 */
class UserIntegratedIMPGetResponse21sp1 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName isActive
     * @Type bool
     * @Group 23389100b68cef3aa07ee12ac7a2bd16:351
     * @var bool|null
     */
    private $isActive = null;

    /**
     * @ElementName impId
     * @Type string
     * @Optional
     * @Group 23389100b68cef3aa07ee12ac7a2bd16:351
     * @var string|null
     */
    private $impId = null;

    /**
     * @ElementName isAlternateImpId
     * @Type bool
     * @Optional
     * @Group 23389100b68cef3aa07ee12ac7a2bd16:351
     * @var bool|null
     */
    private $isAlternateImpId = null;

    /**
     * Getter for isActive
     *
     * @return bool
     */
    public function getIsActive()
    {
        return $this->isActive instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->isActive;
    }

    /**
     * Setter for isActive
     *
     * @param bool $isActive
     * @return $this
     */
    public function setIsActive($isActive)
    {
        $this->isActive = $isActive;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetIsActive()
    {
        $this->isActive = null;
        return $this;
    }

    /**
     * Getter for impId
     *
     * @return string
     */
    public function getImpId()
    {
        return $this->impId instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->impId;
    }

    /**
     * Setter for impId
     *
     * @param string $impId
     * @return $this
     */
    public function setImpId($impId)
    {
        $this->impId = $impId;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetImpId()
    {
        $this->impId = null;
        return $this;
    }

    /**
     * Getter for isAlternateImpId
     *
     * @return bool
     */
    public function getIsAlternateImpId()
    {
        return $this->isAlternateImpId instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->isAlternateImpId;
    }

    /**
     * Setter for isAlternateImpId
     *
     * @param bool $isAlternateImpId
     * @return $this
     */
    public function setIsAlternateImpId($isAlternateImpId)
    {
        $this->isAlternateImpId = $isAlternateImpId;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetIsAlternateImpId()
    {
        $this->isAlternateImpId = null;
        return $this;
    }


}

