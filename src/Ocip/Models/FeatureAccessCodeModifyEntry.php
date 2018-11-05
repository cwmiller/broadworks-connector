<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * FeatureAccessCodeModifyEntry
 *
 * Feature Access Code Entry to be used in all the system, service provider and 
 *           group modify commands.
 */
class FeatureAccessCodeModifyEntry
{

    /**
     * @ElementName featureAccessCodeName
     * @var string|null
     */
    private $featureAccessCodeName = null;

    /**
     * @ElementName mainCode
     * @var string|null
     */
    private $mainCode = null;

    /**
     * @ElementName alternateCode
     * @Nillable
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $alternateCode = null;

    /**
     * @ElementName enableFAC
     * @var bool|null
     */
    private $enableFAC = null;

    /**
     * Getter for featureAccessCodeName
     *
     * @ElementName featureAccessCodeName
     * @return string|null
     */
    public function getFeatureAccessCodeName()
    {
        return $this->featureAccessCodeName;
    }

    /**
     * Setter for featureAccessCodeName
     *
     * @ElementName featureAccessCodeName
     * @param string|null $featureAccessCodeName
     * @return $this
     */
    public function setFeatureAccessCodeName($featureAccessCodeName)
    {
        $this->featureAccessCodeName = $featureAccessCodeName;
        return $this;
    }

    /**
     * Getter for mainCode
     *
     * @ElementName mainCode
     * @return string|null
     */
    public function getMainCode()
    {
        return $this->mainCode;
    }

    /**
     * Setter for mainCode
     *
     * @ElementName mainCode
     * @param string|null $mainCode
     * @return $this
     */
    public function setMainCode($mainCode)
    {
        $this->mainCode = $mainCode;
        return $this;
    }

    /**
     * Getter for alternateCode
     *
     * @ElementName alternateCode
     * @Nillable
     * @return string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    public function getAlternateCode()
    {
        return $this->alternateCode;
    }

    /**
     * Setter for alternateCode
     *
     * @ElementName alternateCode
     * @Nillable
     * @param string|null|\CWM\BroadWorksConnector\Ocip\Nil $alternateCode
     * @return $this
     */
    public function setAlternateCode($alternateCode)
    {
        $this->alternateCode = $alternateCode;
        return $this;
    }

    /**
     * Getter for enableFAC
     *
     * @ElementName enableFAC
     * @return bool|null
     */
    public function getEnableFAC()
    {
        return $this->enableFAC;
    }

    /**
     * Setter for enableFAC
     *
     * @ElementName enableFAC
     * @param bool|null $enableFAC
     * @return $this
     */
    public function setEnableFAC($enableFAC)
    {
        $this->enableFAC = $enableFAC;
        return $this;
    }


}

