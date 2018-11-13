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
     * @Type string
     * @var string|null
     */
    private $featureAccessCodeName = null;

    /**
     * @ElementName mainCode
     * @Type string
     * @var string|null
     */
    private $mainCode = null;

    /**
     * @ElementName alternateCode
     * @Type string
     * @Nillable
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $alternateCode = null;

    /**
     * @ElementName enableFAC
     * @Type bool
     * @var bool|null
     */
    private $enableFAC = null;

    /**
     * Getter for featureAccessCodeName
     *
     * @return string
     */
    public function getFeatureAccessCodeName()
    {
        return $this->featureAccessCodeName instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->featureAccessCodeName;
    }

    /**
     * Setter for featureAccessCodeName
     *
     * @param string $featureAccessCodeName
     * @return $this
     */
    public function setFeatureAccessCodeName($featureAccessCodeName)
    {
        $this->featureAccessCodeName = $featureAccessCodeName;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetFeatureAccessCodeName()
    {
        $this->featureAccessCodeName = null;
        return $this;
    }

    /**
     * Getter for mainCode
     *
     * @return string
     */
    public function getMainCode()
    {
        return $this->mainCode instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->mainCode;
    }

    /**
     * Setter for mainCode
     *
     * @param string $mainCode
     * @return $this
     */
    public function setMainCode($mainCode)
    {
        $this->mainCode = $mainCode;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetMainCode()
    {
        $this->mainCode = null;
        return $this;
    }

    /**
     * Getter for alternateCode
     *
     * @return string|null
     */
    public function getAlternateCode()
    {
        return $this->alternateCode instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->alternateCode;
    }

    /**
     * Setter for alternateCode
     *
     * @param string|null $alternateCode
     * @return $this
     */
    public function setAlternateCode($alternateCode)
    {
        if ($alternateCode === null) {
            $this->alternateCode = new \CWM\BroadWorksConnector\Ocip\Nil;
        } else {
            $this->alternateCode = $alternateCode;
        }
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetAlternateCode()
    {
        $this->alternateCode = null;
        return $this;
    }

    /**
     * Getter for enableFAC
     *
     * @return bool
     */
    public function getEnableFAC()
    {
        return $this->enableFAC instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->enableFAC;
    }

    /**
     * Setter for enableFAC
     *
     * @param bool $enableFAC
     * @return $this
     */
    public function setEnableFAC($enableFAC)
    {
        $this->enableFAC = $enableFAC;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetEnableFAC()
    {
        $this->enableFAC = null;
        return $this;
    }


}

